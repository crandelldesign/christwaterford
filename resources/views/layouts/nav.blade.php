<nav class="sidebar">
    <ul>
        <li class="{{(isset($active_page)) && $active_page=='home'?'active':''}}"><a href="{{url('/')}}">Home</a></li>
        <li class="{{(isset($active_page)) && $active_page=='people-like-you'?'active':''}}"><a href="{{url('/people-like-you')}}">People Like You</a></li>
        <li><a href="{{url('/not-lutheran')}}">Not a Lutheran?</a></li>
        <li><a href="{{url('/become-involved')}}">Become Involved</a></li>
        <li><a href="{{url('/about-us')}}">About Us</a></li>
        <li><a href="{{url('/worship-information')}}">Worship Information</a></li>
        <li><a href="{{url('/events')}}">Events</a></li>
        <li><a href="{{url('/caller.pdf')}}" target="_blank">Parish Caller</a></li>
        <li class="collapsible"><a data-toggle="collapse" href="#teams">Teams <i class="fa fa-angle-right rotate pull-right" aria-hidden="true"></i></a>
            <ul class="collapse" id="teams">
                <li><a href="{{url('/ministries/worship-music')}}">Worship &amp; Music</a></li>
                <li><a href="{{url('/ministries/educational')}}">Educational</a></li>
                <li><a href="{{url('/ministries/children-youth')}}">Children &amp; Youth</a></li>
                <li><a href="{{url('/ministries/community-global')}}">Community &amp; Global</a></li>
                <li><a href="{{url('/ministries/congregational-life')}}">Congregational Life</a></li>
            </ul></li>
        <li><a href="{{url('/faces')}}">Faces of CLCW</a></li>
        <li><a href="{{url('/contact')}}">Contact</a></li>
        <!--<li><a href="/links">Links</a></li>-->
        <li><a href="{{url('/livestream')}}">Livestream</a></li>
        <li><a href="https://www.facebook.com/ChristLutheranWaterford" target="_blank">Like Us on Facebook</a></li>
    </ul>
</nav>