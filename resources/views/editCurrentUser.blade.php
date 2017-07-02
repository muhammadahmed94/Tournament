<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <form action="/editAccountInfo" method="post" enctype="multipart/form-data">
 <div class="container" style="padding-bottom:30px;">
  
  <div class="col-md-offset-1" style="heigth:400px;width:500px;padding-bottom:30px;" >
 <img  style="heigth:400px;width:500px" src="{{$user->imagepath}}"/>
 </div>
 <input name="accountId" type ="hidden" value="{{$user->id}}"> 
 Name :<input name="name" value="{{$user->name}}"> <br>
 Email : <input name="email" value="{{$user->email}}"><br>
 Last Updated at : <?php echo $user->updated_at;?>
 </div>
     {{ csrf_field() }}
  <div class="form-group">
    <input type="file" name="userImage" class="form-control" id="image">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>

