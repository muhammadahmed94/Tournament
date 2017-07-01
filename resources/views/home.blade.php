@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hello <?php echo $user->name;?></div>

                <div class="panel-body">


 <form action="/uploadImage" method="post" enctype="multipart/form-data">
 <div class="container" style="padding-bottom:30px;">
  
  <div class="col-md-offset-1" style="heigth:400px;width:500px;padding-bottom:30px;" >
 <img  style="heigth:400px;width:500px" src="{{$user->imagepath}}"/>
 </div>
 Name :<input name="name" value="{{$user->name}}"> <br>
 Email : <input name="email" value="{{$user->name}}"><br>
 Last Updated at : <?php echo $user->updated_at;?>

 
 </div>
     {{ csrf_field() }}
  <div class="form-group">
    <input type="file" name="userImage" class="form-control" id="image">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
