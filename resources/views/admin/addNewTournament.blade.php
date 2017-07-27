@extends('admin/adminHeader')

@section('bodyContentAdmin')
<style>
        .mdl-textfield {
    padding: 24px 0;
    
    }
    .navbar.navbar-inverse {
      background-color: #222;
    }
    .tournament-info-title{
      background-color: #e0dede;
      width: 100%;
      float: left;
      height: 50px;
    }
    .tournament-info{
      border: 2px solid gray;
      box-shadow: 10px 10px 5px #888888;
      float: left;
      width: 100%;
      margin-bottom: 30px;
    }
    h4{
      padding: 10px;
      margin-top: 0px;
    }
    div .mdl-textfield__label:after {
    background: black;
  }
  .mdl-textfield__label{
    color: black;
    font-weight: bold;
  }
  .form-group {
    padding-bottom: 7px;
    margin: 12px 0 0 0;
  }
  label{
    color: black !important;
    font-weight: bold !important;
  }
  .dtp table.dtp-picker-days tr > td > a.selected {
    background: #FF8333;
    color: #fff;
   }
  i{
    color: white;
  }
  .dtp > .dtp-content > .dtp-date-view > header.dtp-header {
      background: #FF8333;
  }
  .dtp div.dtp-date, .dtp div.dtp-time {
      background: #FF8333;
  }
  .mdl-button--raised{
    background-color: #FF8333 !important;
  }
  .mdl-button--fab.mdl-button--colored {
    background: #E63956;
    color: rgb(255,255,255);
  }
  .btn-group-sm>.btn, .btn-sm {
    margin-right: 10px;
  }
  @media (min-width: 768px){
  .modal-dialog {
      width: 80% !important;
      margin: 30px auto;
  }
  @media all and (max-width: 992px) and (min-width: 320px) {
    .mdl-textfield {
      width: 100%;
  }
  
    </style>
  
  <div class="container">
    <h3>Tournament Info</h3>
      <form action=" {{ url('/addNewTournamentWithPost') }}" method="Post" accept-charset="utf-8">
      {{ csrf_field() }}
        <div class="tournament-info">
          <div class="tournament-info-title">
            <h4>Team Info</h4>
          </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="form-group">
                <label for="usr">Title</label>
                <input type="text" class="form-control" name="Title" id="Title" required>
              </div>
              <div class="form-group">
                <label for="usr">Description</label>
                <input type="text" class="form-control" name="Description" id="Description">
              </div>
              <div class="form-group">
                <label for="usr">Location</label>
                <input type="text" class="form-control" name="Location" id="usr">
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea style="height: 111px;" class="form-control" rows="4" name="Comment" id="comment"></textarea>
              </div>
                <div class="col-md-5 col-sm-12">
                  <div class="row">
                          <div class="form-group">
                      <label for="usr">Start Date</label>
                      <input id="date" type="text" class="form-control" name="Start_Date" id="usr">
                  </div>
                      </div>
                </div>
                <div class="col-md-2 col-sm-0">
                </div>
                <div class="col-md-5 col-sm-12">
                  <div class="row">
                          <div class="form-group">
                      <label for="usr">End Date</label>
                      <input id="date1" type="text" class="form-control" name="End_Date" id="usr">
                  </div>
                      </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>  
        </div>
        <div style="width: 100%; float: left;">
          <button style="margin-bottom: 30px;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent add-div"><img style=" height: 18px; margin-top: -5px; margin-right: 7px;" src="images/add.png" />Add Division</button>
        </div>
        
        <div class="append-form">
          
        </div>
        <input type="submit" name="submit">
      </form>
      
  </div>
  <footer>
    
  </footer>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/ripples.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.min.js"></script>
        <script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script>
        <script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
        <script type="text/javascript" src="./js/bootstrap-material-datetimepicker.js"></script>
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <script src="js/custom.js"></script> 
        
    <script type="text/javascript">
    $(document).ready(function()
    {
      $('#date1').bootstrapMaterialDatePicker
      ({
        time: false,
        clearButton: true
      });
      $('#date').bootstrapMaterialDatePicker
      ({
        time: false,
        clearButton: true
      });
      $.material.init()
    });
    </script>
    <script>
      
      
       var max_fields = 10; //maximum input boxes allowed
         var wrapper = $(".append-form"); //Fields wrapper
             //Add button ID

         var x = 1;

         $(document).on('click', '.add-div', function(e) {
              //initlal text box count 
            //on add input button click
         e.preventDefault();
                if (x < max_fields) { //max input box allowed
                    x++; //text box increment

                    $(wrapper).append(getDivHtml(x));
                    componentHandler.upgradeDom();

               }
          $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
                  e.preventDefault();
                  $(this).parents('div').eq(2).remove();
                  x--;
                }); 

              $('.clone-btn' + x).click(function(e){
            e.preventDefault();
            // var abv = $('#clone-btn' + x).data('num'); 
            // alert(abv);
            // $(".after-add").clone().appendTo(".clone-data");
             $('.after-add' + x).last().clone().appendTo('.clone-data' + x);
            
            
            });
              });
              function getDivHtml(x){
               
                return '<div class="after-add'+x+'"> <div class="tournament-info"> <div class="tournament-info-title"> <a href="" class="remove_field"><img style="height: 50px; padding: 10px; float: right;" src="images/cancel.png" alt=""> </a> </div><div class="col-md-2"></div><div class="col-md-4"> <div class="form-group"> <label for="usr">Division Title</label> <input type="text" class="form-control" name="Division_Title[]"id="usr"> </div><div class="col-md-5"> <div class="row"> <div class="form-group"> <label for="usr">Birth Year</label> <input type="text" class="form-control" name="Birth_Year[]" id="usr"> </div></div></div><div class="col-md-2"></div><div class="col-md-5"> <div class="row"> <div class="form-group"> <label for="usr">Boys/Girls</label> <input type="text" class="form-control" name="Boys/Girls[]" id="usr"> </div></div></div><div class="col-md-5"> <div class="row"> <div class="form-group"> <label for="usr">Limit / Division</label> <input type="text" class="form-control" name="Limit[]" id="usr"> </div></div></div><div class="col-md-2"></div><div class="col-md-5"> <div class="row"> <div class="form-group"> <label for="usr">Level</label> <input type="text" class="form-control" name="Level[]" id="usr"> </div></div></div></div><div class="col-md-4"> <div class="col-md-5"> <div class="row"> <div class="form-group"> <label for="usr">Entry Fee</label> <input type="text" class="form-control" name="Entry_Fee" id="usr"> </div></div></div><div class="col-md-2"></div><div class="col-md-5"> <div class="row"> <div class="form-group"> <label for="usr">Deposite</label> <input type="text" class="form-control" name="Deposite[]" id="usr"> </div></div></div><div class="col-md-5"> <div class="row"> <div class="form-group"> <label for="usr">Early Bid</label> <input type="text" class="form-control" name="Early_Bid[]" id="usr"> </div></div></div><div class="col-md-2"></div><div class="col-md-5"> <div class="row"> <div class="form-group"> <label for="usr">Early Bid Exp</label> <input type="text" class="form-control" name="Early_Bid_Exp[]" id="usr"> </div></div></div><div class="col-md-5"> <div class="row"> <div class="form-group"> <label for="usr">Multi Team</label> <input type="text" class="form-control" name="Multi_Team" id="usr"> </div></div></div><div class="col-md-2"></div><div class="col-md-5"> <div class="row"> <div class="form-group"> <label for="usr">Canadian</label> <input type="text" class="form-control" name="Canadian[]" id="usr"> </div></div></div><div class="col-md-5"> <div class="row"> <div class="form-group"> <label for="usr">Balanace Due</label> <input type="text" class="form-control" name="Balanace_Due[]" id="usr"> </div></div></div><div class="col-md-2"></div><div class="col-md-5"> <div class="row"> <div class="form-group"> <label for="usr">Balanace Due Date</label> <input type="text" class="form-control" name="Balanace_Due_Date[]" id="usr"> </div></div></div><div class="col-md-5"> <div class="row"> <div class="form-group"> <label for="usr">Balanace Team Disc</label> <input type="text" class="form-control" name="Balanace_Team_Disc[]" id="usr"> </div></div></div><div class="col-md-2"></div><div class="col-md-5"> <div class="row"> <div class="form-group"> <label for="usr">Balanace Canada</label> <input type="text" class="form-control" name="Balanace_Canada[]" id="usr"> </div></div></div></div><div class="col-md-2"></div></div><div style="width: 100%; float: left; margin-bottom: 30px;"> <button style="float: left;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent add-div" data-upgraded=",MaterialButton,MaterialRipple"><img style=" height: 18px; margin-top: -5px; margin-right: 7px;" src="images/add.png">Add Division<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span> </button> <button type="button" style="float: right;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent clone-btn'+x+'" data-upgraded=",MaterialButton,MaterialRipple"><img style=" height: 18px; margin-top: -5px; margin-right: 7px;" src="images/copy.png">Clone<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span> </button></div></div><div class="clone-data'+x+'"></div>'
              }

    </script>
@endsection