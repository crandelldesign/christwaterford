@extends('layouts.default')

@section('head')
<script src='https://www.google.com/recaptcha/api.js'></script>
@stop

@section('content')

<h1>Vacation Bible School Sign Up Form</h1>

<p>Please fill out the form below to sign up.</p>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form class="form" action="{{url('/vacation-bible-school')}}" method="post">
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group {{(count($errors) > 0 && $errors->first('students_name'))?'has-error':''}}">
                <label for="students_name">Student's Name</label>
                <input type="text" class="form-control" id="students_name" name="students_name" placeholder="Student's Name" required="required" value="{{old('students_name')}}">
                @foreach ($errors->get('students_name') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group {{(count($errors) > 0 && $errors->first('grade_completed'))?'has-error':''}}">
                <label for="grade_completed">Grade Completed</label>
                <input type="text" class="form-control" id="grade_completed" name="grade_completed" placeholder="Grade Completed" required="required" value="{{old('grade_completed')}}">
                @foreach ($errors->get('grade_completed') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="form-group {{(count($errors) > 0 && $errors->first('address'))?'has-error':''}}">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Address" required="required" value="{{old('address')}}">
        @foreach ($errors->get('address') as $error)
            <div class="help-block with-errors">{{ $error }}</div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-sm-5">
            <div class="form-group {{(count($errors) > 0 && $errors->first('city'))?'has-error':''}}">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="City" required="required" value="{{old('city')}}">
                @foreach ($errors->get('city') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group {{(count($errors) > 0 && $errors->first('state'))?'has-error':''}}">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="state" placeholder="State" required="required" value="{{old('state')}}">
                @foreach ($errors->get('state') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group {{(count($errors) > 0 && $errors->first('zip'))?'has-error':''}}">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" placeholder="Grade Completed" required="required" value="{{old('zip')}}">
                @foreach ($errors->get('zip') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group {{(count($errors) > 0 && $errors->first('phone'))?'has-error':''}}">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required="required" value="{{old('phone')}}">
                @foreach ($errors->get('phone') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group {{(count($errors) > 0 && $errors->first('email'))?'has-error':''}}">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required" value="{{old('email')}}">
                @foreach ($errors->get('email') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="form-group {{(count($errors) > 0 && $errors->first('allergies_special_needs'))?'has-error':''}}">
        <label for="allergies_special_needs">Allergies or Special Needs</label>
        <input type="text" class="form-control" id="allergies_special_needs" name="allergies_special_needs" placeholder="Allergies or Special Needs" value="{{old('allergies_special_needs')}}">
    </div>
     <div class="form-group {{(count($errors) > 0 && $errors->first('emergency_contact'))?'has-error':''}}">
        <label for="emergency_contact">Emergency Contact</label>
        <input type="text" class="form-control" id="emergency_contact" name="emergency_contact" placeholder="Emergency Contact" required="required" value="{{old('emergency_contact')}}">
        @foreach ($errors->get('emergency_contact') as $error)
            <div class="help-block with-errors">{{ $error }}</div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group {{(count($errors) > 0 && $errors->first('relationship'))?'has-error':''}}">
                <label for="phone">Relationship</label>
                <input type="text" class="form-control" id="relationship" name="relationship" placeholder="Relationship" required="required" value="{{old('relationship')}}">
                @foreach ($errors->get('relationship') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group {{(count($errors) > 0 && $errors->first('phone'))?'has-error':''}}">
                <label for="emergency_contact_phone">Emergency Contact Phone</label>
                <input type="text" class="form-control" id="emergency_contact_phone" name="emergency_contact_phone" placeholder="Emergency Contact Phone" required="required" value="{{old('emergency_contact_phone')}}">
                @foreach ($errors->get('emergency_contact_phone') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
        </div>
    </div>
    <p>The undersigned gives permission to his or her child to participate in the above named activity and releases Christ Lutheran Church, its officers, employees, and agents from any liability whatsoever for any injury or death to person or loss or damage to property sustained by the undersigned for any member of his family in attendance, and the undersigned agrees to defend and indemnify Christ Lutheran Church, its officers, employees, and agents from any liability or loss they might sustain by reason thereof.</p>
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group {{(count($errors) > 0 && $errors->first('signed'))?'has-error':''}}">
                <label for="signed">Signed</label>
                <input type="text" class="form-control" id="signed" name="signed" placeholder="Signed" required="required" value="{{old('signed')}}">
                @foreach ($errors->get('signed') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group {{(count($errors) > 0 && $errors->first('dated'))?'has-error':''}}">
                <label for="dated">Dated</label>
                <input type="text" class="form-control" id="dated" name="dated" placeholder="Dated" required="required" value="{{old('dated')}}">
                @foreach ($errors->get('dated') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
        </div>
    </div>
    <p>By signing this registration form you agree that any photographs taken of yur child at or during this event are the property of Christ Lutheran Church and may be used in future publications as deemed appropriate.</p>
    <div class="control-group form-group {{(count($errors) > 0 && $errors->first('g-recaptcha-response'))?'has-error':''}}">
        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITEKEY') }}"></div>
        @foreach ($errors->get('g-recaptcha-response') as $error)
            <div class="help-block with-errors">{{ $error }}</div>
        @endforeach
        @foreach ($errors->get('recaptcha') as $error)
            <div class="help-block with-errors">{{ $error }}</div>
        @endforeach
    </div>
    <div class="form-group">
        {!! csrf_field() !!}
        <button type="submit" class="btn btn-blue btn-submit" formnovalidate>Submit</button>
    </div>
</form>

@stop
