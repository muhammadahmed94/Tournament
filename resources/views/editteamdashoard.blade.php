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
        <div class="col-md-2">
            
        </div>
        <div class="col-md-8">

           <h1 style="text-align: center;">Team Representative Information</h1> 
         
           <div class="form-group">
           <div class="input-box-items">
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Name</label>
                      <input class="form-control" id="Rep_name" value="{{$user->name}}" ="Rep_name"></input>
                    </div>
               </div>  
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Phone#1</label>
                      <input class="form-control" id="Phone#1"
                 name="Phone#1"     value="{{$user->name}}">
                       </input>
                    </div>
               </div>   
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Email</label>
                      <input class="form-control" id="Email" name="Email" value = {{$user->email}}>
                      </input>
                    </div>
               </div>     
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Phone#2</label>
                      <input  class="form-control" id="Phone#2
                      " name="Phone#2" value = "{{$user->phone2}}">
                  </input>
                    </div>
               </div>        
           </div>
           <h3 style="float: left; margin-top: 50px;">Organization Info</h3>
           <div class="input-box-item">
              @foreach ($userdata as $user)
               <div class="col-md-6">
               <form action="/editrepinfo" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                      <label for="sel1">Organization Name</label>
                      <input class="form-control" id="Organization_name" name="Organization_name" value="{{$user->OrganizationName}}">
                     </input>
                    </div>
               </div>  
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Billing Address</label>
                      <input class="form-control" id="Billing_Address"  name="Billing_Address" value="{{$user->BillingAddress}}">
                      
                      </input>
                    </div>
               </div>   
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Website URL</label>
                      <input class="form-control" id="Website_URL" name="Website_URL" value="{{$user->WebsiteURL}}">
                      </input>
                    </div>
               </div>     
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">City</label>
                      <input class="form-control" id="City" name="City" value="{{$user->City}}">
                        </input>
                    </div>
               </div>       
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">State</label>
                      <input class="form-control" id="State">
                        </input>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Zone</label>
                      <input class="form-control" id="Zone">
                      </input>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Country</label>
                      <input class="form-control" id="Country">
                      </input>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Facebbok</label>
                      <input class="form-control" id="Facebbok">
                      </input>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Instagram</label>
                      <input class="form-control" id="Instagram">
                        
                      </input>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Twitter</label>
                      <input class="form-control" id="Twitter">
                    
                      </input>
                    </div>
               </div>
               @endforeach
               
           </div>
          
           <center>
                   <button style="margin-bottom: 20px; width: 80%;" type="button" class="btn btn-primary" >UPDATE</button>  
               </center>
               </form>
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