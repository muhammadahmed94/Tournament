
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
.container {
    /* width: 1170px; */
    padding-left: 50px;
    padding-top: 25px;
}
    </style>
</head>
<body>
      @include('team-rep/header')
    @include('team-rep/sidebar')
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
