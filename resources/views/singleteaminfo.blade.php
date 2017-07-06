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
          <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <b>Settings</b>--> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
          <div class="">
              <div class="col-md-12" style="padding-bottom:8px!important;margin-bottom:8px!important">
                <a href="">Edit Account</a>

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
                                <h4 style="margin-top:10px;"></h4>
                                <p style="margin-top:-5px;" ></p></center>
                                
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
        <div class="col-md-2">
            
        </div>
        <div class="col-md-8">

           <h1 style="text-align: center;"></h1> 
         
           <div class="form-group">
           <div class="input-box-items">
           <div class="col-md-12 box-shadow">
               <label for="sel1" style="text-align: center;"><h3 >Team Info</h3></label>
                   
               </div>  
               <div class="col-md-6">

                   <div class="form-group">
                      <label for="sel1">Birth Year</label>
                      <input class="form-control" id="Rep_name" value="" ="Rep_name"></input>
                    </div>
               </div>  
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Head Coach Name</label>
                      <input class="form-control" id="Phone#1"
                 name="Phone#1"     value="">
                       </input>
                    </div>
               </div>   
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Player Level</label>
                      <input class="form-control" id="Email" name="Email" value = "" >
                      </input>
                    </div>
               </div>     
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Head Coach Email</label>
                      <input  class="form-control" id="Phone#2
                      " name="Phone#2" value = "">
                  </input>
                    </div>
               </div>
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Head Coach Name</label>
                      <input class="form-control" id="Phone#1"
                 name="Phone#1"     value="">
                       </input>
                    </div>
               </div>   
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Player Level</label>
                      <input class="form-control" id="Email" name="Email" value = "" >
                      </input>
                    </div>
               </div>     
               <div class="col-md-6">
                   
               </div>
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Head Coach Phone</label>
                      <input  class="form-control" id="Phone#2
                      " name="Phone#2" value = "">
                  </input>
                    </div>
               </div>           
           </div>
          
          
              </div> 
           
        </div>
        {{ csrf_field() }}
        <div class="col-md-2">    
        </div>
    </div>
   <div class="container">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-8">

           <h1 style="text-align: center;"></h1> 
         
           <div class="form-group">
           <div class="input-box-items">
           <div class="col-md-12 box-shadow">
               <label for="sel1" style="text-align: center;"><h3 >Certfied Roaster</h3></label>
                   &nbsp;
               </div>  
               <div class="col-md-12 box-shadow">&nbsp;</div>
               <div class="col-md-6">
                   <div class="form-group">
                      <div style="position:relative;">
        <a class='btn btn-primary' href='javascript:;'>
            Choose File...
            <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
        </a>
        &nbsp;
        <span class='label label-info' id="upload-file-info"></span>
</div>
                    </div>
               </div>     
              

               <div class="col-md-6">
                   <div class="form-group">
                      
                      <input  class="form-control" id="Phone#2
                      " name="Phone#2" value = "" placeholder="Paste URL">
                  </input>
                    </div>
               </div>           
           </div>
           
        </div>
        {{ csrf_field() }}
        <div class="col-md-2">    
        </div>
    </div>

    <footer>
    </footer>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    

</body>
</html>