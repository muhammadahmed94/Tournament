 
      @include('team-rep/header')
      @include('team-rep/sidebar')
        <div class="container">
                
          <div class="container eventInfoClass">
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
       @foreach($tournaments as $tournament)
            <tr>
                <td><a href="">{{$tournament->tournament_date}}</a></td>
                <td><a href="{{ url('/Event') }}">{{$tournament->tournament_name}}</a></td>
                <td><a href="{{ url('/Event') }}">{{$tournament->team_name}}</a></td>
                
                <td>
                <a href="">Incomplete</a>
                </td>

                 <td>
                 <a href="{{ url('/Singleteam')}}">
                <img class="edit teamstatusclass" src="images/RedDot.png" title="edit" alt="edit">
                </a>
                <!--<a href="#">
                <img class="delete" src="images/cancel.png"   title="delete" alt="delete">-->
                </a>
                </a>
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
