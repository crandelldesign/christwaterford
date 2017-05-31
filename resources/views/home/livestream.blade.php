@extends('layouts.default')

@section('content')

<h1>Livestream</h1>

<div class="row">
    <div class="col-md-8">
        <p>See our worship services live right here! You can also view recent past services in case you missed them.</p>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-06-04">6-4-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1496058683" src="https://livestream.com/accounts/8727672/events/7449932/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>
        </div>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-05-21">5-21-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1494871029" src="https://livestream.com/accounts/8727672/events/7398975/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>
        </div>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-05-14">5-14-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1494251111" src="https://livestream.com/accounts/8727672/events/7371300/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>
        </div>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-05-07">5-7-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1493815894" src="https://livestream.com/accounts/8727672/events/7349150/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>
        </div>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-04-16">4-16-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1491829255" src="https://livestream.com/accounts/8727672/events/7252470/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>
        </div>
    </div>
</div>


@stop
