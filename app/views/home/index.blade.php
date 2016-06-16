@extends('master.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')

<h1 class="text-center">What makes a church special?</h1>
<h2 class="text-center">It's people like you!</h2>
<div id="carousel1" class="carousel slide center-block margin-bottom-15" data-ride="carousel">
	<div class="carousel-inner">
        <div class="item active">
        	<img class="img-responsive center-block" src="{{url('/')}}/img/slide1.jpg" alt="Christ Lutheran Church of Waterford" />
        </div>
        <div class="item">
            <img class="img-responsive center-block" src="{{url('/')}}/img/slide2.jpg" alt="Christ Lutheran Church of Waterford" />
        </div>
        <div class="item">
            <img class="img-responsive center-block" src="{{url('/')}}/img/slide3.jpg" alt="Christ Lutheran Church of Waterford" />
        </div>
        <div class="item">
            <img class="img-responsive center-block" src="{{url('/')}}/img/slide4.jpg" alt="Christ Lutheran Church of Waterford" />
        </div>
        <div class="item">
            <img class="img-responsive center-block" src="{{url('/')}}/img/slide5.jpg" alt="Christ Lutheran Church of Waterford" />
        </div>
    </div>
    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<div class="row">
	<div class="col-sm-6">
    	<h2>You will find us at</h2>
        <p>5987 Williams Lake Road<br />
            (at Airport Road, one mile west of Dixie Highway)<br />
            Waterford MI 48329</p>
        <p>Go to the <a href="{{url('/')}}/contact">Contact Us</a> page for more information and a map.</p>
   	  	<h2>Sunday Services</h2>
        <p>We worship at 10:00 AM on Sundays</p>
        <p>We also have special service times during the Christmas and the Lenten/Easter season as well as Thanksgiving eve.</p>
        <p>You will find that we have a &quot;blended&quot; service, incorporating some traditional Lutheran liturgy, bible readings, prayer, children's message and sermon along with lots of opportunities for congregational singing, incorporating both traditional and contemporary songs with the Chancel Choir, Chapel Bell Choir and soloists often contributing to the service. We have open communion every Sunday and all believing Christians are welcome to commune.</p>
        <h2>Our Mission</h2>
    	<p>We are a community of God's people called to share the love of God as made known in Jesus Christ and to be transformed by that love.</p>
    </div>
    <div class="col-sm-6">
        <h2>Upcoming Events</h2>
        <p><strong>Yard Sale donations are now welcome. Yard sale is scheduled for July 28-30. For more info call the church office 248-673-7331.</strong></p>
        @if(count($events) > 0)
            <ul class="upcoming-events-list">
            @foreach($events as $event)
                <li><a class="cal-event pointer" data-event_id="{{$event->id}}">{{$event->name}}</a><br>
                    <small>{{date('n/j/Y', strtotime($event->starts_at))}} {{!$event->is_all_day?'- '.date('g:ia',strtotime($event->starts_at)):''}}</small></li>
            @endforeach
            </ul>
        @else
        <p>There are not any major events scheduled at this time.</p>
        @endif
        <p><a href="{{url('/')}}/events" class="btn btn-sm btn-default">See All Events <span class="glyphicon glyphicon-chevron-right"></span></a></p>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="dayModal" tabindex="-1" role="dialog" aria-labelledby="dayModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h2 class="modal-title" id="dayModalLabel">Modal title</h2>
      </div>
      <div class="modal-body">
        <div class="date-info">
            <h3 class="event-name"></h3>
            <p class="start-time"></p>
            <div class="description"></div>
        </div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>

@stop

@section('footercode')
<script type="text/javascript">
Month = can.Model({
    findAll: 'GET {{url("/")}}/api/month'
},{});
Event = can.Model({
    findOne: 'GET {{url("/")}}/api/event'
},{});
EventsControl = can.Control(
{
    init: function()
    {
        //this.Search();
    },
    //Events
    'a.cal-event click': function(element, event)
    {
        eventDate = moment(element.parent().data('date')).format('dddd, MMMM Do, YYYY');

        /*eventData = element.clone();*/
        var self = this;
        var event_id = element.data('event_id');
        Event.findOne({id: event_id}, function(data)
        {
            self.bindEvent(data);
        });
        $('#dayModal .modal-title').html(eventDate);
        /*$('#dayModal .modal-body .date-info').html(eventData);*/
    },
    //Methods
    'bindEvent': function(data)
    {
        $('#dayModal .event-name').html(data.name);
        $('#dayModal .event-date').html(moment(data.starts_at).format('MM/DD/YYYY'));
        if(data.is_all_day == 1)
        {
            $('#dayModal .start-time').hide();
        } else {
            $('#dayModal .start-time').show();
            $('#dayModal .start-time').html(moment(data.starts_at).format('h:mma'));
        }
        $('#dayModal .description').html(data.description);
        $('#dayModal').modal('show');
    },
});

events_control = new EventsControl($('body'));
</script>
@stop