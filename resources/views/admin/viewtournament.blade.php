@extends('admin.adminHeader')

@section('bodyContentAdmin')
    <style>
      table {
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid Black;
  padding: 5px 15px;
  text-align: center;
}
tr :nth-child(3), tr :nth-child(4), tr :nth-child(5), tr :nth-child(6) {
  color: white; background-color: #9FD1B2;
}
tr :nth-child(7), tr :nth-child(8) {
  color: white; background-color: #81BCC7;
}
tr :nth-child(9), tr :nth-child(10) {
  color: white; background-color: #DADE78;
}
 ul.breadcrumb {
    padding: 8px 16px;
    list-style: none;
    background-color: #eee;
}
ul.breadcrumb li {display: inline;}
ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: ">\00a0";
}
ul.breadcrumb li a {color: #FF8333;}

.head{
    background-color: #337ab7;
    height: 30px;
}
.head-title li {
    float: left;
    list-style: none;
    padding-right: 10px;
    padding-left: 10px;
    margin-top: 5px;
    border-right: 2px solid white;
    vertical-align: middle;
    color: white;
}
.head-title :nth-child(1) {
    padding-left: 0px;
}
.head-title :last-child {
    border-right: none;
}  
    </style>   

<div class="container">
  <ul class="breadcrumb">
    <li><a href="#">Page1</a></li>
    <li><a href="#">Page2</a></li>
    <li><a href="#">Page3</a></li>
    <li>Page4</li>
  </ul>
  <h3>Chi Town Shuffle</h3>
  <div class="head hidden-sm hidden-xs">
    <ul class="head-title"> 
      <li>2009 AAA</li>
      <li>OPEn 14/20</li>
      <li>WAITLIST 0</li>
      <li>DROPPED3</li>
    </ul>
  </div>
  <table border="1" >
    <tr>
      <th colspan="2"></th>
      <th colspan="4" style="color: white; background-color: #9FD1B2;">PAYMENT STATUS</th>
      <th colspan="2" style="color: white; background-color: #81BCC7;">REGISTRATION STATUS</th>
      <th colspan="2" style="color: white; background-color: #DADE78;">CONTACT INFO</th>
    </tr>
    <tr>
      <th>ID</th>
      <th>TEAM</th>
      <th style="color: white; background-color: #9FD1B2;">BAL</th>
      <th style="color: white; background-color: #9FD1B2;">DEP</th>
      <th style="color: white; background-color: #9FD1B2;">FULL</th>
      <th style="color: white; background-color: #9FD1B2;">INS.</th>
      <th style="color: white; background-color: #81BCC7;">ACCEPT</th>
      <th style="color: white; background-color: #81BCC7;">INFORMATION</th>
      <th style="color: white; background-color: #DADE78;">COACH</th>
      <th style="color: white; background-color: #DADE78;">EMAIL</th>
    </tr>
    @foreach($tournaments as $tournament)
    <tr>
      <td>{{$tournament->team_id}}</td>
      <td><a href="../Singleteam/{{$tournament->team_id}}">{{$tournament->team_name}}</a></td>
      <td>$1400</td>
      <td>$400 CC</td>
      <td>$1000 CC</td>
      <td>852</td>
      <td>3/20</td>
      <td><a href="#"><img class="edit" src="../images/green.png"></a></td>
      <td>{{$tournament->team_rep}}</td>
      <td><button type="button" class="btn btn-primary">Email</button></td>
    </tr>
   @endforeach
  </table>

  <h3>Wait List</h3>
  <div class="head hidden-sm hidden-xs">
    <ul class="head-title"> 
      <li>2009 AAA</li>
      <li>OPEn 14/20</li>
      <li>WAITLIST 0</li>
      <li>DROPPED3</li>
    </ul>
  </div>
  <table border="1" >
    <tr>
      <th colspan="2"></th>
      <th colspan="4" style="color: white; background-color: #9FD1B2;">PAYMENT STATUS</th>
      <th colspan="2" style="color: white; background-color: #81BCC7;">REGISTRATION STATUS</th>
      <th colspan="2" style="color: white; background-color: #DADE78;">CONTACT INFO</th>
    </tr>
    <tr>
      <th>ID</th>
      <th>TEAM</th>
      <th style="color: white; background-color: #9FD1B2;">BAL</th>
      <th style="color: white; background-color: #9FD1B2;">DEP</th>
      <th style="color: white; background-color: #9FD1B2;">FULL</th>
      <th style="color: white; background-color: #9FD1B2;">INS.</th>
      <th style="color: white; background-color: #81BCC7;">ACCEPT</th>
      <th style="color: white; background-color: #81BCC7;">INFORMATION</th>
      <th style="color: white; background-color: #DADE78;">COACH</th>
      <th style="color: white; background-color: #DADE78;">EMAIL</th>
    </tr>
    <tr>
      <td>12</td>
      <td><a href="#">RED WINGS</a></td>
      <td>$1400</td>
      <td>$400 CC</td>
      <td>$1000 CC </td>
      <td>852</td>
      <td>3/20</td>
      <td><a href="#"><img class="edit" src="../images/green.png"></a></td>
      <td>DOE JOE</td>
      <td><button type="button" class="btn btn-primary">Email</button></td>
    </tr>
  </table>
  
</div>


            <thead>
                  
            </thead>

            
              <tbody>
                </table>
	</div>
	<footer>
	</footer>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>



@endsection