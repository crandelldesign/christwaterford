<div class="page admin">

<nav class="navbar navbar-default margin-top-15" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">Christ Lutheran Church of Waterford</a>
    </div>
    @if(Auth::check())
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{url('/')}}/events/admin">Admin Home</a></li>
        <li><a href="{{url('/')}}/events/admin/add-event">Add Event</a></li>
        <li><a href="{{url('/')}}/events/admin/all-events">Edit Events</a></li>
        <li><a href="{{url('/')}}/events/admin/change-password">Change Password</a></li>
        <li><a href="{{url('/')}}/events/admin/logout">Logout</a></li>
      </ul>
    </div>
    @endif
  </div>
</nav>

<div class="margin-bottom-15"></div>

<div class="content">