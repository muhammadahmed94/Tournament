@extends('admin.adminHeader')

@section('bodyContentAdmin')
<div class="container">
		<h1 style="text-align: center;">Edit Tournament</h1>
  <form class="form-horizontal " action="editTournamentInfo" method="post">
  {{ csrf_field() }}
  <input type="hidden"  name="tournament_id" value="{{$tournamentId}}">
    <div class="form-group well">
    <div class="form-group ">
      <label class="control-label col-sm-2" for="email">Tournament Name:</label>
      <div class="col-sm-10">
        <input type="text" name="tournament_name" class="form-control" id="email" placeholder="Name" value="{{$tournamentData->title or null}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Tournament Date:</label>
      <div class="col-sm-10">          
        <input type="text"  name="tournament_date" class="form-control" id="tournamentDate" placeholder="Date" value="{{$tournamentData->date_start or null}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Description:</label>
      <div class="col-sm-10">          
        <input type="text"  name="tournament_description" class="form-control" id="pwd" placeholder="Date" value="{{$tournamentData->description or null}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> End Date:</label>
      <div class="col-sm-10">          
        <input type="text"  name="tournament_enddate" class="form-control" id="tournamentDateEnd" placeholder="Date" value="{{$tournamentData->date_end or null}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Long Description:</label>
      <div class="col-sm-10">          
      <textarea type="text"  name="tournament_longdescription" class="form-control" id="pwd"  value="">{{$tournamentData->comment or null}}</textarea> 
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Location:</label>
      <div class="col-sm-10">          
        <input type="text"  name="tournament_location" class="form-control" id="pwd" placeholder="Date" value="{{$tournamentData->location or null}}">
      </div>
    </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    
  </form>



	</div>
	<footer>
	</footer>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>


 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tournamentDate" ).datepicker();
    $( "#tournamentDateEnd" ).datepicker();
    
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