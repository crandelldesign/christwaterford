@extends('layouts.default')

@section('content')

<h1>Livestream</h1>

<div class="row">
    <div class="col-md-8">
        <p>See our worship services live right here! You can also view recent past services in case you missed them.</p>

        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2018-10-21">10-21-18</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1539648039" src="https://livestream.com/accounts/8727672/events/8415511/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>

        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2018-10-14">10-14-18</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1539089560" src="https://livestream.com/accounts/8727672/events/8406390/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2018-10-07">10-7-18</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1538701358" src="https://livestream.com/accounts/8727672/events/8400799/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2018-09-30">9-30-18</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1537889042" src="https://livestream.com/accounts/8727672/events/8387631/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>

        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2018-09-23">9-23-18</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1537224237" src="https://livestream.com/accounts/8727672/events/8376515/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>

    </div>
</div>


@stop
