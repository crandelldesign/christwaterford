	<p class="tagline">Where CLC also means "Caring, Loving Community."</p>
</div><!-- /.content -->
<footer class="footer">
	<p>Copyright &copy; {{date("Y")}} Christ Lutheran Church of Waterford. All Rights Reserved.</p>
	<p>Designated trademarks and brands are the property of their respective owners.</p>
	<p>Website and graphics are created by Matt Crandell of <a href="http://www.crandelldesign.com">Crandell Design</a>.</p>
	<p>
    	<a href="{{url('/')}}/events/admin">Admin Access</a>
    	@if(Auth::check())
    	| <a href="{{url('/')}}/events/admin/logout">Logout</a>
    	@endif
    </p>
</footer>
</div><!-- /.page -->
<!--<div class="clearfix"></div>-->
</div><!-- /.wrapper -->