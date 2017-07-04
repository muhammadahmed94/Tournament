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
        <div class="col-md-2">
            
        </div>
        <div class="col-md-8">

           <h1 style="text-align: center;">Team Representative Information</h1> 
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