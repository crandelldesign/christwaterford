@extends('layouts.default')

@section('content')

<h1>Livestream</h1>

<div class="row">
    <div class="col-md-8">
        <p>See our worship services live right here! You can also view recent past services in case you missed them.</p>

        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2019-02-24">2-24-19</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1550580309" src="https://livestream.com/accounts/8727672/events/8570872/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2019-02-10">2-10-19</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1549313342" src="https://livestream.com/accounts/8727672/events/8552663/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2019-02-03">2-3-19</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1548784964" src="https://livestream.com/accounts/8727672/events/8544956/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
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

    </div>
</div>


@stop
