<?php

class MinistriesController extends BaseController {

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
        $vw = View::make('home.ministries');
        $vw->title = "Ministries of Christ Lutheran Church of Waterford";
        $vw->description = "Ministries and teams that are with Christ Lutheran Church of Waterford";

        return $vw;
	}

	public function getWorshipMusic()
	{
		$vw = View::make('home.ministries-worship-music');
        $vw->title = "Worship and Music Team - Christ Lutheran Church";
        $vw->description = "Through the leadership of Joan Wendell, the Minister of Music, we seek to share the love of Jesus by offering a variety of ways in which members and participants can share their gifts and talents in the praise and worship ministry of our Lord.";

        return $vw;
	}

	public function getEducational()
	{
		$vw = View::make('home.ministries-educational');
        $vw->title = "Educational Team - Christ Lutheran Church";
        $vw->description = "We seek to share the love of God by offering educational opportunities that nourish the basic teachings of our faith, as well as help us grow spiritually in the awareness and workings of God in our lives and our world.";

        return $vw;
	}

	public function getChildrenYouth()
	{
		$vw = View::make('home.ministries-children-youth');
        $vw->title = "Children and Youth Team - Christ Lutheran Church";
        $vw->description = "Kids are always welcome here. We have a nursery for children three and under during Sunday morning services. Kids hear a special message from the Pastor before going to their own Sunday Alive! activities downstairs.";

        return $vw;
	}

	public function getCommunityGlobal()
	{
		$vw = View::make('home.ministries-community-global');
        $vw->title = "Community and Global Team - Christ Lutheran Church";
        $vw->description = "We seek to share the love of God by serving those in need both locally and around the world. We strive to be advocates for God's justice and good stewards of God's creation.";

        return $vw;
	}

	public function getCongregationalLife()
	{
		$vw = View::make('home.ministries-congregational-life');
        $vw->title = "Congregational Life Team - Christ Lutheran Church";
        $vw->description = "We seek to share the love of God by providing opportunities for congregational fellowship and extending hospitality to all.";

        return $vw;
	}

}