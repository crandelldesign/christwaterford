@extends('master.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')

<h1>Worship Information</h1>
<p>We worship at 10:00 AM on Sundays<br />
 We also have special service times during the Christmas and the Lenten/Easter season as well as Thanksgiving eve.</p>
<p>You will find that we have a &quot;blended&quot; service, incorporating some traditional Lutheran liturgy, bible readings, prayer, children's message and sermon along with lots of opportunities for congregational singing, incorporating both traditional and contemporary songs with the Chancel Choir, Chapel Bell Choir and soloists often contributing to the service. We have open communion every Sunday and all believing Christians are welcome to commune.</p>
<!-- <p>Praise Service - Every Second Sunday of the Month at 10:00am</p> -->
<p>We broadcast on Sundays at 2:30pm and Thursdays at 9:30am on Comcast Channel 10 in Waterford, or Channel 99 on ATT-Uverse (available in 8 counties).</p>
<p>Missed the last service and don't have local cable access? Go <a href="http://www.medianetworkofwaterford.org/wordpress/live/">here</a> on Sundays at 2:30pm or Thursdays at 9:30am.</p>
<p>Christ Lutheran-Waterford Sunday services are now available on the internet! Check them out live at 10:00 am on Sunday morning or anytime. Services will remain available on Livestream for on-demand viewing on your computer, Roku device, Apple or Android phone or wireless touchpad. Here is the link: <a href="https://new.livestream.com/accounts/8727672" target="_blank">https://new.livestream.com/accounts/8727672</a> Go to your AppStore to download the Livestream app for your phone. And please feel free to share the link on your Facebook or other social media account so we can spread the Good News! Having trouble finding the Sunday service? Just go to <a href="https://new.livestream.com/watch" target="_blank">https://new.livestream.com/watch</a> and in the "search events" box enter Lutheran Worship mm-dd-yy corresponding with the date of the church service you wish to view. Or better yet, just go <a href="{{url('/')}}/livestream">the Livestream page</a>.</p>

<div class="row" data-featherlight-gallery data-featherlight-filter="a">
    <div class="col-sm-4 thumb">
		<a class="thumbnail" href="{{url('/')}}/img/worship-information1.jpg">
            <img class="img-responsive center-block" alt="Worship Information 1" src="{{url('/')}}/img/worship-information1.jpg">
        </a>
	</div>
	<div class="col-sm-4 thumb">
		<a class="thumbnail" href="{{url('/')}}/img/worship-information2.jpg">
            <img class="img-responsive center-block" alt="Worship Information 2" src="{{url('/')}}/img/worship-information2.jpg">
        </a>
	</div>
	<div class="col-sm-4 thumb">
		<a class="thumbnail" href="{{url('/')}}/img/worship-information3.jpg">
            <img class="img-responsive center-block" alt="Worship Information 3" src="{{url('/')}}/img/worship-information3.jpg">
        </a>
	</div>
</div>

<!--<div class="row">
 	<div class="col-sm-6">
  	<p><img src="{{url('/')}}/img/pastor_john_1_small.jpg" alt="Pastor John 1" class="img-responsive center-block" /></p>
    <p class="text-center">Pastor John Negele with Bishop Robert Rimbo</p>
  </div>
  <div class="col-sm-6">
  	<p><img src="{{url('/')}}/img/pastor_john_2_small.jpg" alt="Pastor John 2" class="img-responsive center-block" /></p>
    <p class="text-center">Pastor John Negele and his wife Maggie with his parents Josef and Katherina Negele at his Installation Ceremony</p>
  </div>
</div>-->

@stop