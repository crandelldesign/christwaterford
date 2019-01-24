@extends('layouts.default')

@section('content')

<h1>Livestream</h1>

<div class="row">
    <div class="col-md-8">
        <p>See our worship services live right here! You can also view recent past services in case you missed them.</p>

        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2019-01-27">1-27-19</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1548135001" src="https://livestream.com/accounts/8727672/events/8535285/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2019-01-20">1-20-19</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1547569117" src="https://livestream.com/accounts/8727672/events/8527173/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2019-01-13">1-13-19</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1547039472" src="https://livestream.com/accounts/8727672/events/8519792/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2019-01-06">1-6-19</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1546434506" src="https://livestream.com/accounts/8727672/events/8511329/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Advent Worship <span itemprop="startDate" content="2018-12-23">12-23-18</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1545143212" src="https://livestream.com/accounts/8727672/events/8496932/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>

    </div>
</div>


@stop
