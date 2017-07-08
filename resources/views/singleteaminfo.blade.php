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
                <center><img class="img-circle" style="width: 100px; border: 2px solid #FF8333;" src="<?= $user["imagepath"]?>">
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
        <li><a href="#">Active Events<span style="font-size:16px;"><img style="float: right;" class="edit" src="images/calendar.png"></span></a></li>
        <li ><a href="#">My Teams<span style="font-size:16px;"><img style="float: right;" class="edit" src="images/group.png"></span></a></li>
      </ul>
    </div>
    </div>
</nav>
    <div class="container">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-8">

           <h1 style="text-align: center; margin-top: 70px;">Team Representative Information</h1> 
           <div class="input-box-items">
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Name</label>
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
               </div>  
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Phone#1</label>
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
               </div>   
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Email</label>
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
               </div>     
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Phone#2</label>
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
               </div>        
           </div>
           <h3 style="float: left; margin-top: 50px;">Team Representative Information</h3>
           <div class="input-box-item">

               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Organization Name</label>
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
               </div>  
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Billing Address</label>
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
               </div>   
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Website URL</label>
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
               </div>     
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">City</label>
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
               </div>       
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">State</label>
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Zone</label>
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Country</label>
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Facebbok</label>
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Instagram</label>
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Twitter</label>
                      <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
               </div> 
               <center>
                   <button style="margin-bottom: 20px; width: 80%;" type="button" class="btn btn-primary">UPDATE</button>  
               </center>
                 
           </div>
        </div>

        <div class="col-md-2">
            
        </div>
    </div>

  <footer>
  </footer> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>