<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	 <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">  
    <style>
    @media (min-width: 1200px){
      .col-lg-10 {
    width: 80.333333%;
}
    }


    .navbar{
      margin-bottom: 0px;
    position: fixed;
    width: 100%;
    z-index: 9999;
    }
 body,html{
    height: 100%;
  }
  th{
    text-align: center;
  }
  td{
    text-align: center;
  }
  .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
  border-radius: 20px;
}

.btn {
  border: 2px solid #337ab7;
  color: white;
  background-color: #337ab7;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;

}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
  .team_profile{
    border: 2px solid gray;
    box-shadow: 10px 10px 5px #888888;
    float: left;
    width: 100%;

  }
  .team_profile_title{
    background-color: #eee;
  }
  /* remove outer padding */
  .main .row{
    padding: 0px;
    margin: 0px;
  }

  /*Remove rounded coners*/

  nav.sidebar.navbar {
    border-radius: 0px;
  }

  nav.sidebar, .main{
    -webkit-transition: margin 200ms ease-out;
      -moz-transition: margin 200ms ease-out;
      -o-transition: margin 200ms ease-out;
      transition: margin 200ms ease-out;
  }

  /* Add gap to nav and right windows.*/
  .main{
    padding: 10px 10px 0 10px;
  }

  /* .....NavBar: Icon only with coloring/layout.....*/

  /*small/medium side display*/
  @media (min-width: 768px) {

    /*Allow main to be next to Nav*/
    .main{
      position: absolute;
      width: calc(100% - 40px); /*keeps 100% minus nav size*/
      margin-left: 40px;
      float: right;
    }

    /*lets nav bar to be showed on mouseover*/
    /*nav.sidebar:hover + .main{
      margin-left: 200px;
    }*/

    /*Center Brand*/
    nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
      margin-left: 0px;
    }
    /*Center Brand*/
    nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
      text-align: center;
      width: 100%;
      margin-left: 0px;
    }

    /*Center Icons*/
    nav.sidebar a{
      padding-right: 13px;
    }

    /*adds border top to first nav box */
    nav.sidebar .navbar-nav > li:first-child{
      border-top: 1px solid;
    }

    /*adds border to bottom nav boxes*/
    nav.sidebar .navbar-nav > li{
      border-bottom: 1px solid;
    }

    /* Colors/style dropdown box*/
    nav.sidebar .navbar-nav .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    /*allows nav box to use 100% width*/
    nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
      padding: 0 0px 0 0px;
    }

    /*colors dropdown box text */
    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
      color: white;
    }

    /*gives sidebar width/height*/
    nav.sidebar{
      width: 200px;
      height: 100%;
      
      float: left;
      z-index: 8000;
      margin-bottom: 0px;
    }

    /*give sidebar 100% width;*/
    nav.sidebar li {
      width: 100%;
    }

    /* Move nav to full on mouse over*/
    nav.sidebar:hover{
      margin-left: 0px;
    }
    /*for hiden things when navbar hidden*/
    .forAnimate{
      opacity: 0;
    }
  }

  /* .....NavBar: Fully showing nav bar..... */

  @media (min-width: 1330px) {

    /*Allow main to be next to Nav*/
    .main{
      width: calc(100% - 200px); /*keeps 100% minus nav size*/
      margin-left: 200px;
    }

    /*Show all nav*/
    nav.sidebar{
      margin-left: 0px;
      float: left;
    }
    /*Show hidden items on nav*/
    nav.sidebar .forAnimate{
      opacity: 1;
    }
  }

  nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
    color: #CCC;
    background-color: transparent;
  }

  nav:hover .forAnimate{
    opacity: 1;
  }
  section{
    padding-left: 15px;
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
        <li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tournaments<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Add New Tournament</a></li>
            <li><a href="#">Chi Town Shuffle</a></li>
          </ul>
        </li>
        <li><a href="#">Development</a></li>
        <li><a href="#">Clinics</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <b>Admin</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					<div class="">
							<div class="col-md-12">
								<center><img class="img-circle" style="width: 100px; border: 2px solid #FF8333;" src="img/img1.jpg">
								<h4 style="margin-top:10px;">ATIF TASKEEN</h4>
								<p style="margin-top:-5px;" >atif.taskeen@hotmail.com</p></center>
								
							<div class="form-group">
								 <button type="submit" class="btn btn-primary btn-block signout-btn">Sign Out</button>
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
  <div class="col-lg-2 col-md-3 col-sm-3">
  <div class="row">
  <nav style="margin-top: 55px;" class="navbar navbar-inverse sidebar" role="navigation">
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
        <li><a href="#">Active Events<span style="font-size:16px;"><img style="float: right;" class="edit" src="img/calendar.png"></span></a></li>
        <li ><a href="#">My Teams<span style="font-size:16px;"><img style="float: right;" class="edit" src="img/group.png"></span></a></li>
      </ul>
    </div>
  </div>
  </nav>
  </div>
  </div>
  <div class="col-lg-10 col-md-9 col-sm-9">
  <div class="row">
  <div class="">
    <h2 style="margin-top: 70px;">Team Profile</h2>
    <div class="team_profile">
      <div class="team_profile_title">
        <h3 style="padding: 10px 0px 10px 10px; margin-top: 0px;">Team Info</h3>
      </div>
      <div class="col-md-2">
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="sel1">Birth Year</label>
          <select class="form-control" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="sel1">Head Coach Name</label>
          <select class="form-control" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>
      <div class="col-md-2">
      </div>
      <div style="width: 100%; float: left;">
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="sel1">Player Level</label>
            <select class="form-control" id="sel1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="sel1">Head Coach Email</label>
            <select class="form-control" id="sel1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
        </div>
        <div class="col-md-2">
        </div>
      </div>
      <div style="width: 100%; float: left;">
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="sel1">Head Coach Phone</label>
            <select class="form-control" id="sel1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
        </div>
        <div class="col-md-2">
        </div>
      </div>
    </div>
    <div style="margin-top: 40px;" class="team_profile">
      <div class="team_profile_title">
        <h3 style="padding: 10px 0px 10px 10px; margin-top: 0px;"><img class="edit" src="img/red.png">Certified Roster</h3>
      </div>
      <div style="margin: 30px 0px 30px 0px; float: left; width: 100%;">
        <div class="col-md-3">
          <center>
            <div style="margin-top: 10px;" class="upload-btn-wrapper btn-primary">
            <button  class="btn btn-primary"><span><img class="edit" src="img/upload.png"></span>Upload PDF</button>
            <input style="width: 100%;" type="file" name="myfile" />
          </div>
          </center>
        </div>
        <div class="col-md-2">
          <center>
            <h3>OR</h3>
          </center>
        </div>
        <div class="col-md-7">
          <div class="form-group">
            <input style="margin-top: 15px;" type="text" class="form-control" id="usr" placeholder="Paste URL here">
          </div>
        </div>
      </div>
    </div>
    
    <div style="margin-top: 40px;" class="team_profile">
      <div class="team_profile_title">
        <h3 style="padding: 10px 0px 10px 10px; margin-top: 0px;"><img class="edit" src="img/red.png">Travel Permit</h3>
      </div>
      <div style="margin: 30px 0px 30px 0px; float: left; width: 100%;">
        <div class="col-md-3">
          <center>
            <div style="margin-top: 10px;" class="upload-btn-wrapper btn-primary">
            <button  class="btn btn-primary"><span><img class="edit" src="img/upload.png"></span>Upload PDF</button>
            <input style="width: 100%;" type="file" name="myfile" />
          </div>
          </center>
        </div>
        <div class="col-md-2">
          <center>
            <h3>OR</h3>
          </center>
        </div>
        <div class="col-md-7">
          <div class="form-group">
            <input style="margin-top: 15px;" type="text" class="form-control" id="usr" placeholder="Paste URL here">
          </div>
        </div>
      </div>
    </div>
    <div style="margin-top: 40px; margin-bottom: 40px;" class="team_profile">
      <div class="team_profile_title">
        <h3 style="padding: 10px 0px 10px 10px; margin-top: 0px;"><img class="edit" src="img/green.png">Certified Roster</h3>
      </div>
      <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Name</th>
        <th>Player Position</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Staff</td>
        <td>Coach/assit/manager</td>
        <td>Player Position</td>
      </tr>
      <tr>
        <td>Staff</td>
        <td>Coach/assit/manager</td>
        <td>Player Position</td>
      </tr>
      <tr>
        <td>Staff</td>
        <td>Coach/assit/manager</td>
        <td>Player Position</td>
      </tr>
    </tbody>
  </table>
    </div>
  </div>
  </div>
  </div>
	<footer>
	</footer>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    
</body>
</html>