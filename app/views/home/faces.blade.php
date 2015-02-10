@extends('master.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')

<h1>There's lots of fun and fellowship here at Christ Lutheran.</h1>

<ul class="list-inline page-links">
	<li class="{{(!isset($page)||$page == 1)?'active':''}}">{{(isset($page)&&$page!=1)?'<a href="'.url('/').'/faces/1">':''}}Page 1{{(isset($page)&&$page!=1)?'</a>':''}}</li>
	<li class="{{(isset($page)&&$page == 2)?'active':''}}">{{(!isset($page)||$page!=2)?'<a href="'.url('/').'/faces/2">':''}}Page 2{{(!isset($page)||$page!=2)?'</a>':''}}</li>
	<li class="{{(isset($page)&&$page == 3)?'active':''}}">{{(!isset($page)||$page!=3)?'<a href="'.url('/').'/faces/3">':''}}Page 3{{(!isset($page)||$page!=3)?'</a>':''}}</li>
	<li class="{{(isset($page)&&$page == 4)?'active':''}}">{{(!isset($page)||$page!=4)?'<a href="'.url('/').'/faces/4">':''}}Page 4{{(!isset($page)||$page!=4)?'</a>':''}}</li>
</ul>

@if(!isset($page) || $page == 1)

<div class="row gallery" data-featherlight-gallery data-featherlight-filter="a">
	<div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/childrens-serman.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/childrens-serman.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/chinese-class-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/chinese-class-09.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/chinese-class.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/chinese-class.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/choir.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/choir.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/church.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/church.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/earth-sunday-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/earth-sunday-09.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/easter-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/easter-09.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/fall-picnic-07.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/fall-picnic-07.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/fall-picnic-pix-07.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/fall-picnic-pix-07.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/fall-picnicers-07.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/fall-picnicers-07.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/golf-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/golf-09.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/kids-christmas-program-08.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/kids-christmas-program-08.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/kids-in-vbs.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/kids-in-vbs.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/kitchen-helpers.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/kitchen-helpers.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/ladies-picnic-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/ladies-picnic-09.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/ladies-picnic.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/ladies-picnic.jpg" alt="">
        </a>
    </div>
</div>

@elseif(isset($page)&&$page == 2)

<div class="row gallery" data-featherlight-gallery data-featherlight-filter="a">
	<div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/ladies-picnicing.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/ladies-picnicing.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/mortgage-burning-fall-07.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/mortgage-burning-fall-07.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/pastor-after-service.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pastor-after-service.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/pastor.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/pastor.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/peace-garden-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/peace-garden-09.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/peace-garden.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/peace-garden.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/trunk-sale-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/trunk-sale-09.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/trunk-sale.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/trunk-sale.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/vbs-09.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/vbs-09.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/youth-car-wash.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/youth-car-wash.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image1.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image1.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image2.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image2.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image3.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image3.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image4.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image4.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image5.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image5.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image6.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image6.jpg" alt="">
        </a>
    </div>
</div>

@elseif(isset($page)&&$page == 3)

<div class="row gallery" data-featherlight-gallery data-featherlight-filter="a">
	<div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image7.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image7.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image8.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image8.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image9.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image9.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image10.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image10.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image11.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image11.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image12.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image12.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image13.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image13.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image14.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image14.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image15.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image15.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image16.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image16.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image17.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image17.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image18.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image18.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image19.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image19.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image20.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image20.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image21.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image21.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image22.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image22.jpg" alt="">
        </a>
    </div>
</div>

@elseif(isset($page)&&$page == 4)

<div class="row gallery" data-featherlight-gallery data-featherlight-filter="a">
	<div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image23.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image23.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image24.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image24.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image25.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image25.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image26.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image26.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image27.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image27.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image28.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image28.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image29.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image29.jpg" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-xs-6 thumb">
        <a class="thumbnail" href="{{url('/')}}/img/photos/image30.jpg">
            <img class="img-responsive center-block" src="{{url('/')}}/img/photos/cropped/image30.jpg" alt="">
        </a>
    </div>
</div>

@endif

@stop

@section('footercode')

<script type="text/javascript">
	$('.gallery a').featherlightGallery({
	    previousIcon: '<span class="glyphicon glyphicon-chevron-left"></span>',
	    nextIcon: '<span class="glyphicon glyphicon-chevron-right"></span>',
	    galleryFadeIn: 300,

	    openSpeed: 300
	});
</script>

@stop