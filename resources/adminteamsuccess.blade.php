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
    .team_reg{
    float: left;
    width: 100%;
    background-color: #eee; 
    margin-top: 20px;
}
.reg_status{
    background-color: #E8C1E4;
    float: left;
    width: 100%;
}
     table{
        width: 100%;
        float: left;
        background-color: #eee;
        margin-top: 20px;
     }  
     thead{
        border-bottom: 2px solid black;
     } 
     th{
        text-align: center;
     }
     td{
        text-align: center;
     }
     .reginfo_top{
        float: left;
        width: 100%;
     }
     .reg_info{
        background-color: #9ACC8B;
        margin-right: 30px;
     }
     .reg_info_diff{
        background-color: #E8C1E4;
        margin-right: 30px;
     }
     .uplod{
        margin-top: -15px;
        margin-left: 15px;
        float: right;
        margin-right: 15px;
        width: 200px;
     }
     .payment_info{
      float: left;
      width: 100%;
      border: 2px solid gray;
box-shadow: 10px 10px 5px  #888888;
margin-bottom: 50px;
margin-top: 50px;
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
    </div></nav></div>
    </div>
    <div class="col-lg-10 col-md-9 col-sm-9">
  <div class="row">
    <div class="">
        <h3 style="margin-top: 70px;">Name of the Event & Registered Team</h3>
        <div class="team_reg">
            <div class="col-md-8">
                <center>
                    <p style="margin: 0px; font-size: 20px; padding-top: 6px;">Event description and general information</p>
                    <a href="#">CCM WORLD INVITE - CHICAGO</a>
                </center>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="reg_status"> 
                        <center>
                            <p style="margin: 0px; font-size: 20px; color: white; padding-top: 6px;">Registration Status</p>
                            <p style="color: white;">INCOMPLETE</p>
                        </center>
                </div>
                </div>
            </div>
        </div>
        <h3 style="margin-top: 50px; float: left;">Team Registration check list</h3>
         <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Deposite<br>Made</th>
                    <th>Payment<br>Status</th>
                    <th>Hotel<br>Selector</th>
                    <th>Hotel<br>Reservation</th>
                    <th>Certified<br>Roster</th>
                    <th>Travel<br>Permit</th>
                    <th>Program Book<br>Roster</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td><img class="edit" src="img/green.png"></td>
                <td><img class="edit" src="img/red.png"></td>
                <td> N/A </td>
                <td><img class="edit" src="img/green.png"></td>
                <td><img class="edit" src="img/red.png"></td>
                <td><img class="edit" src="img/green.png"></td>
                <td><img class="edit" src="img/red.png"></td>
              </tr>
            </tbody>
          </table>
          <h3 style="margin-top: 20px; float: left; width: 100%;">Registration Information</h3>
          <div class="reginfo_top">
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info">
                            <h3 style="padding: 10px 0px 0px 15px;">Deposit made</h3>
                            <p style="padding: 10px 0px 10px 15px;">$5,000 Deposite made on 1/7/2017</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info_diff">
                            <h3 style="padding: 10px 0px 0px 15px;">Certified Roster</h3>
                            <p style="padding: 10px 0px 10px 15px;">* Roster info missing <button type="button" class="btn btn-primary uplod">Click here to upload</button></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info_diff">
                            <h3 style="padding: 10px 0px 0px 15px;">Payment Status</h3>
                            <p style="padding: 10px 0px 10px 15px;">* Balance due: $800 <button style="background-color: #9F49AB; border: 1px solid #9F49AB" type="button" class="btn btn-danger uplod">Pay Now</button></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info">
                            <h3 style="padding: 10px 0px 0px 15px;">Travel Permit</h3>
                            <p style="padding: 10px 0px 10px 15px;">N/A</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info">
                            <h3 style="padding: 10px 0px 0px 15px;">Hotel Selector</h3>
                            <p style="padding: 10px 0px 10px 15px;">N/A</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info_diff">
                            <h3 style="padding: 10px 0px 0px 15px;">Program Book Roster</h3>
                            <p style="padding: 10px 0px 10px 15px;">* Roster info missing <button type="button" class="btn btn-primary uplod">Click here to upload</button></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info">
                            <h3 style="padding: 10px 0px 0px 15px;">Hotel Reservation</h3>
                            <p style="padding: 10px 0px 10px 15px;">N/A</p>
                        </div>
                    </div>
                </div>

                
          </div>
          <div class="col-md-2">
                  
                </div>
                <div class="col-md-8">
                  <div class="payment_info">
                  <h3 style="padding: 10px 0px 0px 15px;">Program Book Roster</h3>
                  <p style="padding: 10px 0px 10px 15px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                </div>
                <div class="col-md-2">
                  
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