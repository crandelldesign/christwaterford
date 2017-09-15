@extends('layouts.default')

@section('content')

<h1>Livestream</h1>

<div class="row">
    <div class="col-md-8">
        <p>See our worship services live right here! You can also view recent past services in case you missed them.</p>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-09-17">9-17-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1505221169" src="https://livestream.com/accounts/8727672/events/7716335/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-09-10">9-10-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1504630679" src="https://livestream.com/accounts/8727672/events/7701544/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>
        </div>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-09-03">9-3-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1503378188" src="https://livestream.com/accounts/8727672/events/7668778/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>
        </div>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-08-27">8-27-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1503377924" src="https://livestream.com/accounts/8727672/events/7668770/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>
        </div>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-08-13">8-13-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1502281298" src="https://livestream.com/accounts/8727672/events/7644811/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>
        </div>


    </div>
</div>


@stop
