
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
								<h4 style="margin-top:10px;">Team</h4>
								<p style="margin-top:-5px;" >Team@hotmail.com</p></center>
								
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
  </nav>-->
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