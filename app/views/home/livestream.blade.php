@extends('master.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')

<h1>Livestream</h1>

<div class="row">
	<div class="col-md-8">
		<p>See our worship services live right here! You can also view recent past services in case you missed them live.</p>

		<h2>Lutheran Worship 6-26-16</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" id="ls_embed_1466428168" src="//livestream.com/accounts/8727672/events/5645145/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"></iframe>
		</div>

		<h2>Lutheran Worship 6-12-16</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" id="ls_embed_1465349254" src="//livestream.com/accounts/8727672/events/5558110/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"></iframe>
		</div>

		<h2>Lutheran Worship 6-5-16</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" id="ls_embed_1464655410" src="//livestream.com/accounts/8727672/events/5505319/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"></iframe>
		</div>

		<h2>Lutheran Worship 5-29-16</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" id="ls_embed_1464020653" src="//livestream.com/accounts/8727672/events/5453314/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"></iframe>
		</div>

		<h2>Lutheran Worship 5-15-16</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" id="ls_embed_1463094283" src="//livestream.com/accounts/8727672/events/5380344/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"></iframe>
		</div>

		<!--<h2>Richard Nelson Memorial Service</h2>
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="http://livestream.com/accounts/8727672/events/4739826/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>
		</div>-->
	</div>
</div>

@stop
