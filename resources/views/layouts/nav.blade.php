<nav class="sidebar">
    <ul>
        <li class="{{(isset($active_page)) && $active_page=='home'?'active':''}}"><a href="{{url('/')}}">Home</a></li>
        <li class="{{(isset($active_page)) && $active_page=='people-like-you'?'active':''}}"><a href="{{url('/people-like-you')}}">People Like You</a></li>
        <li class="{{(isset($active_page)) && $active_page=='not-lutheran'?'active':''}}"><a href="{{url('/not-lutheran')}}">Not a Lutheran?</a></li>
        <li class="{{(isset($active_page)) && $active_page=='become-involved'?'active':''}}"><a href="{{url('/become-involved')}}">Become Involved</a></li>
        <li class="{{(isset($active_page)) && $active_page=='about-us'?'active':''}}"><a href="{{url('/about-us')}}">About Us</a></li>
        <li class="{{(isset($active_page)) && $active_page=='worship-information'?'active':''}}"><a href="{{url('/worship-information')}}">Worship Information</a></li>
        <li class="{{(isset($active_page)) && $active_page=='events'?'active':''}}"><a href="{{url('/events')}}">Events</a></li>
        <li><a href="{{url('/caller.pdf')}}" target="_blank">Parish Caller</a></li>
        <li class="collapsible {{(isset($active_page)) && $active_page=='teams'?'active':''}}"><a data-toggle="collapse" href="#teams">Teams <i class="fa fa-angle-right rotate pull-right {{(isset($active_page)) && $active_page=='teams'?'down':''}}" aria-hidden="true"></i></a>
            <ul class="collapse {{(isset($active_page)) && $active_page=='teams'?'in':''}}" id="teams">
                <li class="{{(isset($child_page)) && $child_page=='worship-music'?'active':''}}"><a href="{{url('/ministries/worship-music')}}">Worship &amp; Music</a></li>
                <li class="{{(isset($child_page)) && $child_page=='educational'?'active':''}}"><a href="{{url('/ministries/educational')}}">Educational</a></li>
                <li class="{{(isset($child_page)) && $child_page=='children-youth'?'active':''}}"><a href="{{url('/ministries/children-youth')}}">Children &amp; Youth</a></li>
                <li class="{{(isset($child_page)) && $child_page=='community-global'?'active':''}}"><a href="{{url('/ministries/community-global')}}">Community &amp; Global</a></li>
                <li class="{{(isset($child_page)) && $child_page=='congregational-life'?'active':''}}"><a href="{{url('/ministries/congregational-life')}}">Congregational Life</a></li>
            </ul></li>
        <li class="{{(isset($active_page)) && $active_page=='faces'?'active':''}}"><a href="{{url('/faces')}}">Faces of CLCW</a></li>
        <li class="{{(isset($active_page)) && $active_page=='events'?'contact':''}}"><a href="{{url('/contact')}}">Contact</a></li>
        <!--<li><a href="/links">Links</a></li>-->
        <li class="{{(isset($active_page)) && $active_page=='livestream'?'active':''}}"><a href="{{url('/livestream')}}">Livestream</a></li>
        <li><a href="https://www.facebook.com/ChristLutheranWaterford" target="_blank">Like Us on Facebook</a></li>
    </ul>
</nav>