@extends('admin.adminHeader')

@section('bodyContentAdmin')
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

      <form action="editAccountInfo" method="post" enctype="multipart/form-data">
        <input name="accountId" type ="hidden" value="{{$user->id}}">
      <div class="col-md-6" style=" margin-top: 100px;  ">
        <div class="col-md-12"><label>Name :</label>
        <input name="name" class="form-control" value="{{$user->name}}">
        </div>
        <div class="col-md-12"><label>Email :</label>
        <input name="email" class="form-control" value="{{$user->email}}">
        </div>
        <div class="col-md-12"><label>Upload Image :</label>
        <div class="form-group">
        <input type="file" name="userImage" class="form-control" id="image">
        </div> 
        {{ csrf_field() }}
        <button type="submit" class="btn btn-default">Submit</button> 
        </div>
      </div>
      <div class="col-md-6" style="margin-top: 100px;  ">
        <img  style="heigth:100px;width:300px" src="{{$user->imagepath}}"/>
        </div>
        
        </div>

      </div>

      </form>
 
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
  @endsection
