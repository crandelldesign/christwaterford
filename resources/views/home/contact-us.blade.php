@extends('layouts.default')

@section('head')
<script src='https://www.google.com/recaptcha/api.js'></script>
@stop

@section('content')

<h1>Now let us hear from you.</h1>
<div class="row">
    <div class="col-sm-6">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <p>Fill out to the form below to send an email to Pastor John.</p>
        <form class="form" action="{{url('/contact')}}" method="post">
            <div class="form-group {{(count($errors) > 0 && $errors->first('name'))?'has-error':''}}">
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="required" value="{{old('name')}}">
            </div>
            <div class="form-group {{(count($errors) > 0 && $errors->first('email'))?'has-error':''}}">
                <label for="email" class="sr-only">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required" value="{{old('email')}}">
            </div>
            <div class="form-group {{(count($errors) > 0 && $errors->first('message'))?'has-error':''}}">
                <label for="message" class="sr-only">Message</label>
                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message">{{old('message')}}</textarea>
            </div>
            <div class="control-group form-group {{(count($errors) > 0 && $errors->first('g-recaptcha-response'))?'has-error':''}}">
                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITEKEY') }}"></div>
            </div>
            <div class="form-group">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-blue btn-submit pull-right">Send</button>
            </div>
        </form>
    </div>
    <div class="col-sm-6">
        <h2 class="margin-top-0">You will find us at</h2>
        <address itemscope itemtype="http://schema.org/LocalBusiness">
            <div itemprop="address" typeof="PostalAddress">
                <p><span itemprop="streetAddress">5987 Williams Lake Rd</span><br>
                    (at Airport Road, one mile west of Dixie Highway)<br>
                    <span itemprop="addressLocality">Waterford</span>, <span itemprop="addressRegion">MI</span> <span itemprop="postalCode">48329</span></p>
            </div>

            <p itemprop="telephone"><a href="tel:+12486737331">248-673-7331</a></p>
        </address>

        <div class="embed-responsive embed-responsive-4by3">
        <iframe class="embed-responsive-item iframe-map" width="440" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Christ+Lutheran+Church,+Williams+Lake+Road,+Waterford+Township,+MI&amp;aq=2&amp;oq=Chirst+Lutheran+Chuc&amp;sll=45.00109,-86.270553&amp;sspn=11.201376,22.565918&amp;t=m&amp;ie=UTF8&amp;hq=Christ+Lutheran+Church,&amp;hnear=Williams+Lake+Rd,+Waterford+Township,+Oakland,+Michigan&amp;cid=11776608453108580091&amp;ll=42.697324,-83.407946&amp;spn=0.022078,0.030899&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        </div>
    </div>
</div>

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close contact-close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <div class="h3 modal-title">Thank Your For Contacting Christ Lutheran Church</div>
            </div>
            <div class="modal-body">
                <p>Thank you, <span class="thanks-name"></span>, for contacting Christ Lutheran Church. Your message will be responded to as soon as possible.</p>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@stop
