@include('team-rep/header')
@include('team-rep/sidebar')
   @foreach ($tournaments as $tournament )
    <div class="container eventInfoClass">
        <h3>Name of the Event & Registered Team</h3>
        <div class="team_reg">
            <div class="col-md-8">
                <center>
                    <p style="margin: 0px; font-size: 20px; padding-top: 6px;">Event description and general information</p>
                    <a href="#"> {{ $tournament->title  }} - CHICAGO</a>
                </center>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="reg_status"> 
                        <center>
                            <p style="margin: 0px; font-size: 20px; color: white; padding-top: 6px;">Registration Status</p>
                            <p style="color: white;">INCOMPLETE</p>
                        </center>
                </div>
                </div>
            </div>
        </div>
        @endforeach
        <h3 style="margin-top: 50px; float: left;">Team Registration check list</h3>
         <table class="table table-bordered tableClass">
            <thead>
                <tr>
                    <th>Deposite<br>Made</th>
                    <th>Payment<br>Status</th>
                    <th>Hotel<br>Selector</th>
                    <th>Hotel<br>Reservation</th>
                    <th>Certified<br>Roster</th>
                    <th>Travel<br>Permit</th>
                    <th>Program Book<br>Roster</th>
                </tr>
            </thead>
          
            <tbody>
            @foreach ($teamdata as $data )
              <tr>
              @if($data->Deposit != null){
                <td><img class="edit" src="/images/green.png"></td>
                }
                @else{
                    <td><img class="edit" src="/images/red.png"></td>
                }
            @endif

                @if($data->Payment_status!=null){
                <td><img class="edit" src="/images/green.png"></td>
                }
                @else{
                    <td><img class="edit" src="/images/red.png"></td>
                }
               @endif  
                <td> N/A </td>
                 @if ($data->Hotel_selector!=null or N/A){
                <td><img class="edit" src="/images/green.png"></td>
                }
                @else{
                    <td><img class="edit" src="/images/red.png"></td>
                }
               @endif
                @if ($data->Certified_roster != null ){
                <td><img class="edit" src="/images/green.png"></td>
                }
                @else{
                    <td><img class="edit" src="/images/red.png"></td>
                }
               @endif
                 @if($data->Travel_permit != null){
                <td><img class="edit" src="/images/green.png"></td>
                }
                @else{
                    <td><img class="edit" src="/images/red.png"></td>
                }
               @endif
                 @if($data->Program_book_roster != null){
                <td><img class="edit" src="/images/green.png"></td>
                }
                @else{
                    <td><img class="edit" src="/images/red.png"></td>
                }
               @endif
              </tr>
              @endforeach
            </tbody>

          </table>
          <h3 style="margin-top: 20px; float: left; width: 100%;">Registration Information</h3>
         <form class="form-horizontal " action="{{ url('/addroster') }}" method="Post" enctype="multipart/form-data">

          <div class="reginfo_top">
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info">
                            <h3 style="padding: 10px 0px 0px 15px;">Deposit made</h3>chic Deposite made on 1/7/2017</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info_diff">
                            <h3 style="padding: 10px 0px 0px 15px;">Certified Roster</h3>
                            <p style="padding: 10px 0px 10px 15px;" name="certified_roster">* Roster info missing <label class="btn btn-primary upload" for="my-file-selector">
    <input id="my-file-selector" type="file" style="display:none" 
    onchange="$('#upload-file-info').html(this.files[0].name)">
    Click here to upload
</label>
<span class='label label-info' id="upload-file-info"></span></p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info_diff">
                            <h3 style="padding: 10px 0px 0px 15px;">Payment Status</h3>
                            <p style="padding: 10px 0px 10px 15px;">* Balance due: $800 <button style="background-color: #9F49AB; border: 1px solid #9F49AB" type="button" class="btn btn-danger upload">Pay Now</button></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info">
                            <h3 style="padding: 10px 0px 0px 15px;">Travel Permit</h3>
                            <p style="padding: 10px 0px 10px 15px;">N/A</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info">
                            <h3 style="padding: 10px 0px 0px 15px;">Hotel Selector</h3>
                            <p style="padding: 10px 0px 10px 15px;">N/A</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info_diff">
                            <h3 style="padding: 10px 0px 0px 15px;">Program Book Roster</h3>
                            <p style="padding: 10px 0px 10px 15px;">* Roster info missing <label class="btn btn-primary upload" for="my-file-selector">
    <input id="my-file-selector" type="file" style="display:none" 
    onchange="$('#upload-file-info').html(this.files[0].name)">
    Click here to upload
</label>
<span class='label label-info' id="upload-file-info"></span></p>
{{ csrf_field() }}

                        </div>
                        <input type="submit" text="submit">
                    </div>
                </div>
                </form>
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info">
                            <h3 style="padding: 10px 0px 0px 15px;">Hotel Reservation</h3>
                            <p style="padding: 10px 0px 10px 15px;">N/A</p>
                        </div>
                    </div>
                </div>

                
          </div>
          
          <div class="col-md-2">
                  
                </div>
                <div class="col-md-8">
                  <div class="payment_info">
                  <h3 style="padding: 10px 0px 0px 15px;">Overall Payment Information</h3>
                  <p style="padding: 10px 0px 10px 15px;"></p>
                </div>

                </div>
                 
                <div class="col-md-2">
                  
                </div>

    </div>
    <footer>
    </footer>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    
</body>
</html>