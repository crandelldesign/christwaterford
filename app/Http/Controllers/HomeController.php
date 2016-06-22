<?php

namespace christwaterford\Http\Controllers;

use Illuminate\Http\Request;

use christwaterford\Http\Controllers\Controller;
use Auth;
use Cache;
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
                ->orderBy('starts_at')
                ->orderBy('is_all_day')
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
                    ->orderBy('starts_at')
                    ->orderBy('is_all_day')
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

}