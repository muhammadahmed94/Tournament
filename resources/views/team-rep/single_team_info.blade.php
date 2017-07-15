  @include('team-rep/header')
      @include('team-rep/sidebar')  
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
  .btn-primary:hover {
    color: #fff;
   background-color: #337ab7 !important; 
  border-color: #337ab7 !important;
  
}
</style>

	
  <div class="container eventInfoClass">
  <div class="col-lg-10 col-md-9 col-sm-9 ">
  <div class="row">
  <div class="">
    <h2 style="margin-top: 70px;">Team Profile</h2>
    <div class="team_profile">
   <form class="form-horizontal " action="/editteamdashboard" method="post" enctype="multipart/form-data">

       {{ csrf_field() }}
      <div class="team_profile_title">
        <h3 style="padding: 10px 0px 10px 10px; margin-top: 0px;">Team Info</h3>
      </div>
      <div class="col-md-2">
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="sel1">Birth Year</label>
          <input type="text" name="ah" value="{{ $teams->birth_year }}" class="form-control" id="sel1">

          </input>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="sel1">Head Coach Name</label>
           <input type="text" value="{{ $teams->head_coach_name }}" class="form-control" id="sel1">

          </input>
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
             <input type="text" value="{{ $teams->player_level }}" class="form-control" id="sel1">

          </input>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="sel1">Head Coach Email</label>
             <input type="text" value="{{ $teams->head_coach_email }}" class="form-control" id="sel1">

          </input>
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
            <input type="text" value="{{ $teams->head_coach_phone }}" class="form-control" id="sel1">

          </input>
          </div>
        </div>
        <div class="col-md-2">
        </div>
      </div>
    </div>
    <div style="margin-top: 40px;" class="team_profile">
      <div class="team_profile_title">
        <h3 style="padding: 10px 0px 10px 10px; margin-top: 0px;"><img class="edit teamstatusclass" src="images/red.png">Certified Roster</h3>
      </div>
      <div style="margin: 30px 0px 30px 0px; float: left; width: 100%;">
        <div class="col-md-3">
          <center>
            <div style="margin-top: 10px;" class="upload-btn-wrapper btn-primary">
            <!-- <button  class="btn btn-primary"><span><img class="edit teamstatusclass" src="images/upload.png"></span>Upload PDF</button>
            <input id="my-file-selector" name="myfile" type="file" style="display:none" > -->

            <label style="margin-top: 0px; " class="btn btn-primary upload" for="my-file-selector">
              <span><img class="edit teamstatusclass" src="images/upload.png">
              <input id="my-file-selector" name="myfile" type="file" style="display:none" >
              Upload PDF
            </label>
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
            <input style="margin-top: 15px;" type="text" class="form-control" name="url_certified" placeholder="Paste URL here">
          </div>
        </div>
      </div>
    </div>
    
    <div style="margin-top: 40px;" class="team_profile">
      <div class="team_profile_title">
        <h3 style="padding: 10px 0px 10px 10px; margin-top: 0px;"><img class="edit teamstatusclass" src="images/red.png">Travel Permit</h3>
      </div>
      <div style="margin: 30px 0px 30px 0px; float: left; width: 100%;">
        <div class="col-md-3">
          <center>
            <div style="margin-top: 10px;" class="upload-btn-wrapper btn-primary">
            <label style="margin-top: 0px; " class="btn btn-primary upload" for="my-file-selector">
              <span><img class="edit teamstatusclass" src="images/upload.png">
              <input id="my-file-selector" name="myfile1" type="file" style="display:none" >
              Upload PDF
            </label>
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
            <input style="margin-top: 15px;" type="text" class="form-control" name="url_team" placeholder="Paste URL here">
          </div>
        </div>
      </div>
    </div>
    <div style="margin-top: 40px; margin-bottom: 40px;" class="team_profile">
      <div class="team_profile_title">
        <h3 style="padding: 10px 0px 10px 10px; margin-top: 0px;"><img class="edit teamstatusclass" src="images/green.png">Program Book Roster</h3>
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
  <input type="submit" name="submit">
  </form>
  </div>
	<footer>
	</footer>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    
</body>
</html>