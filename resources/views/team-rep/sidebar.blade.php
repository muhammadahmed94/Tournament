<nav style="margin-top: 55px;" class="navbar navbar-inverse sidebar " role="navigation">

 <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav nav2">
        <li><a href="{{ url('/home') }}">Active Events<span style="font-size:16px;"><img class="faviconClass" style="float: right;" class="edit" src='{{ URL::asset("/images/calendar.png") }}'></span></a></li>
        <li ><a href="{{ url('/myteams') }}">My Teams<span style="font-size:16px;"><img class="faviconClass" style="float: right;" class="edit" src='{{ URL::asset("/images/group.png") }}'></span></a></li>
      </ul>
    </div>
    </div>
</nav>
