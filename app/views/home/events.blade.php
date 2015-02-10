@extends('master.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')
<h1>Calendar</h1>

<div class="row">
    <div class="col-xs-12 col-sm-4 col-sm-push-4 text-center"><h2><span class="calendar-month">{{date('F',$date)}}</span></h2></div>
    <div class="col-xs-6 col-sm-4 col-sm-pull-4"><a href="{{url('/')}}/events/{{strtolower(getdate($prevMonth)['month'])}}-{{date('Y',$prevMonth)}}" class="last-month">Last Month</a></div>
    <div class="col-xs-6 col-sm-4 text-right"><a href="{{url('/')}}/events/{{strtolower(getdate($nextMonth)['month'])}}-{{date('Y',$nextMonth)}}" class="next-month">Next Month</a></div>
</div>
<div class="clearfix"></div>
<table class="table calendar">
    <thead>
        <tr>
            <th><span class="visible-xs">Sun</span><span class="hidden-xs">Sunday</span></th>
            <th><span class="visible-xs">Mon</span><span class="hidden-xs">Monday</span></th>
            <th><span class="visible-xs">Tues</span><span class="hidden-xs">Tuesday</span></th>
            <th><span class="visible-xs">Wed</span><span class="hidden-xs">Wednesday</span></th>
            <th><span class="visible-xs">Thurs</span><span class="hidden-xs">Thursday</span></th>
            <th><span class="visible-xs">Fri</span><span class="hidden-xs">Friday</span></th>
            <th><span class="visible-xs">Sat</span><span class="hidden-xs">Saturday</span></th>
        </tr>
    </thead>
    <tbody>
	<tr>
        <?php $i = 1 ?>
        @for ($p = 1; $p <= date('w',$firstDayOfTheMonth); $p++)
            <td class="not-this-month">{{date('t',$prevMonth) - (date('w',$firstDayOfTheMonth) - $p)}}</td>
            <?php $i ++ ?>
        @endfor
        @foreach ($month->dates as $dates)
            <td data-date="{{$dates->dateTime}}" class="{{(isset($dates->events) && isset($dates->events[0]->name))?'has-event':''}} {{(date('mdY',$dates->phpDate) == date('mdY',$currentDate))?'active':''}}">
                <strong class="day-count">{{$dates->dayCount}}</strong>
                @if(isset($dates->events))
                @foreach ($dates->events as $event)
                @if (isset($event->name))
                <a class="cal-event" data-event_id="{{$event->id}}">
                    <span class="event-title">{{$event->name}}</span>
                    @if(!$event->is_all_day)
                    <br>
                    {{date('g:ia',strtotime($event->starts_at))}}<!-- - {{date('g:ia',strtotime($event->ends_at))}}-->
                    @endif
                </a>
                @endif
                @endforeach
                @endif
            </td>
            @if($i % 7 == 0)
            <tr></tr>
            @endif
            <?php $i++; ?>
        @endforeach

        @for ($f = 1; $f <= (6 - date('w', $lastDayOfTheMonth)); $f++)
            <td class="not-this-month">{{$f}}</td>
            <?php $i ++ ?>
        @endfor
	</tr>
    </tbody>
</table>
<script type='text/ejs' id='template_month'>
<tr>
<%
    var i = 1;
    for (p = 1; p <= data.lastMonthDays; p++) {
%>
    <td class="not-this-month"><%== data.lastMonthLastDay - (data.lastMonthDays - p) %></td>
<%
    i++;
    }
    for (d = 1; d <= data.daysInTheMonth; d++) {
%>
    <td data-date="<%= data.month.dates[d].dateTime %>" class="<%== ((typeof(data.month.dates[d].events) != 'undefined') && (typeof(data.month.dates[d].events[0].name) != 'undefined'))?'has-event':'' %> <%== (moment(data.month.dates[d].phpDate*1000).format('MMDDYYYY') == {{date('mdY',$currentDate)}})?'active':'' %>">
        <strong class="day-count"><%= data.month.dates[d].dayCount %></strong><br>
        
        <%
        if (typeof(data.month.dates[d].events) != "undefined")
        {
            for (e = 0; e <= (data.month.dates[d].events.length - 1); e++)
            {
                if (typeof(data.month.dates[d].events[e].name) != "undefined")
                {
            %>
                    <a class="cal-event" data-event_id="<%= data.month.dates[d].events[e].id %>">
                    <span class="event-title"><%= data.month.dates[d].events[e].name %></span>
                    <% if (data.month.dates[d].events[e].is_all_day == 0) { %>
                    <br>
                    <%== moment(data.month.dates[d].events[e].starts_at).format('h:mma') %><!-- - <%== moment(data.month.dates[d].events[e].ends_at).format('h:mma') %>-->
                    <% } %>
                    </a>
                <%
                }
            }
        }
        %>
    </td>
<%
        if(i % 7 == 0) {
%>
    <tr></tr>
<%
        }
    i++;
    }
    for (f = 1; f <= (6 - moment(data.lastDayOfTheMonth*1000).format('d')); f++) {
%>
    <td class="not-this-month"><%== f %></td>
<%
    i++;
    }
%>
</tr>
</script>

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
<script>
// Variables
original_month = "{{date('n',$date)}}";
original_year = "{{date('Y',$date)}}";
current_month = "{{date('n',$date)}}";
current_year = "{{date('Y',$date)}}";
last_month_slug = "{{strtolower(getdate($prevMonth)['month'])}}";
last_month = "{{date('n',$prevMonth)}}"
last_month_year = "{{date('Y',$prevMonth)}}";
next_month_slug = "{{strtolower(getdate($nextMonth)['month'])}}";
next_month = "{{date('n',$nextMonth)}}"
next_month_year = "{{date('Y',$nextMonth)}}";

window.onpopstate = function(event)
{
    events_control.URLchange();
};

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
    '.last-month click': function(element, event)
    {
        if($('html').hasClass('history'))
        {
            event.preventDefault();
            var stateObject = {};
            var title = "Group Bookings/Events - Four Green Fields Farm";
            var newUrl = "{{url('/')}}/events/"+last_month_slug+"-"+last_month_year;
            history.pushState(stateObject,title,newUrl);
        }
        current_month = last_month;
        current_year = last_month_year;
        this.Search();
    },
    '.next-month click': function(element, event)
    {
        if($('html').hasClass('history'))
        {
            event.preventDefault();
            var stateObject = {};
            var title = "Group Bookings/Events - Four Green Fields Farm";
            var newUrl = "{{url('/')}}/events/"+next_month_slug+"-"+next_month_year;
            history.pushState(stateObject,title,newUrl);
        }
        current_month = next_month;
        current_year = next_month_year;
        this.Search();
    },
    '.has-event a click': function(element, event)
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
    'URLchange': function()
    {
        var url = window.location.pathname.replace('/events','');
        var url = url.replace('/','');
        if (url.length > 0)
        {
            var urlArray = [];
            urlArray = url.split('-');
            urlDate = Date.parse(urlArray[0]+' 1, '+urlArray[1]);
            current_month = moment(urlDate).format('M');
            current_year = moment(urlDate).format('YYYY');
        } else {
            current_month = original_month;
            current_year = original_year;
        }
        this.Search();
        
    },
    'Search': function()
    {
    	var self = this;
    	var MonthObject = {
            month: current_month,
            year: current_year
        };
    	Month.findAll(MonthObject, function(data) {
            self.BindMonth(data['0']);
        });
    },
    'BindMonth': function(data)
    {
        $('.calendar-month').html(moment(data.date*1000).format('MMMM'));
        current_month = moment(data.date*1000).format('M');
        current_year = moment(data.date*1000).format('YYYY');
        last_month_slug = moment(data.prevMonth*1000).format('MMMM').toLowerCase();
        last_month = moment(data.prevMonth*1000).format('M');
        last_month_year = moment(data.prevMonth*1000).format('YYYY');
        $('a.last-month').attr('href', '{{url('/')}}/events/'+last_month_slug+'-'+last_month_year);
        next_month_slug = moment(data.nextMonth*1000).format('MMMM').toLowerCase();
        next_month = moment(data.nextMonth*1000).format('M');
        next_month_year = moment(data.nextMonth*1000).format('YYYY');
        $('a.next-month').attr('href', '{{url('/')}}/events/'+next_month_slug+'-'+next_month_year);
        $('.table.calendar tbody').html(can.view('template_month',
        {
            data : data
        }));
    },
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