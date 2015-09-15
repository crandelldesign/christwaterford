@extends('master.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')

<h1>Livestream</h1>

<p>See our worship services live right here! You can also view recent past services in case you missed them live.</p>

<h2>Lutheran Worship 9-20-15</h2>
<iframe src="http://livestream.com/accounts/8727672/events/4347326/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>

<h2>Lutheran Worship 9-13-15</h2>
<iframe src="http://livestream.com/accounts/8727672/events/4330371/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>

<h2>Lutheran Worship 9-6-15</h2>
<iframe src="http://livestream.com/accounts/8727672/events/4310960/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>

<h2>Lutheran Worship 8-30-15</h2>
<iframe src="http://livestream.com/accounts/8727672/events/4293089/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>

<h2>Lutheran Worship 8-23-15</h2>
<iframe src="http://livestream.com/accounts/8727672/events/4276411/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>

@stop