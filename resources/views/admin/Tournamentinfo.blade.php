    @include('team-rep/header')
    @include('team-rep/sidebar')
    <div class="container eventInfoClass">
        <h3>Name of the Event & Registered Team</h3>
        <div class="team_reg">
            <div class="col-md-8">
                <center>
                    <p style="margin: 0px; font-size: 20px; padding-top: 6px;">Event description and general information</p>
                    <a href="#">CCM WORLD INVITE - CHICAGO</a>
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
        <h3 style="margin-top: 50px; float: left;">Team Registration check list</h3>
         <table class="table table-bordered">
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
              <tr>
              @if(!$teamdata[0]->Deposit or null)
                <td><img class="edit" src="/images/green.png"></td>
              @else
             <td><img class="edit" src="/images/red.png"></td>
              @endif
                 @if(!$teamdata[0]->Payment_status or null)
                <td><img class="edit" src="/images/green.png"></td>
              @else
             <td><img class="edit" src="/images/red.png"></td>
              @endif
              @if(!$teamdata[0]->Hotel_selector or null)
                <td><img class="edit" src="/images/green.png"></td>
              @else
             <td><img class="edit" src="/images/red.png"></td>
              @endif
                 @if(!$teamdata[0]->Hotel_reservation or null)
                <td><img class="edit" src="/images/green.png"></td>
              @else
             <td><img class="edit" src="/images/red.png"></td>
              @endif
                 @if(!$teamdata[0]->Certified_roster or null)
                <td><img class="edit" src="/images/green.png"></td>
              @else
             <td><img class="edit" src="/images/red.png"></td>
              @endif
                 @if(!$teamdata[0]->Travel_permit or null)
                <td><img class="edit" src="/images/green.png"></td>
              @else
             <td><img class="edit" src="/images/red.png"></td>
              @endif
                 @if(!$teamdata[0]->Program_book_roster or null)
                <td><img class="edit" src="/images/green.png"></td>
              @else
             <td><img class="edit" src="/images/red.png"></td>
              @endif
              </tr>
            </tbody>
          </table>
          <h3 style="margin-top: 20px; float: left; width: 100%;">Registration Information</h3>
          <div class="reginfo_top">
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info">
                            <h3 style="padding: 10px 0px 0px 15px;">Deposit made</h3>
                            <p style="padding: 10px 0px 10px 15px;">{{ $teamdata[0]->Deposit or null }} Deposite made on {{ $teamdata[0]->Date or null }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info_diff">
                            <h3 style="padding: 10px 0px 0px 15px;">Certified Roster</h3>
                            <p style="padding: 10px 0px 10px 15px;">* Roster info missing <label class="btn btn-primary upload" for="my-file-selectora">
    <input id="my-file-selectora" type="file" style="display:none" 
    onchange="$('#upload-file-infoa').html(this.files[0].name)">
    Click here to upload
</label>
<span class='label label-info' id="upload-file-infoa"></span></p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="reg_info_diff">
                            <h3 style="padding: 10px 0px 0px 15px;">Payment Status</h3>
                            <p style="padding: 10px 0px 10px 15px;">* Balance due: {{$teamdata[0]->Payment_status}} <button style="background-color: #9F49AB; border: 1px solid #9F49AB" type="button" class="btn btn-danger upload">Pay Now</button></p>
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

                        </div>
                    </div>
                </div>
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
                  <p style="padding: 10px 0px 10px 15px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
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