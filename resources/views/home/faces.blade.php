@extends('layouts.default')

@section('content')

<h1>There's lots of fun and fellowship here at Christ Lutheran.</h1>

<nav class="text-center">
    <ul class="pagination">
        <li class="{{(!isset($page)||$page == 1)?'active':''}}">
            <a href="{{url('/faces/1')}}">Communion and Confirmation</a>
        </li>
        <li class="{{(isset($page)&&$page == 2)?'active':''}}">
            <a href="{{url('/faces/2')}}">Community Impact Sunday</a>
        </li>
        <li class="{{(isset($page)&&$page == 3)?'active':''}}">
            <a href="{{url('/faces/3')}}">Rally Day Picnic</a>
        </li>
        <li class="{{(isset($page)&&$page == 4)?'active':''}}">
            <a href="{{url('/faces/4')}}">Rally Day Picnic 2</a>
        </li>
    </ul>
</nav>

@if(!isset($page) || $page == 1)

<div class="row gallery">
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/communion-and-confirmation-1.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/communion-and-confirmation-1.jpg" alt="Communion and Confirmation 1">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/communion-and-confirmation-2.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/communion-and-confirmation-2.jpg" alt="Communion and Confirmation 2">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/communion-and-confirmation-3.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/communion-and-confirmation-3.jpg" alt="Communion and Confirmation 3">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/communion-and-confirmation-4.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/communion-and-confirmation-4.jpg" alt="Communion and Confirmation 4">
        </a>
    </div>
</div>

@elseif(isset($page)&&$page == 2)

<div class="row gallery">
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/community-impact-sunday-1.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/community-impact-sunday-1.jpg" alt="Community Impact Sunday 1">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/community-impact-sunday-2.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/community-impact-sunday-2.jpg" alt="Community Impact Sunday 2">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/community-impact-sunday-3.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/community-impact-sunday-3.jpg" alt="Community Impact Sunday 3">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/community-impact-sunday-4.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/community-impact-sunday-4.jpg" alt="Community Impact Sunday 4">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/community-impact-sunday-5.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/community-impact-sunday-5.jpg" alt="Community Impact Sunday 5">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/community-impact-sunday-6.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/community-impact-sunday-6.jpg" alt="Community Impact Sunday 6">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/community-impact-sunday-7.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/community-impact-sunday-7.jpg" alt="Community Impact Sunday 7">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/community-impact-sunday-8.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/community-impact-sunday-8.jpg" alt="Community Impact Sunday 8">
        </a>
    </div>
</div>

@elseif(isset($page)&&$page == 3)

<div class="row gallery" data-featherlight-gallery data-featherlight-filter="a">
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-1.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-1.jpg" alt="Rally Day Picnic 1">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-2.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-2.jpg" alt="Rally Day Picnic 2">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-3.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-3.jpg" alt="Rally Day Picnic 3">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-4.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-4.jpg" alt="Rally Day Picnic 4">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-5.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-5.jpg" alt="Rally Day Picnic 5">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-6.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-6.jpg" alt="Rally Day Picnic 6">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-7.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-7.jpg" alt="Rally Day Picnic 7">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-8.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-8.jpg" alt="Rally Day Picnic 8">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-9.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-9.jpg" alt="Rally Day Picnic 9">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-10.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-10.jpg" alt="Rally Day Picnic 10">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-11.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-11.jpg" alt="Rally Day Picnic 11">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-12.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-12.jpg" alt="Rally Day Picnic 12">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-13.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-13.jpg" alt="Rally Day Picnic 13">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-14.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-14.jpg" alt="Rally Day Picnic 14">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-15.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-15.jpg" alt="Rally Day Picnic 15">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-16.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-16.jpg" alt="Rally Day Picnic 16">
        </a>
    </div>
</div>

@elseif(isset($page)&&$page == 4)

<div class="row gallery" data-featherlight-gallery data-featherlight-filter="a">
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-17.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-17.jpg" alt="Rally Day Picnic 17">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-18.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-18.jpg" alt="Rally Day Picnic 18">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-19.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-19.jpg" alt="Rally Day Picnic 19">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-20.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-20.jpg" alt="Rally Day Picnic 20">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-21.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-21.jpg" alt="Rally Day Picnic 21">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/rally-day-picnic-22.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/rally-day-picnic-22.jpg" alt="Rally Day Picnic 22">
        </a>
    </div>
</div>

@endif

@stop
