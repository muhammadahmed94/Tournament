<!DOCTYPE html>
<html>
<head>
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button1 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black;
  background-color: red;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>

<h2>Users List</h2>
    <br>

<div class="row">

@foreach ($users as $user)
    <div class="column">
    <div class="card">
      <img src="{{$user->imagepath}}"  alt="Jane" style="width:100% ;height:200px">
      <div class="container">
        <h2>{{$user->name}}</h2>
        <p>{{$user->email}}</p>
        <p><button class="button" href="user/{{$user->id}}" onclick="alert('Informations are aready here')">Contact</button></p>
        <p><a class="button1" href="deleteuser/{{$user->id}}">Delete User</a></p>
      </div>
    </div>
  </div>
@endforeach
  

  



</div>

</body>
</html>
