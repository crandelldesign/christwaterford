@extends('layouts.default')

@section('content')
       
<h1>Ministries and Teams</h1>

<p>Ministries and teams of Chirst Lutheran Church of Waterford.</p>

<ul class="list-group">
    <li class="list-group-item"><a href="{{url('/ministries/worship-music')}}">Worship &amp; Music</a></li>
    <li class="list-group-item"><a href="{{url('/ministries/educational')}}">Educational</a></li>
    <li class="list-group-item"><a href="{{url('/ministries/children-youth')}}">Children &amp; Youth</a></li>
    <li class="list-group-item"><a href="{{url('/ministries/community-global')}}">Community &amp; Global</a></li>
    <li class="list-group-item"><a href="{{url('/ministries/congregational-life')}}">Congregational Life</a></li>
</ul>

@stop
