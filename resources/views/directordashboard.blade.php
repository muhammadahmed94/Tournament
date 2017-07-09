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
            <li><a href="addNewTournamentDirector">Add New Tournament</a></li>
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
                <a href="editCurrentUserDirector">Edit Account</a>


            
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
                                <h4 style="margin-top:10px;"><?=$user["name"]?></h4>
                                <p style="margin-top:-5px;" ><?=$user["email"]?></p></center>
                                
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
        <h1 style="text-align: center;">TOURNAMENTS SCHEDULE</h1>
        <table id="eg_table" class="table">
             <thead>
            <tr>
                <th>Event Date</th>
                <th>Event Title</th>
                <th>Registered</th>
                <th>Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($tournaments as $tournament )
            <tr>
                <td>{{ $tournament->tournament_date }}</td>
                <td>{{ $tournament->tournament_name }}</td>
                <td>% of team accept</td>
               
                <td>
                <a href="editTournamentDirector/{{ $tournament->tournament_id }}">
                <img class="edit" src="images/pencil.png" title="edit" alt="edit">
                </a>
                <a href="deleteTournamentDirector/{{ $tournament->tournament_id }}">
                <img class="delete" src="images/cancel.png" title="delete" alt="delete">
                </a>
                </td>

                 <td>
                 <a href="ViewTournamentDirector/{{ $tournament->tournament_id }}">
                View
                </a>
                </td>
            </tr>
                @endforeach
           
         
        </tbody>

        </table>
        <a href="addNewTournamentDirector">Create New Event</a>
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