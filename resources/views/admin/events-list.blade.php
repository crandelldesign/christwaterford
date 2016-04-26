@extends('layouts.admin')
@section('content-header')
	<h1>Welcome {{\Auth::user()->name}}</h1>
@stop
@section('body')
	<div class="box">
        <div class="box-body">
			<table class="table table-hover">
			@foreach($events as $event)
				<tr data-event_id="{{$event->id}}">
					<td class="event_name">{{$event->name}}</td>
					<td class="event_date">{{date("m/d/Y", strtotime($event->starts_at))}}</td>
			    @if($event->is_all_day)
			    <td colspan="2" class="text-center">All Day</td>
			    @else
					<td class="start_time">{{date("g:ia", strtotime($event->starts_at))}}</td>
					<td class="end_time">{{date("g:ia", strtotime($event->ends_at))}}</td>
			    @endif
					<td><a href="{{url('/admin/events/'.$event->id)}}" class="btn btn-xs btn-success edit-event" data-event_id="{{$event->id}}"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Edit Event</button></td>
					<td><button type="button" class="btn btn-xs btn-danger delete-event" data-event_id="{{$event->id}}"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;&nbsp;Delete Event</button></td>
				</tr>
			@endforeach
			</table>
		</div>
	</div>
@stop