@extends('layouts.admin')
@section('content-header')
	<h1>Welcome {{\Auth::user()->name}}</h1>
@stop
@section('body')
	<div class="box">
        <div class="box-body">
			@if (session('message'))
			    <div class="alert alert-info">
			    	<h4><i class="fa fa-thumbs-up"></i> Message</h4>
			        {{ session('message') }}
			    </div>
			    <hr>
			@endif
		</div>
	</div>
@stop