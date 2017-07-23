@extends('layouts.mainFrameAdmin')

@section('bodyContentAdmin')

<div class="container">
		<h1 style="text-align: center;">TOURNAMENTS SCHEDULE</h1>
		<table id="eg_table" class="table">
		     <thead>
            <tr>
                <th>Event Date</th>
                <th>Event Title</th>
                <th>Registered</th>
                <th>Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($tournaments as $tournament )
            <tr>
                <td>{{ $tournament->tournament_date }}</td>
                <td>{{ $tournament->tournament_name }}</td>
                <td>% of team accept</td>
               
                <td>
                <a href="editTournament/{{ $tournament->tournament_id }}">
                <img class="edit" src="images/pencil.png" title="edit" alt="edit">
                </a>
                <a href='{{ url("deleteTournament/$tournament->tournament_id") }}'>
                <img class="delete" src="images/cancel.png" title="delete" alt="delete">
                </a>
                </td>

                 <td>
                 <!--<a href="ViewTournament/{{ $tournament->tournament_id }}">-->
                 <a href='{{ url("ViewTournament/$tournament->tournament_id") }}'>
                View
                </a>
                </td>
            </tr>
                @endforeach
           
         
        </tbody>

  		</table>
        <a href="addNewTournament">Create New Event</a>
	</div>
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