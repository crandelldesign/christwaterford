@extends('master.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')

<h1>Livestream</h1>

<div class="row">
	<div class="col-md-8">
		<p>See our worship services live right here! You can also view recent past services in case you missed them live.</p>

		<h2>Lutheran Worship 2-14-16</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="http://livestream.com/accounts/8727672/events/4799942/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>
		</div>

		<h2>Lutheran Worship 2-7-16</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="http://livestream.com/accounts/8727672/events/4768084/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>
		</div>

		<h2>Richard Nelson Memorial Service</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="http://livestream.com/accounts/8727672/events/4739826/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>
		</div>

		<h2>Lutheran Worship 1-31-16</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="http://livestream.com/accounts/8727672/events/4737311/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>
		</div>

		<h2>Lutheran Worship 1-24-16</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="http://livestream.com/accounts/8727672/events/4712610/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>
		</div>

	</div>
</div>

@stop
