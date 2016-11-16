@extends('layouts.default')

@section('content')

<h1>Livestream</h1>

<div class="row">
    <div class="col-md-8">
        <p>See our worship services live right here! You can also view recent past services in case you missed them.</p>

        <h2>Lutheran Worship 11-20-16</h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1479135592" src="https://livestream.com/accounts/8727672/events/6639476/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no" allowfullscreen></iframe>
        </div>

        <h2>Lutheran Worship 11-13-16</h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1478502330" src="https://livestream.com/accounts/8727672/events/6607045/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no" allowfullscreen></iframe>
        </div>

        <h2>Lutheran Worship 11-6-16</h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1478179797" src="https://livestream.com/accounts/8727672/events/6586988/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no" allowfullscreen></iframe>
        </div>

        <h2>Lutheran Worship 10-23-16</h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1476967867" src="//livestream.com/accounts/8727672/events/6523591/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no" allowfullscreen></iframe>
        </div>

        <h2>Lutheran Worship 10-9-16</h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1475509170" src="//livestream.com/accounts/8727672/events/6445741/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no" allowfullscreen></iframe>
        </div>

        {{--<!--<h2>Richard Nelson Memorial Service</h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="http://livestream.com/accounts/8727672/events/4739826/player?width=560&height=315&autoPlay=true&mute=false" width="560" height="315" frameborder="0" scrolling="no"> </iframe>
        </div>-->--}}
    </div>
</div>


@stop
