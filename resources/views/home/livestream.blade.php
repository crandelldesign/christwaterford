@extends('layouts.default')

@section('content')

<h1>Livestream</h1>

<div class="row">
    <div class="col-md-8">
        <p>See our worship services live right here! You can also view recent past services in case you missed them.</p>

        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2019-03-31">3-31-19</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1553464885" src="https://livestream.com/accounts/8727672/events/8614152/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2019-03-24">3-24-19</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1552919382" src="https://livestream.com/accounts/8727672/events/8606109/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2019-03-17">3-17-19</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1552360761" src="https://livestream.com/accounts/8727672/events/8597709/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2019-03-10">3-10-19</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1551187311" src="https://livestream.com/accounts/8727672/events/8580018/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2019-02-24">2-24-19</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1551234286" src="https://livestream.com/accounts/8727672/events/8567583/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>

    </div>
</div>


@stop
