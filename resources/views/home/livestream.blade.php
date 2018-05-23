@extends('layouts.default')

@section('content')

<h1>Livestream</h1>

<div class="row">
    <div class="col-md-8">
        <p>See our worship services live right here! You can also view recent past services in case you missed them.</p>

        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2018-05-27">5-27-18</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1526900731" src="https://livestream.com/accounts/8727672/events/8215615/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2018-05-20">5-20-18</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1526421606" src="https://livestream.com/accounts/8727672/events/8207516/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2018-05-13">5-13-18</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1525717806" src="https://livestream.com/accounts/8727672/events/8195187/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2018-05-06">5-6-18</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1524458138" src="https://livestream.com/accounts/8727672/events/8172263/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>
        
        <div itemscope itemtype="http://schema.org/Event">
            <h2 itemprop="name">Lutheran Worship <span itemprop="startDate" content="2018-04-22">4-22-18</span></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" id="ls_embed_1523914491" src="https://livestream.com/accounts/8727672/events/8162821/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
            </div>
        </div>

    </div>
</div>


@stop
