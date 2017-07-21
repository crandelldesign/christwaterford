@extends('layouts.default')

@section('content')

<h1>Livestream</h1>

<div class="row">
    <div class="col-md-8">
        <p>See our worship services live right here! You can also view recent past services in case you missed them.</p>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-07-23">7-23-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1500301904" src="https://livestream.com/accounts/8727672/events/7605233/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>
        </div>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-07-09">7-9-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1499307140" src="https://livestream.com/accounts/8727672/events/7579321/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>
        </div>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-07-02">7-2-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1498428772" src="https://livestream.com/accounts/8727672/events/7547433/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>
        </div>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-06-18">6-18-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1497311848" src="https://livestream.com/accounts/8727672/events/7502447/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>
        </div>

        <div itemscope itemtype="http://schema.org/Event">
        <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2017-06-11">6-11-17</span></h2>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="ls_embed_1496751762" src="https://livestream.com/accounts/8727672/events/7479069/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
        </div>
        </div>
    </div>
</div>


@stop
