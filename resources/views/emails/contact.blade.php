@extends('emails.layouts.email')

@section('header')
    You've Been Contacted by {{isset($name)?$name:'Name'}}
@stop

@section('content')
<table style="margin:0 auto; width: 80%;" cellspacing="0" cellpadding="0" class="force-width-80">
  <tr>
    <td style="text-align:left; padding-top: 15px; font-size:16px; line-height: 1.4">
    <br>
    <strong>Name:</strong> {{isset($name)?$name:''}}<br>
    <strong>Email:</strong> {{isset($email)?$email:''}}<br>
    <br>
    <div>{{isset($name)?$name:''}} writes... {{isset($message_text)?$message_text:''}}</div>
    </td>
  </tr>
</table>
@stop
