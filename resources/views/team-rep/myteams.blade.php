
    @include('team-rep/header')
    @include('team-rep/sidebar')
    <div class="container  eventInfoClass">
         <div class="container">
    <h1 style="text-align: center;">My Teams</h1>
    <table id="eg_table" class="table">
         <thead>
            <tr>
                
                <th>Event Title</th>
                <th>Registered Teams</th>
                <th>Registered Status</th>
               <th></th>
            </tr>
        </thead>
        <tbody>
       	@foreach ($teams as $team )
            <tr>
                
                <td><a href='{{ url("Event/$team->team_id/$team->tournament_id")}}'>Chicago World Event </a></td>
                <td><a href='{{ url("/Event/$team->team_id/$team->tournament_id")}}'>{{$team->team_name}}</a></td>
                <td><a href="">Incomplete</a></td>
                 <td>
               <a href="viewteamdashboard/<?=$team->team_id?>" class="btn btn-primary btn-block signout-btn">View</a>
                </td>
			      </tr>
                
         @endforeach
         
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
