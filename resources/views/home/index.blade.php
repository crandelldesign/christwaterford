@extends('layouts.default')
@section('content')
     
<h1>What makes a church special?</h1>
<h2>It's people like you!</h2>

<div class="row">
    <div class="col-sm-6">
        <h2>You will find us at</h2>
        <p>5987 Williams Lake Road<br>
            (at Airport Road, one mile west of Dixie Highway)<br>
            Waterford MI 48329</p>
        <p>Go to the <a href="http://christwaterford.org/contact">Contact Us</a> page for more information and a map.</p>
        <h2>Sunday Services</h2>
        <p>We worship at 10:00 AM on Sundays</p>
        <p>We also have special service times during the Christmas and the Lenten/Easter season as well as Thanksgiving eve.</p>
        <p>You will find that we have a "blended" service, incorporating some traditional Lutheran liturgy, bible readings, prayer, children's message and sermon along with lots of opportunities for congregational singing, incorporating both traditional and contemporary songs with the Chancel Choir, Chapel Bell Choir and soloists often contributing to the service. We have open communion every Sunday and all believing Christians are welcome to commune.</p>
        <h2>Our Mission</h2>
        <p>We are a community of God's people called to share the love of God as made known in Jesus Christ and to be transformed by that love.</p>
    </div>
    <div class="col-sm-6">
        <h2>Upcoming Events</h2>
        @if(count($events) > 0)
            <ul class="upcoming-events-list">
            @foreach($events as $event)
                <li><a href="{{url('/events/'.strtolower(date('F-Y',strtotime($event->starts_at))).'?event='.$event->id)}}">{{$event->name}}</a><br>
                    <small>{{date('n/j/Y', strtotime($event->starts_at))}} {{!$event->is_all_day?'- '.date('g:ia',strtotime($event->starts_at)):''}}</small></li>
            @endforeach
            </ul>
        @else
        <p>There are not any major events scheduled at this time.</p>
        @endif
        <p><a href="{{url('/')}}/events" class="btn btn-sm btn-darkgreenblue">See All Events <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
    </div>
</div>

<p class="tagline">Where CLC also means &quot;Caring, Loving Community.&quot;</p>

@stop