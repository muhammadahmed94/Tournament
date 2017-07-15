<!DOCTYPE html>
<html>
<head>
	<title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style type="text/css">
    
    .navbar{
      margin-bottom: 0px;
    position: fixed;
    width: 100%;
    z-index: 9999;
    }
         .eventInfoClass {
    /* width: 1170px; */
    padding-left: 100px;
    padding-top: 75px;
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
     .tableClass{
        width: 100%;
        float: left;
        background-color: #eee;
        margin-top: 20px;
     }  
     .tableClass>thead{
        border-bottom: 2px solid black;
     } 
     th{
        text-align: center;
     }
     td{
        text-align: center;
     }
     .img{
        height: 25px;
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
     .upload{
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
       label{
            margin-top: 15px;
        }  
        .input-box-items{
    border: 2px solid gray;
    float: left;
    margin-top: 50px;
    box-shadow: 10px 10px 5px  #888888;
    width: 100%;
}
.input-box-item{
    border: 2px solid gray;
    float: left;
    margin-top: 20px;
    box-shadow: 10px 10px 5px  #888888;
    margin-bottom: 30px;
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
    nav.sidebar:hover + .main{
      margin-left: 200px;
    }

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
      margin-left: -160px;
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
  .sidebar{
    margin-top:50px!important;
  }

  .faviconClass{
    height:20px!important;
    width:20px!important;
  }
  .teamstatusclass{
    height:20px!important;
    width:20px!important;
  }


  .dropdown-menu>li{
    background-color: #222!important;
  }
   .dropdown-menu{
    background-color: #222!important;
  }
  .dropdown-menu>li>a:hover{
    background-color: #A0A0A0!important;
  }
  .accountdropdownclass{
    background-color: #F8F8F8!important;
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
            <li><a href="{{ url('/addNewTeamScreen') }}"">Create New Team</a></li>
            <li><a href="#">Chi Town Shuffle</a></li>
          </ul>
        </li>
        <li><a href="#">Development</a></li>
        <li><a href="#">Clinics</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <b>Settings</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
          <div class="">
              <div class="col-md-12" style="padding-bottom:8px!important;margin-bottom:8px!important">
                <a href="editCurrentUserTeam">Edit Account</a>

</div>
         </div>
        </li>
      </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <b>Account</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu accountdropdownclass">
                <li>
                    <div class="">
                            <div class="col-md-12">
                                <center><img class="img-circle" style="width: 100px; border: 2px solid #FF8333;" src="images/img1.jpg">
                                <h4 style="margin-top:10px;">{{$user->name}}</h4>
                                <p style="margin-top:-5px;" >{{$user->email}}</p></center>
                                
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
