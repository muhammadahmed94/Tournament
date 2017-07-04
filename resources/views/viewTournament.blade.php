<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	 <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/stylesheet.css" rel="stylesheet">
    <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style>
      table {
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid Black;
  padding: 5px 15px;
  text-align: center;
}
tr :nth-child(3), tr :nth-child(4), tr :nth-child(5), tr :nth-child(6) {
  color: white; background-color: #9FD1B2;
}
tr :nth-child(7), tr :nth-child(8) {
  color: white; background-color: #81BCC7;
}
tr :nth-child(9), tr :nth-child(10) {
  color: white; background-color: #DADE78;
}
 ul.breadcrumb {
    padding: 8px 16px;
    list-style: none;
    background-color: #eee;
}
ul.breadcrumb li {display: inline;}
ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: ">\00a0";
}
ul.breadcrumb li a {color: #FF8333;}

.head{
    background-color: #337ab7;
    height: 30px;
}
.head-title li {
    float: left;
    list-style: none;
    padding-right: 10px;
    padding-left: 10px;
    margin-top: 5px;
    border-right: 2px solid white;
    vertical-align: middle;
    color: white;
}
.head-title :nth-child(1) {
    padding-left: 0px;
}
.head-title :last-child {
    border-right: none;
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
<div class="container">
  <ul class="breadcrumb">
    <li><a href="#">Page1</a></li>
    <li><a href="#">Page2</a></li>
    <li><a href="#">Page3</a></li>
    <li>Page4</li>
  </ul>
  <h3>Chi Town Shuffle</h3>
  <div class="head hidden-sm hidden-xs">
    <ul class="head-title"> 
      <li>2009 AAA</li>
      <li>OPEn 14/20</li>
      <li>WAITLIST 0</li>
      <li>DROPPED3</li>
    </ul>
  </div>
  <table border="1" >
    <tr>
      <th colspan="2"></th>
      <th colspan="4" style="color: white; background-color: #9FD1B2;">PAYMENT STATUS</th>
      <th colspan="2" style="color: white; background-color: #81BCC7;">REGISTRATION STATUS</th>
      <th colspan="2" style="color: white; background-color: #DADE78;">CONTACT INFO</th>
    </tr>
    <tr>
      <th>ID</th>
      <th>TEAM</th>
      <th style="color: white; background-color: #9FD1B2;">BAL</th>
      <th style="color: white; background-color: #9FD1B2;">DEP</th>
      <th style="color: white; background-color: #9FD1B2;">FULL</th>
      <th style="color: white; background-color: #9FD1B2;">INS.</th>
      <th style="color: white; background-color: #81BCC7;">ACCEPT</th>
      <th style="color: white; background-color: #81BCC7;">INFORMATION</th>
      <th style="color: white; background-color: #DADE78;">COACH</th>
      <th style="color: white; background-color: #DADE78;">EMAIL</th>
    </tr>
    <tr>
      <td>12</td>
      <td>RED WINGS</td>
      <td>$1400</td>
      <td>$400 CC</td>
      <td>$1000 CC</td>
      <td>852</td>
      <td>3/20</td>
      <td><a href="#"><img class="edit" src="img/green.png"></a></td>
      <td>DOE JOE</td>
      <td><button type="button" class="btn btn-primary">Email</button></td>
    </tr>
    <tr>
      <td>12</td>
      <td>RED WINGS</td>
      <td>$1400</td>
      <td>$400 CC</td>
      <td>$1000 CC</td>
      <td>852</td>
      <td>3/20</td>
      <td><a href="#"><img class="edit" src="img/red.png"></a></td>
      <td>DOE JOE</td>
      <td><button type="button" class="btn btn-primary">Email</button></td>
    </tr>
    <tr>
      <td>12</td>
      <td>RED WINGS</td>
      <td>$1400</td>
      <td>$400 CC</td>
      <td>$1000 CC</td>
      <td>852</td>
      <td>3/20</td>
      <td><a href="#"><img class="edit" src="img/red.png"></a></td>
      <td>DOE JOE</td>
      <td><button type="button" class="btn btn-primary">Email</button></td>
    </tr>
  </table>

  <h3>Wait List</h3>
  <div class="head hidden-sm hidden-xs">
    <ul class="head-title"> 
      <li>2009 AAA</li>
      <li>OPEn 14/20</li>
      <li>WAITLIST 0</li>
      <li>DROPPED3</li>
    </ul>
  </div>
  <table border="1" >
    <tr>
      <th colspan="2"></th>
      <th colspan="4" style="color: white; background-color: #9FD1B2;">PAYMENT STATUS</th>
      <th colspan="2" style="color: white; background-color: #81BCC7;">REGISTRATION STATUS</th>
      <th colspan="2" style="color: white; background-color: #DADE78;">CONTACT INFO</th>
    </tr>
    <tr>
      <th>ID</th>
      <th>TEAM</th>
      <th style="color: white; background-color: #9FD1B2;">BAL</th>
      <th style="color: white; background-color: #9FD1B2;">DEP</th>
      <th style="color: white; background-color: #9FD1B2;">FULL</th>
      <th style="color: white; background-color: #9FD1B2;">INS.</th>
      <th style="color: white; background-color: #81BCC7;">ACCEPT</th>
      <th style="color: white; background-color: #81BCC7;">INFORMATION</th>
      <th style="color: white; background-color: #DADE78;">COACH</th>
      <th style="color: white; background-color: #DADE78;">EMAIL</th>
    </tr>
    <tr>
      <td>12</td>
      <td>RED WINGS</td>
      <td>$1400</td>
      <td>$400 CC</td>
      <td>$1000 CC</td>
      <td>852</td>
      <td>3/20</td>
      <td><a href="#"><img class="edit" src="img/green.png"></a></td>
      <td>DOE JOE</td>
      <td><button type="button" class="btn btn-primary">Email</button></td>
    </tr>
    <tr>
      <td>12</td>
      <td>RED WINGS</td>
      <td>$1400</td>
      <td>$400 CC</td>
      <td>$1000 CC</td>
      <td>852</td>
      <td>3/20</td>
      <td><a href="#"><img class="edit" src="img/red.png"></a></td>
      <td>DOE JOE</td>
      <td><button type="button" class="btn btn-primary">Email</button></td>
    </tr>
    <tr>
      <td>12</td>
      <td>RED WINGS</td>
      <td>$1400</td>
      <td>$400 CC</td>
      <td>$1000 CC</td>
      <td>852</td>
      <td>3/20</td>
      <td><a href="#"><img class="edit" src="img/red.png"></a></td>
      <td>DOE JOE</td>
      <td><button type="button" class="btn btn-primary">Email</button></td>
    </tr>
  </table>
  <div class="head hidden-sm hidden-xs">
    <ul class="head-title"> 
      <li>2009 AAA</li>
      <li>OPEn 14/20</li>
      <li>WAITLIST 0</li>
      <li>DROPPED3</li>
    </ul>
  </div>
  <table border="1" >
    <tr>
      <th colspan="2"></th>
      <th colspan="4" style="color: white; background-color: #9FD1B2;">PAYMENT STATUS</th>
      <th colspan="2" style="color: white; background-color: #81BCC7;">REGISTRATION STATUS</th>
      <th colspan="2" style="color: white; background-color: #DADE78;">CONTACT INFO</th>
    </tr>
    <tr>
      <th>ID</th>
      <th>TEAM</th>
      <th style="color: white; background-color: #9FD1B2;">BAL</th>
      <th style="color: white; background-color: #9FD1B2;">DEP</th>
      <th style="color: white; background-color: #9FD1B2;">FULL</th>
      <th style="color: white; background-color: #9FD1B2;">INS.</th>
      <th style="color: white; background-color: #81BCC7;">ACCEPT</th>
      <th style="color: white; background-color: #81BCC7;">INFORMATION</th>
      <th style="color: white; background-color: #DADE78;">COACH</th>
      <th style="color: white; background-color: #DADE78;">EMAIL</th>
    </tr>
    <tr>
      <td>12</td>
      <td>RED WINGS</td>
      <td>$1400</td>
      <td>$400 CC</td>
      <td>$1000 CC</td>
      <td>852</td>
      <td>3/20</td>
      <td><a href="#"><img class="edit" src="img/green.png"></a></td>
      <td>DOE JOE</td>
      <td><button type="button" class="btn btn-primary">Email</button></td>
    </tr>
    <tr>
      <td>12</td>
      <td>RED WINGS</td>
      <td>$1400</td>
      <td>$400 CC</td>
      <td>$1000 CC</td>
      <td>852</td>
      <td>3/20</td>
      <td><a href="#"><img class="edit" src="img/red.png"></a></td>
      <td>DOE JOE</td>
      <td><button type="button" class="btn btn-primary">Email</button></td>
    </tr>
    <tr>
      <td>12</td>
      <td>RED WINGS</td>
      <td>$1400</td>
      <td>$400 CC</td>
      <td>$1000 CC</td>
      <td>852</td>
      <td>3/20</td>
      <td><a href="#"><img class="edit" src="img/red.png"></a></td>
      <td>DOE JOE</td>
      <td><button type="button" class="btn btn-primary">Email</button></td>
    </tr>
  </table>
  <h3>Wait List</h3>
  <div class="head hidden-sm hidden-xs">
    <ul class="head-title"> 
      <li>2009 AAA</li>
      <li>OPEn 14/20</li>
      <li>WAITLIST 0</li>
      <li>DROPPED3</li>
    </ul>
  </div>
  <table border="1" style="margin-bottom: 30px;">
    <tr>
      <th colspan="2"></th>
      <th colspan="4" style="color: white; background-color: #9FD1B2;">PAYMENT STATUS</th>
      <th colspan="2" style="color: white; background-color: #81BCC7;">REGISTRATION STATUS</th>
      <th colspan="2" style="color: white; background-color: #DADE78;">CONTACT INFO</th>
    </tr>
    <tr>
      <th>ID</th>
      <th>TEAM</th>
      <th style="color: white; background-color: #9FD1B2;">BAL</th>
      <th style="color: white; background-color: #9FD1B2;">DEP</th>
      <th style="color: white; background-color: #9FD1B2;">FULL</th>
      <th style="color: white; background-color: #9FD1B2;">INS.</th>
      <th style="color: white; background-color: #81BCC7;">ACCEPT</th>
      <th style="color: white; background-color: #81BCC7;">INFORMATION</th>
      <th style="color: white; background-color: #DADE78;">COACH</th>
      <th style="color: white; background-color: #DADE78;">EMAIL</th>
    </tr>
    <tr>
      <td>12</td>
      <td>RED WINGS</td>
      <td>$1400</td>
      <td>$400 CC</td>
      <td>$1000 CC</td>
      <td>852</td>
      <td>3/20</td>
      <td><a href="#"><img class="edit" src="img/green.png"></a></td>
      <td>DOE JOE</td>
      <td><button type="button" class="btn btn-primary">Email</button></td>
    </tr>
    <tr>
      <td>12</td>
      <td>RED WINGS</td>
      <td>$1400</td>
      <td>$400 CC</td>
      <td>$1000 CC</td>
      <td>852</td>
      <td>3/20</td>
      <td><a href="#"><img class="edit" src="img/red.png"></a></td>
      <td>DOE JOE</td>
      <td><button type="button" class="btn btn-primary">Email</button></td>
    </tr>
    <tr>
      <td>12</td>
      <td>RED WINGS</td>
      <td>$1400</td>
      <td>$400 CC</td>
      <td>$1000 CC</td>
      <td>852</td>
      <td>3/20</td>
      <td><a href="#"><img class="edit" src="img/red.png"></a></td>
      <td>DOE JOE</td>
      <td><button type="button" class="btn btn-primary">Email</button></td>
    </tr>
  </table>
</div>


            <thead>
                  
            </thead>

            
              <tbody>
               <tr>
                <th  colspan="2"></th>
                <th  colspan="4"> <center> Payment Status </center> </th>
                <th  colspan="2"><center> Registration Status </center> </th>
                <th  colspan="2"> <center>  Contact Info </center></th>
              </tr>
              <tr calss ="subhead">  
                  <th>ID</th>
                <th><center>Team</center></th>
                <th colspan="4"><center>BAL</center></th>
              
                <th><center>Accept</center></th>
                <th><center>Information</center></th>
                <th><center>Coach</center></th>
                <th><center>Email</center></th>
              </tr>
              <tr class="gradeX">
                <td><center>&nbsp;</center></td>
                <td><center>&nbsp;;</center></td>
                <td colspan="4"><center>&nbsp;</center></td>
                
                <td><center>&nbsp;</center></td>
                <td><center>&nbsp;</center></td>
                <td><center>&nbsp;&nbsp;</center></td>
                <td><center><a href="">View</a></center></td>
              </tr>
                
              
            </tbody>
            </table>
	</div>
	<footer>
	</footer>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>
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