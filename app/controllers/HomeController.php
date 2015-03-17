<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
        $vw = View::make('home.index');
        $vw->title = "Welcome to Christ Lutheran Church of Waterford, MI";
        $vw->description = "Where CLC also means Caring, Loving Community.";

        $date = strtotime("-1 days");
        $datelimit = strtotime("+120 days");
        $events = CalendarEvent::where('starts_at','>=',date("Y-m-d H:i:s", $date))
				->where('starts_at','<',date("Y-m-d H:i:s", $datelimit))
				->where('is_featured','=',1)
				->take(10)
				->get();
		$vw->events = $events;

        return $vw;
	}

	public function getPeopleLikeYou()
	{
		$vw = View::make('home.people-like-you');
        $vw->title = "People Like You - Christ Lutheran Church";
        $vw->description = "It's people like you who make our church special.";

        return $vw;
	}

	public function getNotLutheran()
	{
		$vw = View::make('home.not-lutheran');
        $vw->title = "Not a Lutheran? - Christ Lutheran Church";
        $vw->description = "What if I'm not Lutheran?";

        return $vw;
	}

	public function getBecomeInvolved()
	{
		$vw = View::make('home.become-involved');
        $vw->title = "Become Involved - Christ Lutheran Church";
        $vw->description = "Are there opportunities for me to become involved?";

        return $vw;
	}

	public function getAboutUs()
	{
		$vw = View::make('home.about-us');
        $vw->title = "About Us - Christ Lutheran Church";
        $vw->description = "Who are we?";

        return $vw;
	}

	public function getWorshipInformation()
	{
		$vw = View::make('home.worship-information');
        $vw->title = "Worship Information - Christ Lutheran Church";
        $vw->description = "We worship at 10:00 AM on Sundays";

        return $vw;
	}

	public function getEvents($monthYear = null)
	{
		$code = array();
        //$code[] = View::make('home.jscode.events');
        $vw = View::make('home.events')->with('code', implode(' ', $code));
        $vw->title = "Events - Christ Lutheran Church";
        $vw->description = "Check out what's coming up at Christ Lutheran Church of Waterford.";
        $vw->active_page = 'events';

        if ($monthYear)
        {
        	if ($monthYear == 'index.php')
        		return Redirect::to('/events', 301);
        	$url = explode('-', $monthYear);
        	$date = strtotime($url[0].' 1, '.$url[1]);
        } else {
        	$date = time();
        }
		
		$vw->currentDate = time();
		$prevMonth = strtotime('-1 month', $date);
		$nextMonth = strtotime('+1 month', $date);
		$today = getdate();
		$vw->date = $date;
		$vw->today = $today;
		$vw->prevMonth = $prevMonth;
		$vw->nextMonth = $nextMonth;
		$firstDayOfTheMonth = strtotime(date('F', $date).' 1, '.date('Y', $date));
		$lastDayOfTheMonth = strtotime(date('F', $date).' '.date('t', $date).', '.date('Y', $date));
		$vw->firstDayOfTheMonth = $firstDayOfTheMonth;
		$vw->lastDayOfTheMonth = $lastDayOfTheMonth;
		$vw->daysToDisplay = date('w', $firstDayOfTheMonth) + date('t', $date) + (6 - date('w', $lastDayOfTheMonth));

		$events = CalendarEvent::where('starts_at','>=',date("Y-m-d H:i:s", $firstDayOfTheMonth))
				->where('starts_at','<',date("Y-m-d H:i:s", $nextMonth))
				->orderBy('starts_at')
				->orderBy('is_all_day')
				->get();

		$month = new \StdClass;
		for ($d = 1; $d <= date('t',$date); $d++)
		{	
			$month->dates[$d] = new \StdClass;
			$day = strtotime(date('F', $date).' '.$d.', '.date('Y', $date));
			$nextDay = strtotime('+1 day', $day);
			$month->dates[$d]->phpDate = $day;
			$month->dates[$d]->dateTime = date('Y-m-d H:i:s', $day);
			$month->dates[$d]->dayCount = $d;
			$e = 0;
			foreach ($events as $event) {
				$month->dates[$d]->events[$e] = new \StdClass;
				if($event->starts_at >= date("Y-m-d H:i:s", $day) && $event->starts_at < date("Y-m-d H:i:s", $nextDay))
				{
					$month->dates[$d]->events[$e] = json_decode($event);
					$e++;
				}
			}
		}
		$vw->month = $month;

        return $vw;
	}

	public function getFaces($page = null)
	{
		$vw = View::make('home.faces');
        $vw->title = "Faces - Christ Lutheran Church";
        $vw->description = "There's lots of fun and fellowship here at Christ Lutheran";
        $vw->page = $page;

        return $vw;
	}

	public function getContact()
	{
		$vw = View::make('home.contact');
        $vw->title = "Contact Us - Christ Lutheran Church";
        $vw->description = "Relavent links for Christ Lutheran Church";

        return $vw;
	}

	public function postSubmitContact()
	{
		$data = array(
            'email' => Input::get('email'),
            'name' => Input::get('name'),
            'text' => Input::get('message')
        );
		Mail::send('emails.contact', $data, function($message)
		{
		    $message->from(Input::get('email'), Input::get('name'));
		    $message->to('revjohnneg@christwaterford.org', 'Pastor');
		    $message->replyTo(Input::get('email'), Input::get('name'));
		    $message->subject('You\'ve Been Contacted from Christ Lutheran Church by '.Input::get('name').'!');
		});
		return $data;
	}

	public function getLinks()
	{
		$vw = View::make('home.links');
        $vw->title = "Links - Christ Lutheran Church";
        $vw->description = "Relavent links for Christ Lutheran Church";

        return $vw;
	}

	public function getLivestream()
	{
		$vw = View::make('home.livestream');
        $vw->title = "Livestream - Christ Lutheran Church";
        $vw->description = "See the worship services from anywhere.";

        return $vw;
	}

}
