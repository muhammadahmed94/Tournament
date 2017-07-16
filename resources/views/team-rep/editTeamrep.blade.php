@include('team-rep/header')
@include('team-rep/sidebar')
<style type="text/css">
  
  .form-group {

    padding: 15px;
}
</style>
<form class="form-horizontal " action="{{ url('/updateeditaccount') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="col-lg-10 col-md-9 col-sm-9 eventInfoClass">
  <div class="row">
    <div class="">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-10">
          
           <h1 style="text-align: center; margin-top: 70px;">Team Representative Information</h1> 
           <div class="input-box-items col-sm-12">
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Name</label>
                      <input type="text" name="name" class="form-control" id="sel1" required> 
                    </div>
               </div>  
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Phone#1</label>
                      <input type="text" pattern="\+*\d+\-*\d+" name="phone1" class="form-control" id="sel1"> 
                      
                    </div>
               </div>   
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Email</label>
                      <input type="email" name="email" class="form-control" id="sel1" required>
                    </div>
               </div>     
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Team Rep. Phone#2</label>
                      <input type="text" name="phone2" class="form-control" id="sel1">
                    </div>
               </div>        
           </div>
           
           <div class="input-box-item col-sm-12">

               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Organization Name</label>
                      <input type="text" name="org_name" class="form-control" id="sel1">
                    </div>
               </div>  
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Billing Address</label>
                      <input type="text" name="bill_address" class="form-control" id="sel1">
                    </div>
               </div>   
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Website URL</label>
                      <input type="text" name="web_url" class="form-control" id="sel1" >
                    </div>
               </div>     
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">City</label>
                    <input type="text" name="city" class="form-control" id="sel1">
                    </div>
               </div>       
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">State</label>
                      <input type="text" name="state" class="form-control" id="sel1">
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Zone</label>
                      <input type="text" name="zone" class="form-control" id="sel1">
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Country</label>
                     <input type="text" name="country" class="form-control" id="sel1">
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Facebbok</label>
                      <input type="text" name="facebook" class="form-control" id="sel1">
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Instagram</label>
                      <input type="text" name="instagram" class="form-control" id="sel1">
                    </div>
               </div>    
               <div class="col-md-6">
                   <div class="form-group">
                      <label for="sel1">Twitter</label>
                      <input type="text" name="twitter" class="form-control" id="sel1">
                    </div>
               </div> 
               <center>
                  <input type="submit" style="margin-bottom: 20px; width: 80%;" type="button" class="btn btn-primary" name="Update"> 
               </center>
                 
           </div>
        </div>


    </div>
</div>
</div>
</form>
</footer> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>