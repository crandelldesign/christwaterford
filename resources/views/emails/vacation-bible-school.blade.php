@extends('emails.layouts.email')

@section('header')
    Vacation Bible School Submission
@stop


@section('content')
<table style="margin:0 auto; width: 80%;" cellspacing="0" cellpadding="0" class="force-width-80">
    <tr>
        <td style="text-align:left; padding-top: 15px; font-size:16px; line-height: 1.4">
            <table>
                <tr>
                    <td>Student's Name</td>
                    <td>{{isset($inputs['students_name'])?$inputs['students_name']:''}}</td>
                </tr>
                <tr>
                    <td>Grade Completed</td>
                    <td>{{isset($inputs['grade_completed'])?$inputs['grade_completed']:''}}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{isset($inputs['address'])?$inputs['address']:''}}</td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>{{isset($inputs['city'])?$inputs['city']:''}}</td>
                </tr>
                <tr>
                    <td>State</td>
                    <td>{{isset($inputs['state'])?$inputs['state']:''}}</td>
                </tr>
                <tr>
                    <td>Zip</td>
                    <td>{{isset($inputs['zip'])?$inputs['zip']:''}}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{isset($inputs['phone'])?$inputs['phone']:''}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{isset($inputs['email'])?$inputs['email']:''}}</td>
                </tr>
                <tr>
                    <td>Allergies or Special Needs</td>
                    <td>{{isset($inputs['allergies_special_needs'])?$inputs['allergies_special_needs']:''}}</td>
                </tr>
                <tr>
                    <td>Emergency Contact</td>
                    <td>{{isset($inputs['emergency_contact'])?$inputs['emergency_contact']:''}}</td>
                </tr>
                <tr>
                    <td>Relationship</td>
                    <td>{{isset($inputs['relationship'])?$inputs['relationship']:''}}</td>
                </tr>
                <tr>
                    <td>Emergency Contact Phone</td>
                    <td>{{isset($inputs['emergency_contact_phone'])?$inputs['emergency_contact_phone']:''}}</td>
                </tr>
                <tr>
                    <td>Signed</td>
                    <td>{{isset($inputs['signed'])?$inputs['signed']:''}}</td>
                </tr>
                <tr>
                    <td>Dated</td>
                    <td>{{isset($inputs['dated'])?$inputs['dated']:''}}</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
@stop
