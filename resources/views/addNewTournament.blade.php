@extends('layouts.mainFrameAdmin')

@section('bodyContentAdmin')


<div class="container">
		<h1  style="text-align: center;margin-bottom:30px">Add Tournament</h1>

  <form class="form-horizontal well" action="addNewTournamentWithPost" method="post">
  {{ csrf_field() }}
    
        <div class="row">
  <div class="col-lg-6">
    <div class="input-group padder">
      <span class="input-group-addon">
         <span class="glyphicon glyphicon-user"></span>
      </span>
      <input type="text" class="form-control" aria-label="..."  name="title" id="title" placeholder="Enter Title">
       
    </div><!-- /input-group -->
    <div class="input-group padder">
      <span class="input-group-addon">
        <span class="glyphicon glyphicon-addon">Text</span>
      </span>
      <input type="text" class="form-control" aria-label="..."  name="description" id="description" placeholder="Enter Description" >
    </div><!-- /input-group -->
    <div class="input-group padder">
      <span class="input-group-addon">
        <span class="glyphicon glyphicon-globe"></span>
      </span>
      <input type="text" class="form-control" aria-label="..." name="location" id="location" placeholder="Enter Location/City/State">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->


  <div class="col-lg-6">
  
    <div class="input-group padder">
      <span class="input-group-addon">
        <input type="radio" aria-label="...">
      </span>
      <textarea  class="form-control" style="height:79px"  name="long_description" id="long_description" placeholder="Describe yourself here...">
      </textarea>
    </div><!-- /input-group -->

    <div class="row">
<div class="col-md-6 col-lg-6 padder">
<div class="input-group padder " >
<span class="input-group-addon" >
  <span class="glyphicon glyphicon-calendar"></span>
</span>
<input type="text" class="form-control" aria-label="..." id="cTournamentDate" name="date" placeholder="Enter date">
</div>
</div>
<div class="col-md-6 col-lg-6 padder">
<div class="input-group padder datepicker">
<span class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span>
</span><input type="text" class="form-control" aria-label="..." id="cTtournamentDateEnd" name="dateend" placeholder="Enter date">
</div>
 <div class="col-sm-5"><button type="Submit" class="btn btn-primary form-control" >Submit</button></div>
</div><!-- /.col-lg-6 -->
</div><!-- /.row -->

      </div>
    </div>
  </form>

<button class="btn-primary">Add team</button>
<small>please add tournament info before adding team</small>

	</div>
	<footer>
	</footer>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#cTournamentDate" ).datepicker();
    $( "#cTtournamentDateEnd" ).datepicker();
    
  } );
  </script>
<script>
		$(document).ready(function() {
    $('#eg_table').DataTable({

    	"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
} );
	</script>

@endsection