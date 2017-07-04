<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  

    <style>
    .padder{
        margin-bottom:10px;
    }
    </style>
</head>
<body>
	<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">LOGO</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li><a href="{{ url('/home') }}">Home</a></li>
        <li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tournaments<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addNewTournament">Add New Tournament</a></li>
          </ul>
        </li>
        <li><a href="#">Development</a></li>
        <li><a href="#">Clinics</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>-->

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <b>Settings</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					<div class="">
							<div class="col-md-12" style="padding-bottom:8px!important;margin-bottom:8px!important">
                <a href="editCurrentUser">Edit Account</a>


			
					</div>
				 </div>
				</li>
			</ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <b>Admin</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					<div class="">
							<div class="col-md-12">
								<center><img class="img-circle" style="width: 100px; border: 2px solid #FF8333;" src="images/img1.jpg">
								<h4 style="margin-top:10px;">ATIF TASKEEN</h4>
								<p style="margin-top:-5px;" >atif.taskeen@hotmail.com</p></center>
								
							<div class="form-group">
								 <a href="{{ url('/signout') }}" class="btn btn-primary btn-block signout-btn">Sign Out</a>
							</div>
					</div>
				 </div>
				</li>
			</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
		<h1  style="text-align: center;margin-bottom:30px">Add Tournament</h1>

  <form class="form-horizontal well" action="addNewTournamentWithPost" method="post">
  {{ csrf_field() }}
    
        <div class="row">
  <div class="col-lg-6">
    <div class="input-group padder">
      <span class="input-group-addon">
         <span class="glyphicon glyphicon-user"></span>
      </span>
      <input type="text" class="form-control" aria-label="..."  name="title" id="title" placeholder="Enter Title">
       
    </div><!-- /input-group -->
    <div class="input-group padder">
      <span class="input-group-addon">
        <span class="glyphicon glyphicon-addon">Text</span>
      </span>
      <input type="text" class="form-control" aria-label="..."  name="description" id="description" placeholder="Enter Description" >
    </div><!-- /input-group -->
    <div class="input-group padder">
      <span class="input-group-addon">
        <span class="glyphicon glyphicon-globe"></span>
      </span>
      <input type="text" class="form-control" aria-label="..." name="location" id="location" placeholder="Enter Location/City/State">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->


  <div class="col-lg-6">
  
    <div class="input-group padder">
      <span class="input-group-addon">
        <input type="radio" aria-label="...">
      </span>
      <textarea  class="form-control" style="height:79px"  name="long_description" id="long_description" placeholder="Describe yourself here...">
      </textarea>
    </div><!-- /input-group -->

    <div class="row">
<div class="col-md-6 col-lg-6 padder">
<div class="input-group padder " >
<span class="input-group-addon" >
  <span class="glyphicon glyphicon-calendar"></span>
</span>
<input type="text" class="form-control" aria-label="..." id="date" name="date" placeholder="Enter date">
<script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker();
            });
 </script>
</div>
</div>
<div class="col-md-6 col-lg-6 padder">
<div class="input-group padder datepicker">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span>
</span><input type="text" class="form-control" aria-label="..." id="dateend" name="dateend" placeholder="Enter date">
</div>
 <div class="col-sm-5"><button type="Submit" class="btn btn-primary form-control" >Submit</button></div>
</div><!-- /.col-lg-6 -->
</div><!-- /.row -->

      </div>
    </div>
  </form>



	</div>
	<footer>
	</footer>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script>
		$(document).ready(function() {
    $('#eg_table').DataTable({

    	"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
} );
	</script>
</body>
</html>