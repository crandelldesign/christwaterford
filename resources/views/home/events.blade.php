@extends('layouts.default')
@section('content')
<h1>Calendar</h1>

<div class="calendar-page">
    <div class="calendar-overlay"><i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw margin-bottom"></i><span class="sr-only">Loading...</span></div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-sm-push-4 text-center"><h2><span class="calendar-month">{{date('F',$date)}}</span></h2></div>
        <div class="col-xs-6 col-sm-4 col-sm-pull-4"><a href="{{url('/')}}/events/{{strtolower(getdate($prev_month)['month']).'-'.date('Y',$prev_month)}}" class="last-month month-nav" data-month_link="{{strtolower(getdate($prev_month)['month']).'-'.date('Y',$prev_month)}}" data-month_title="{{getdate($prev_month)['month'].' '.date('Y',$prev_month)}}">Last Month</a></div>
        <div class="col-xs-6 col-sm-4 text-right"><a href="{{url('/')}}/events/{{strtolower(getdate($next_month)['month']).'-'.date('Y',$next_month)}}" class="next-month month-nav" data-month_link="{{strtolower(getdate($next_month)['month']).'-'.date('Y',$next_month)}}" data-month_title="{{getdate($next_month)['month'].' '.date('Y',$next_month)}}">Next Month</a></div>
    </div>
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
            @for ($p = 1; $p <= date('w',$first_day_of_the_month); $p++)
                <td class="not-this-month">{{date('t',$prev_month) - (date('w',$first_day_of_the_month) - $p)}}</td>
                <?php $i ++ ?>
            @endfor
            @foreach ($month->dates as $dates)
                <td data-date="{{$dates->date_time}}" data-php_date="{{$dates->php_date}}" class="{{(isset($dates->events) && isset($dates->events[0]->name))?'has-event':''}} {{(date('mdY',$dates->php_date) == date('mdY',$current_date))?'active':''}}">
                    <strong class="day-count">{{$dates->day_count}}</strong>
                    @if(isset($dates->events))
                    @foreach ($dates->events as $event)
                    @if (isset($event->name))
                    <a class="cal-event" data-event_id="{{$event->id}}">
                        <span class="event-title">{{$event->name}}</span>
                        @if(!$event->is_all_day)
                        <br>
                        {{date('g:ia',strtotime($event->starts_at))}} @if($event->is_has_ends_at) - {{date('g:ia',strtotime($event->ends_at))}} @endif
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

            @for ($f = 1; $f <= (6 - date('w', $last_day_of_the_month)); $f++)
                <td class="not-this-month">{{$f}}</td>
                <?php $i ++ ?>
            @endfor
        </tr>
        </tbody>
    </table>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="event-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <div id="event-template-container"></div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script id="event-template" type="x-tmpl-mustache">
    <div class="panel-group" id="event-accordion" role="tablist" aria-multiselectable="true">
    @{{#each data}}
    <div class="panel event-panel">
        <div class="panel-heading" role="tab" id="heading@{{id}}">
            @{{#if description}}
            <a role="button" data-toggle="collapse" data-parent="#event-accordion" href="#collapse@{{id}}" class="see-more-left event-see-more collapsed">
            <i class="fa fa-angle-right rotate" aria-hidden="true"></i>
            </a>
            @{{/if}}
            <h4 class="panel-title">
                @{{name}}
                <div class="more-info">
                    @{{#unless is_all_day}}
                    <div class="event-time">
                        @{{starts_at_time_formatted}}
                        @{{#if is_has_ends_at}}
                        - @{{ends_at_time_formatted}}
                        @{{/if}}
                    </div>
                    @{{/unless}}
                    @{{#if description}}
                    <a role="button" data-toggle="collapse" data-parent="#event-accordion" href="#collapse@{{id}}" class="btn btn-xs btn-darkgreenblue event-see-more see-more-text collapsed">
                        See More
                    </a>
                    @{{/if}}
                    <div class="clearfix"></div>
                </div>
            </h4>
        </div>
        @{{#if description}}
        <div id="collapse@{{id}}" class="panel-collapse collapse" role="tabpanel">
            <div class="panel-body">
            @{{{description}}}
            </div>
        </div>
        @{{/if}}
    </div>
    @{{/each}}
    </div>
</script>
@stop

@section('scripts')
<script>
$(document).ready(function()
{

    window.onpopstate = function(event)
    {
        location.reload();
    };

    $('.calendar-page').on('click', '.month-nav', function(event)
    {
        event.preventDefault();
        $('.calendar-page').find('.calendar-overlay').addClass('loading');
        var month_link = $(this).data('month_link');
        var month_title = $(this).data('month_title');
        $('.calendar-page').load('{{url("/events")}}/'+month_link+' .calendar-page > *', function(responseTxt, statusTxt, xhr)
        {
            if(statusTxt == "success")
                $('.calendar-page').find('.calendar-overlay').removeClass('loading');
            if(statusTxt == "error")
                console.log("Error: " + xhr.status + ": " + xhr.statusText);
        });
        if (history.pushState) {
            var stateObject = {};
            //var title = month_title+' Events | Christ Lutheran Church of Waterford'; // Add back when browsers use it
            var title = 'Events | Christ Lutheran Church of Waterford';
            var newUrl = '{{url("/events/")}}/'+month_link;
            history.pushState(stateObject,title,newUrl);
        }
    });

    $('.calendar-page').on('click', '.has-event', function(event)
    {
        $('.calendar-page').find('.calendar-overlay').addClass('loading');
        var php_date = $(this).data('php_date');
        var date = moment($(this).data('date')).format('dddd, MMMM D, YYYY');
        $.ajax({
            url: '{{url("/api/events")}}/'+php_date,
            success: function(data) {
                var source = $("#event-template").html();
                var template = Handlebars.compile(source);
                var html = template({
                    data: JSON.parse(data)
                });
                $('#event-template-container').html(html);
                $('#event-modal').find('.modal-title').html(date);
                $('#event-modal').modal('show');
                $('.calendar-page').find('.calendar-overlay').removeClass('loading');
            },
            type: 'GET'
        });
    });
    $('#event-modal').on('click', '.event-see-more', function(event)
    {
        $(this).parents('.panel-heading').find('.rotate').toggleClass('down');

        if ($(this).parents('.panel-heading').find('.see-more-text').hasClass('collapsed')) {
            $(this).parents('.panel-heading').find('.see-more-text').text('See Less');
        } else {
            $(this).parents('.panel-heading').find('.see-more-text').text('See More');
        }
    });

    function getUrlVars()
    {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
        });
        return vars;
    }

    if (getUrlVars()['event']) {
        $('#event-modal').modal('show');
    }
});
</script>
@stop
