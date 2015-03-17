@extends('master.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')

<h1>Now let us hear from you.</h1>
<div class="row">
	<div class="col-sm-6">
		<p>Fill out to the form below to send an email to Pastor John.</p>
		<form class="form" role="form" action="{{url('/')}}/submit-contact" method="post">
		  	<div class="form-group">
		    	<label for="name" class="sr-only">Name</label>
			    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
			    <label class="control-label error-label" for="name">Please Enter Your Name</label>
		  	</div>
			<div class="form-group">
			    <label for="email" class="sr-only">Email</label>
			    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
			    <label class="control-label error-label" for="email">Please Enter a Valid Email Address</label>
			</div>
			<div class="form-group">
				<label for="message" class="sr-only">Message</label>
				<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
			    <label class="control-label error-label" for="message">Please Enter a Message.</label>
			</div>
		  	<div class="form-group">
		      	<button type="submit" class="btn btn-default btn-submit pull-right" data-loading-text="Sending...">Send</button>
				<div class="clearfix"></div>
		  	</div>
		</form>
	</div>
	<div class="col-sm-6">
		<h2>You will find us at</h2>
		<p>5987 Williams Lake Road<br />
    		(at Airport Road, one mile west of Dixie Highway)<br />
    		Waterford MI 48329</p>
        
    	<p>248.673.7331</p>

		<iframe class="iframe-map" width="440" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Christ+Lutheran+Church,+Williams+Lake+Road,+Waterford+Township,+MI&amp;aq=2&amp;oq=Chirst+Lutheran+Chuc&amp;sll=45.00109,-86.270553&amp;sspn=11.201376,22.565918&amp;t=m&amp;ie=UTF8&amp;hq=Christ+Lutheran+Church,&amp;hnear=Williams+Lake+Rd,+Waterford+Township,+Oakland,+Michigan&amp;cid=11776608453108580091&amp;ll=42.697324,-83.407946&amp;spn=0.022078,0.030899&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
	</div>
</div>

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-hidden="true">
 	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close contact-close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        		<div class="h3 modal-title">Thank Your For Contacting Christ Lutheran Church</div>
      		</div>
      		<div class="modal-body">
      			<p>Thank you, <span class="thanks-name"></span>, for contacting Christ Lutheran Church. Your message will be responded to as soon as possible.</p>
      		</div>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@stop

@section('footercode')
<script type="text/javascript">

	$('.form').submit(function(event)
    {
        event.preventDefault();

        $('.form .btn-submit').button('loading');

        if ($('.form #name').val() == '')
        {
          $('.form #name').parent().addClass('has-error');
          $('.form .btn-submit').button('reset');
        }

        if ($('.form #email').val() == '')
        {
          $('.form #email').parent().addClass('has-error');
          $('.form .btn-submit').button('reset');
        }

        if ($('.form #message').val() == '')
        {
          $('.form #message').parent().addClass('has-error');
          $('.form .btn-submit').button('reset');
        }

        if (($('.form #name').val() != '') && ($('.contact-container .form #email').val() != '') && ($('.form #message').val() != ''))
        {
          $.ajax({
              type: 'POST',
              url: '{{url('/')}}/submit-contact',
              data: $('.form').serialize(),
              dataType: 'json',
              success: function(result)
              {
                //console.log('Success');
                $('.form .has-error').removeClass('has-error');
                $('.form .btn-submit').button('reset');
                $('#contactModal .thanks-name').html(result['name']);
                $('#contactModal').modal('show');
              }
          });
        }
    return false;
    });

    $('#contactModal .contact-close').click(function(event)
    {
      $('#contactModal .thanks-name').html('');
      $('.form #name').val('');
      $('.form #email').val('');
      $('.form #message').val('');
    });

</script>
@stop