@extends('layouts.default')

@section('content')

<h1>There's lots of fun and fellowship here at Christ Lutheran.</h1>

<nav class="text-center">
    <ul class="pagination">
        <li class="{{(!isset($page)||$page == 1)?'active':''}}">
            <a href="{{url('/faces/1')}}">Page 1</a>
        </li>
        <li class="{{(isset($page)&&$page == 2)?'active':''}}">
            <a href="{{url('/faces/2')}}">Page 2</a>
        </li>
        <li class="{{(isset($page)&&$page == 3)?'active':''}}">
            <a href="{{url('/faces/3')}}">Page 3</a>
        </li>
        <li class="{{(isset($page)&&$page == 4)?'active':''}}">
            <a href="{{url('/faces/4')}}">Page 4</a>
        </li>
    </ul>
</nav>

@if(!isset($page) || $page == 1)

<div class="row gallery" data-featherlight-gallery data-featherlight-filter="a">
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/childrens-serman.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/childrens-serman.jpg" alt="childrens-serman">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/chinese-class-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/chinese-class-09.jpg" alt="chinese-class-09">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/chinese-class.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/chinese-class.jpg" alt="chinese-class">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/choir.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/choir.jpg" alt="choir">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/church.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/church.jpg" alt="church">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/earth-sunday-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/earth-sunday-09.jpg" alt="earth-sunday-09">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/easter-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/easter-09.jpg" alt="easter-09">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/fall-picnic-07.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/fall-picnic-07.jpg" alt="fall-picnic-07">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/fall-picnic-pix-07.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/fall-picnic-pix-07.jpg" alt="fall-picnic-pix-07">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/fall-picnicers-07.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/fall-picnicers-07.jpg" alt="fall-picnicers-07">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/golf-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/golf-09.jpg" alt="golf-09">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/kids-christmas-program-08.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/kids-christmas-program-08.jpg" alt="kids-christmas-program-08.jpg">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/kids-in-vbs.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/kids-in-vbs.jpg" alt="kids-in-vbs">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/kitchen-helpers.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/kitchen-helpers.jpg" alt="kitchen-helpers">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/ladies-picnic-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/ladies-picnic-09.jpg" alt="ladies-picnic-09">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/ladies-picnic.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/ladies-picnic.jpg" alt="ladies-picnic">
        </a>
    </div>
</div>

@elseif(isset($page)&&$page == 2)

<div class="row gallery" data-featherlight-gallery data-featherlight-filter="a">
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/ladies-picnicing.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/ladies-picnicing.jpg" alt="adies-picnicing">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/mortgage-burning-fall-07.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/mortgage-burning-fall-07.jpg" alt="mortgage-burning-fall-07">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/pastor-after-service.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pastor-after-service.jpg" alt="pastor-after-service">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/pastor.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pastor.jpg" alt="pastor">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/peace-garden-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/peace-garden-09.jpg" alt="peace-garden-09">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/peace-garden.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/peace-garden.jpg" alt="peace-garden">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/trunk-sale-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/trunk-sale-09.jpg" alt="trunk-sale-09">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/trunk-sale.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/trunk-sale.jpg" alt="trunk-sale">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/vbs-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/vbs-09.jpg" alt="vbs-09">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/youth-car-wash.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/youth-car-wash.jpg" alt="youth-car-wash">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image1.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image1.jpg" alt="image1">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image2.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image2.jpg" alt="image2">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image3.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image3.jpg" alt="image3">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image4.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image4.jpg" alt="image4">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image5.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image5.jpg" alt="image5">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image6.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image6.jpg" alt="image6">
        </a>
    </div>
</div>

@elseif(isset($page)&&$page == 3)

<div class="row gallery" data-featherlight-gallery data-featherlight-filter="a">
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image7.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image7.jpg" alt="image7">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image8.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image8.jpg" alt="image8">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image9.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image9.jpg" alt="image9">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image10.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image10.jpg" alt="image10">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image11.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image11.jpg" alt="image11">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image12.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image12.jpg" alt="image12">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image13.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image13.jpg" alt="image13">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image14.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image14.jpg" alt="image14">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image15.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image15.jpg" alt="image15">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image16.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image16.jpg" alt="image16">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image17.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image17.jpg" alt="image17">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image18.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image18.jpg" alt="image18">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image19.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image19.jpg" alt="image19">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image20.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image20.jpg" alt="image20">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image21.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image21.jpg" alt="image21">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image22.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image22.jpg" alt="image22">
        </a>
    </div>
</div>

@elseif(isset($page)&&$page == 4)

<div class="row gallery" data-featherlight-gallery data-featherlight-filter="a">
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image23.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image23.jpg" alt="image23">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image24.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image24.jpg" alt="image24">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image25.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image25.jpg" alt="image25">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image26.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image26.jpg" alt="image26">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image27.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image27.jpg" alt="image27">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image28.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image28.jpg" alt="image28">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image29.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image29.jpg" alt="image29">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
         <a class="thumbnail thumbnail-popup" href="{{url('/')}}/img/photos/image30.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image30.jpg" alt="image30">
        </a>
    </div>
</div>

@endif

@stop