<?php

namespace christwaterford\Http\Controllers;

use Illuminate\Http\Request;

use christwaterford\Http\Controllers\Controller;
use Analytics;
use Auth;
use Cache;
use Mail;
use StdClass;
use christwaterford\CalendarEvent;

class HomeController extends Controller
{

    public function getIndex()
    {
        $view = view('home.index');
        $view->active_page = 'home';
        $view->title = 'Welcome';
        $view->description = 'We are a community of God\'s people called to share the love of God as made known in Jesus Christ and to be transformed by that love.';

        $date = strtotime("-1 days");
        $datelimit = strtotime("+120 days");
        $view->events = CalendarEvent::where('starts_at','>=',date('Y-m-d H:i:s', $date))
            ->where('starts_at','<',date('Y-m-d H:i:s', $datelimit))
            ->where('is_featured','=',1)
            ->orderBy('starts_at')
            ->take(10)
            ->get();
        return $view;
    }

    public function getPeopleLikeYou()
    {
        $view = view('home.people-like-you');
        $view->active_page = 'people-like-you';
        $view->title = 'People Like You';
        $view->description = 'It\'s people like you who make our church special';
        return $view;
    }

    public function getNotLutheran()
    {
        $view = view('home.not-lutheran');
        $view->active_page = 'not-lutheran';
        $view->title = 'What if I\'m not Lutheran?';
        $view->description = 'Everybody is welcome at Christ Lutheran. For the most part, we use standard, easy-to-follow Lutheran liturgy in our services. The words are printed in your bulletin and projected onto a large screen during the service.';
        return $view;
    }

    public function getBecomeInvolved()
    {
        $view = view('home.become-involved');
        $view->active_page = 'become-involved';
        $view->title = 'Become Involved';
        $view->description = 'There are many opportunities for you to become involved at Chris Lutheran Church.';
        return $view;
    }

    public function getAboutUs()
    {
        $view = view('home.about-us');
        $view->active_page = 'about-us';
        $view->title = 'About Us';
        $view->description = 'Christ Lutheran was organized as a congregation on October 23, 1944 in Waterford Township. On February 13, 1949, our congregation held its first worship service in our own building at its present site near Williams Lake and Airport Roads.';
        return $view;
    }

    public function getWorshipInformation()
    {
        $view = view('home.worship-information');
        $view->active_page = 'worship-information';
        $view->title = 'Worship Information';
        $view->description = 'We worship at 10:00 AM on Sundays. We also have special service times during the Christmas and the Lenten/Easter season as well as Thanksgiving eve.';
        return $view;
    }

    public function getEvents(Request $request, $month_year = null)
    {
        if ($month_year)
        {
            $url = explode('-', $month_year);
            $date = strtotime($url[0].' 1, '.$url[1]);
        } else {
            $date = time();
        }
        $prev_month = strtotime('-1 month', $date);
        $next_month = strtotime('+1 month', $date);
        $today = getdate();
        $first_day_of_the_month = strtotime(date('F', $date).' 1, '.date('Y', $date));
        $last_day_of_the_month = strtotime(date('F', $date).' '.date('t', $date).', '.date('Y', $date));

        $view = view('home.events');
        $view->active_page = 'events';
        //$view->title = date('F Y',$date).' Events';
        $view->title = 'Events';

        $view->current_date = time();
        $view->date = $date;
        $view->today = $today;
        $view->prev_month = $prev_month;
        $view->next_month = $next_month;
        $view->first_day_of_the_month = $first_day_of_the_month;
        $view->last_day_of_the_month = $last_day_of_the_month;
        $view->daysToDisplay = date('w', $first_day_of_the_month) + date('t', $date) + (6 - date('w', $last_day_of_the_month));

        /*$events = Cache::rememberForever(strtolower(date('F-Y',$date)), function() use ($first_day_of_the_month, $next_month) {
            return CalendarEvent::where('starts_at','>=',date("Y-m-d H:i:s", $first_day_of_the_month))
                ->where('starts_at','<',date("Y-m-d H:i:s", $next_month))
                ->orderBy('starts_at')
                ->orderBy('is_all_day')
                ->get();
        });*/

        $events = CalendarEvent::where('starts_at','>=',date('Y-m-d H:i:s', $first_day_of_the_month))
                ->where('starts_at','<',date('Y-m-d H:i:s', $next_month))
                ->orderBy('is_all_day','desc')
                ->orderBy('starts_at')
                ->get();

        $month = new StdClass;
        for ($d = 1; $d <= date('t',$date); $d++)
        {   
            $month->dates[$d] = new StdClass;
            $day = strtotime(date('F', $date).' '.$d.', '.date('Y', $date));
            $next_day = strtotime('+1 day', $day);
            $month->dates[$d]->php_date = $day;
            $month->dates[$d]->date_time = date('Y-m-d H:i:s', $day);
            $month->dates[$d]->day_count = $d;
            $e = 0;
            foreach ($events as $event) {
                $month->dates[$d]->events[$e] = new StdClass;
                if($event->starts_at >= date("Y-m-d H:i:s", $day) && $event->starts_at < date("Y-m-d H:i:s", $next_day))
                {
                    $month->dates[$d]->events[$e] = json_decode($event);
                    $e++;
                }
            }
        }
        $view->month = $month;


        if ($request->get('event')) {
            $event = CalendarEvent::find($request->get('event'));
            if ($event) {
                $phpdate = strtotime(strtok($event->starts_at,' '));
                $tomorrow = strtotime('+1 day', $phpdate);
                $events = CalendarEvent::where('starts_at','>=',date("Y-m-d H:i:s", $phpdate))
                    ->where('starts_at','<',date("Y-m-d H:i:s", $tomorrow))
                    ->orderBy('is_all_day','desc')
                    ->orderBy('starts_at')
                    ->get();

                foreach ($events as $event) {
                    $event->starts_at_date_formatted = date('n/j/Y',strtotime($event->starts_at));
                    $event->starts_at_time_formatted = date('g:ia',strtotime($event->starts_at));
                    $event->ends_at_date_formatted = date('n/j/Y',strtotime($event->ends_at));
                    $event->ends_at_time_formatted = date('g:ia',strtotime($event->ends_at));
                }

                $view->event = $event;
                $view->events = $events;
                $view->event_date = $phpdate;
            }
        }

        return $view;
    }

    public function ministries()
    {
        $view = view('home.ministries');
        $view->active_page = 'teams';
        $view->title = 'Ministries and Teams';
        $view->description = 'Ministries and teams of Chirst Lutheran Church of Waterford.';
        return $view;
    }

    public function ministriesWorshipMusic()
    {
        $view = view('home.ministries-worship-music');
        $view->active_page = 'teams';
        $view->child_page = 'worship-music';
        $view->title = 'Worship and Music Team';
        $view->description = 'We seek to share the love of Jesus by offering a variety of ways in which members and participants can share their gifts and talents in the praise and worship ministry of our Lord.';
        return $view;
    }

    public function ministriesEducational()
    {
        $view = view('home.ministries-educational');
        $view->active_page = 'teams';
        $view->child_page = 'educational';
        $view->title = 'Educational Team';
        $view->description = 'We seek to share the love of God by offering educational opportunities that nourish the basic teachings of our faith, as well as help us grow spiritually in the awareness and workings of God in our lives and our world.';
        return $view;
    }

    public function ministriesChildrenYouth()
    {
        $view = view('home.ministries-children-youth');
        $view->active_page = 'teams';
        $view->child_page = 'children-youth';
        $view->title = 'Children and Youth Team';
        $view->description = 'Kids are always welcome here. We have a nursery for children three and under during Sunday morning services. Kids hear a special message from the Pastor before going to their own Sunday Alive! activities downstairs.';
        return $view;
    }

    public function ministriesCommunityGlobal()
    {
        $view = view('home.ministries-community-global');
        $view->active_page = 'teams';
        $view->child_page = 'community-global';
        $view->title = 'Community and Global Team';
        $view->description = 'We seek to share the love of God by serving those in need both locally and around the world. We strive to be advocates for God\'s justice and good stewards of God\'s creation.';
        return $view;
    }

    public function ministriesCongregationalLife()
    {
        $view = view('home.ministries-congregational-life');
        $view->active_page = 'teams';
        $view->child_page = 'congregational-life';
        $view->title = 'Congregational Life Team';
        $view->description = 'We seek to share the love of God by providing opportunities for congregational fellowship and extending hospitality to all.';
        return $view;
    }

    public function getFaces($page = null)
    {
        $view = view('home.faces');
        $view->active_page = 'faces';
        $view->title = (isset($page))?'Faces of CLCW Page '.$page:'Faces of CLCW';
        $view->description = 'There\'s lots of fun and fellowship here at Christ Lutheran';
        $view->page = $page;
        return $view;
    }

    public function getContact()
    {
        $view = view('home.contact-us');
        $view->active_page = 'contact';
        $view->title = 'Contact Us';
        $view->description = 'Now let us hear from you.';
        return $view;
    }

    public function postContact(Request $request)
    {
        $validator = $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required',
                'g-recaptcha-response' => 'required',
                'message' => 'required'
            ],
            [
                'name.required' => 'Please enter your name.',
                'email.required' => 'Please enter your email address.',
                'g-recaptcha-response.required' => 'Please check the reCAPTCHA box.',
                'message.required' => 'Please enter a message.'
            ]
        );

        $data = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message_text' => $request->get('message'),
        );

        Mail::send('emails.contact', $data, function($message) use ($request)
        {
            $message->to('revjohnneg@christwaterford.org', 'Pastor John Negele');
            //$message->from('matt@crandelldesign.com', 'CLC Admin');
            $message->replyTo($request->get('email'), $request->get('name'));
            $message->subject('You\'ve Been Contacted by the Christ Lutheran Church Website.');
        });

        Analytics::trackEvent('Email', 'sent', 'Email Sent', 1);

        return redirect('/contact')->with('status', 'Thank you for contacting us, we will get back to you as soon as possible.');
    }

    public function getLivestream()
    {
        $view = view('home.livestream');
        $view->active_page = 'livestream';
        $view->title = 'Livestream';
        $view->description = 'See our worship services live right here! You can also view recent past services in case you missed them live.';
        return $view;
    }

}