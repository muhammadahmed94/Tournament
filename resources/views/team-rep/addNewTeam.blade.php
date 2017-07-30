
  @include('team-rep/header')
  @include('team-rep/sidebar')
    <form class=" " action="addNewTeamInfo" method="post">
    <div class="container">
        <div class="col-md-2">
        </div>
      
       {{ csrf_field() }}
        <div class="col-md-10">

           <h1 style="text-align: center; margin-top: 70px;">New Team </h1> 

           <div class="input-box-items">
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Name</label>
                      <input class="form-control" id="Team_RepName" name="Team_RepName">
                      </input>
                    </div>
                </div>  
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Phone#1</label>
                      <input class="form-control" id="Team_Phone#1" name="Team_Phone#1">
                      </input>
                    </div>
               </div>   
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Email</label>
                     <input class="form-control" id="Team_Email" name="Team_Email" required>
                      </input>
                    </div>
               </div>     
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Phone#2</label>
                      <input class="form-control" id="Team Rep. Phone#2" name="Team_Phone#2">
                      </input>
                    </div>
               </div>
                <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Tournament Name</label>
                      <select class="form-control" id="Tournament_Name" name ="Tournament_Name">
                        @foreach ($tournaments as $tournament )
                        <option value="{{ $tournament->tournament_id }}">{{ $tournament->title }}</option>
                        @endforeach
                      </select>
                    </div>
               </div> 
                <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Divisions Name</label>
                      <select class="form-control" id="Divisions_Name" name ="Divisions_Name">
                    
                        <option> Select</option>
                    
                      </select>
                    </div>
               </div>
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Name</label>
                      <input class="form-control" id="Team_Name" name="Team_Name" required>
                      </input>
                    </div>
               </div>        
           </div>
          
           <div class="input-box-item">

               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Organization Name</label>
                      <input class="form-control" id="Organization_Name" name="Organization_Name">
                      </input>
                    </div>
               </div>  
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Billing Address</label>
                      <input class="form-control" id="Billing_Address" name="Billing_Address">
                      </input>
                    </div>
               </div>   
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Website URL</label>
                      <input class="form-control" id="Website_URL" name="Website_URL">
                      </input>
                    </div>
               </div>     
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">City</label>
                      <input class="form-control" id="City" name="City">
                      </input>
                    </div>
               </div>       
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">State</label>
                      <input class="form-control" id="State" name="State">
                      </input>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Zone</label>
                      <input class="form-control" id="Zone" name="Zone">
                      </input>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Country</label>
                      <input class="form-control" id="Country" name="Country">
                      </input>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Facebook</label>
                      <input class="form-control" id="Facebook" name="Facebook">
                      </input>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Instagram</label>
                      <input class="form-control" id="Instagram" name="Instagram">
                      </input>
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Twitter</label>
                      <input class="form-control" id="Twitter" name="Twitter">
                      </input>
                    </div>
               </div> 
               <center>
                   <button style="margin-bottom: 20px; width: 80%;" type="submit" class="btn btn-primary">Create</button>  
               </center>
                </form> 
           </div>
        </div>
        
        <div class="col-md-2">
            
        </div>
    </div>
</form>
  <footer>
  </footer> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $("#Tournament_Name").click(function(){
        var tournamentId=$("#Tournament_Name").val();
        var targetUrl="/getDivisions/"+tournamentId;
        
       $.ajax({
            type:'get',
            url:targetUrl,
             headers: {
            'X-CSRF-TOKEN':"{{ csrf_token() }}"},
            data:{"tournament":tournamentId},
            cache:false,
            contentType: false,
            processData: false,
            async: false,
            success:function(data){
                var dataParsed=JSON.parse(data);
                var divisions=dataParsed.divisions;
                console.log(JSON.stringify(divisions))
                if(!!divisions && divisions.length>0){
                var htmlString="";                    
                    divisions.map(function(obj){
                        htmlString+="<option value="+obj.division_id+">"+obj.division_title+"</option>";
                    })
                        $("#Divisions_Name").html(htmlString);
                    
                }else{
                }
            },
            error: function(data){
                console.log("error");
            }
        });
    
    });
</script>
    
</body>
</html>