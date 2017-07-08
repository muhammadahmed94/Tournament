
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
     <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
               <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <b>Settings</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
          <div class="">
              <div class="col-md-12" style="padding-bottom:8px!important;margin-bottom:8px!important">
                <a href="editrepteam/{{$user->id}}">Edit Account</a>

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
                                <center><img class="img-circle" style="width: 100px; border: 2px solid #FF8333;" src="img/img1.jpg">
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
                
          <div class="container">
    <h1 style="text-align: center;">TOURNAMENTS SCHEDULE</h1>
    <table id="eg_table" class="table">
         <thead>
            <tr>
                <th>Event Date</th>
                <th>Event Title</th>
                <th>Registered Teams</th>
                <th>Registered Status</th>
               <th></th>
            </tr>
        </thead>
        <tbody>
       
            <tr>
                <td><a href="">2017/04/03</a></td>
                <td><a href="{{ url('/Event') }}">Chicago World Event</a></td>
                <td><a href="{{ url('/Event') }}">Boys-AAA</a></td>
                
                <td>
                <a href="">Incomplete</a>
                </td>

                 <td>
                 <a href="{{ url('/Singleteam')}}">
                <img class="edit" src="images/RedDot.png" title="edit" alt="edit">
                </a>
                <!--<a href="#">
                <img class="delete" src="images/cancel.png"   title="delete" alt="delete">-->
                </a>
                </a>
                </td>
            </tr>
                
            <tr>
                <td><a href="">2017/04/03</a></td>
                <td><a href="{{ url('/Event') }}">Chicago World Event</a></td>
                <td><a href="{{ url('/Event') }}">Boys-AAA</a></td>
                
                <td>
                <a href="">Done</a>
                </td>

                 <td>
                 <a href="{{ url('/Singleteam') }}">
                <img class="edit" src="images/green.png" title="edit" alt="edit">
                </a>
                <!--<a href="#">
                <img class="delete" src="images/cancel.png"   title="delete" alt="delete">-->
                </a>
                </a>
                </td>
            </tr>
         
        </tbody>

      </table>
        
    </div>
    </div>

    <footer>
    </footer>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
