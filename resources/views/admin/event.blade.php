@extends('layouts.admin')
@section('content-header')
	<h1>{{(isset($event))?'Edit':'Add'}} Event</h1>
@stop
@section('body')
	<div class="row">
        <div class="col-lg-10">
			<div class="box">
				<form method="post" action="{{url('/admin/events/edit')}}" class="form-horizontal">
					<div class="box-header with-border">
		            	<h2 class="box-title">Event Details</h2>
		            </div>
		        	<div class="box-body">
		        	
		        		<div class="form-group">
					    	<label class="control-label col-sm-3">Event Name</label>
					    	<div class="col-sm-5">
					    		<input type="text" class="form-control" id="event_name" name="event_name" placeholder="Event Name">
					    	</div>
					  	</div>
					  	<div class="form-group">
					    	<label class="control-label col-sm-3">Event Date</label>
					    	<div class="col-sm-5">
						    	<div class="input-group date" id="event_date_group">
						    		<input class="form-control" data-format="MM/dd/yyyy" id="event_date" name="event_date" type="text" placeholder="##/##/####"></input>
						    		<span class="input-group-btn">
						    			<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-calendar"></span></button>
						    		</span>
								</div>
							</div>
						</div>
						<div class="form-group start-time-group">
							<label class="control-label col-sm-3">Start Time</label>
							<div class="col-sm-5">
						        <div class="input-group date" id="start_time_group">
						            <input type="text" class="form-control" id="start_time" name="start_time" placeholder="6:00 PM" />
						            <span class="input-group-btn">
						    			<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-time"></span></button>
						    		</span>
						        </div>
						    </div>
					    </div>
						<div class="form-group">
					        <!--<label class="control-label col-xs-3 padding-top-0"></label>-->
					        <div class="col-xs-5 col-sm-offset-3">
					        	<div class="checkbox">
						        	<label>
						            	<input class="is_has_ends_at" type="checkbox" id="is_has_ends_at" name="is_has_ends_at" value="1" checked>
						            	Does this event have an end time?
						            </label>
					            </div>
					        </div>
					    </div>
					    <div class="form-group end-time-group">
							<label class="control-label col-sm-3">End Time</label>
							<div class="col-sm-5">
						        <div class="input-group date" id="end_time_group">
						            <input type="text" class="form-control" id="end_time" name="end_time" placeholder="7:00 PM" />
						            <span class="input-group-btn">
						    			<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-time"></span></button>
						    		</span>
						        </div>
					        </div>
					    </div>
					    <div class="form-group">
					        <!--<label class="control-label col-xs-3 padding-top-0">All Day?</label>-->
					        <div class="col-xs-5 col-sm-offset-3">
					        	<div class="checkbox">
						        	<label>
					            		<input class="is_all_day" type="checkbox" id="is_all_day" name="is_all_day" value="1">
					            		All Day?
					            	</label>
					            </div>
					        </div>
					    </div>
					    <div class="form-group">
					        <!--<label class="control-label col-xs-3 padding-top-0">Featured Event?</label>-->
					        <div class="col-xs-5 col-sm-offset-3">
					        	<div class="checkbox">
						        	<label>
					            		<input class="is_featured" type="checkbox" id="is_featured" name="is_featured" value="1">
					            		Featured Event?
					            	</label>
					            </div>
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-sm-3">Enter Description</label>
					        <div class="col-sm-9">
					            <textarea id="summernote" name="description" class="form-control" rows="5"></textarea>
					        </div>
					    </div>
		        		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		        	</div>
		        	<div class="box-footer">
		        		<input class="btn btn-primary" type="submit" name="add_another" value="Save and Add Another">
						<input class="btn btn-default" type="submit" name="add_close" value="Save and Close">
					</div>
				</form>
			</div>
		</div>
	</div>
@stop

@section('scripts')
<script type="text/javascript">
	$(function () {
        $('#event_date_group').datetimepicker();
    });
	$(document).ready(function(){
		/*$(function() {
	    	$('#event_date_group').datetimepicker({
	    		//locale: 'en',
	      		//pick12HourFormat: true,
	      		//pickTime: false
	    	});
	  	});*/
	  	
	    $(function () {
	        $('#start_time_group').datetimepicker({
	            //pickDate: false
	            format: 'LT'
	        });
	    });
	    $(function () {
	        $('#end_time_group').datetimepicker({
	            //pickDate: false
	        });
	    });
	});
</script>
@stop