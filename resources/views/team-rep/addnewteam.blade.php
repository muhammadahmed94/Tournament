
  @include('team-rep/header')
  @include('team-rep/sidebar')
    <form class=" " action="addNewTeamInfo" method="post">
    <div class="container">
        <div class="col-md-2">
        </div>
      
       {{ csrf_field() }}
        <div class="col-md-8">

           <h1 style="text-align: center; margin-top: 70px;">Team Representative Information</h1> 

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
                     <input class="form-control" id="Team_Email" name="Team_Email">
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
                        <option value="{{ $tournament->tournament_id }}">{{ $tournament->tournament_name }}</option>
                        @endforeach
                      </select>
                    </div>
               </div> 
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Name</label>
                      <input class="form-control" id="Team_Name" name="Team_Name">
                      </input>
                    </div>
               </div>        
           </div>
           <h3 style="float: left; margin-top: 50px;">Team Representative Information</h3>
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
</body>
</html>