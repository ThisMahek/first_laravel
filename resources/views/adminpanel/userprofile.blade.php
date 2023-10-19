@extends('adminpanel.layouts.main')
@section('main-container')
<div class="main-content">
   <section class="section">
      <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-block" style="margin-left:auto;margin-right:auto;margin-bottom:5px;margin-top:15px;">
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="card">
                              <div class="card-header">
                                 <h5>Change Password</h5>
                              </div>
                              <div class="card-body">
                                 <div class="form-group form-default mt-2">
                                 <label class="float-label">Old Password</label>
                                    <input type="text" name="haddress" class="form-control" >
                                    <span class="form-bar"></span>
                                  
                                 </div>
                                 <div class="form-group form-default mt-2">
                                 <label class="float-label">New Password</label>
                                    <input type="email" name="hemail" class="form-control">
                                    <span class="form-bar"></span>
                                  
                                 </div>
                                 <div class="form-group form-default mt-2">
                                 <label class="float-label">Confirm Password</label>
                                    <input type="text" name="hmobile" class="form-control">
                                    <span class="form-bar"></span>
                               
                                 </div>
                                 <center>
                                    <div class="form-group form-default mt-2">
                                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                                    <button type="reset" class="btn btn-danger">Cancel</button>
                                    </div>
                                    </center>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="card">
                              <div class="card-header">
                                 <h5>Profile Details</h5>
                              </div>
                              <div class="card-body">
                                 <div class="form-group form-default mt-2">
                                 <label class="float-label">Address</label>
                                    <input type="text" name="daddress" class="form-control" value="Rath Road Kanpur">
                                    <span class="form-bar"></span>
                                
                                 </div>
                                 <div class="form-group form-default mt-2">
                                 <label class="float-label">Email</label>
                                    <input type="email" name="demail" class="form-control" value="xyz@gmail.com">
                                    <span class="form-bar"></span>
                                
                                 </div>
                                 <div class="form-group form-default mt-2">
                                 <label class="float-label">Mobile</label>
                                    <input type="text" name="dmobile" class="form-control mob_no" data-mask="9999-999-999" value="8969768998">
                                    <span class="form-bar"></span>
                                  
                                 </div>
                                 <center>
                                    <div class="form-group form-default mt-2">
                                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                                    <button type="reset" class="btn btn-danger">Cancel</button>
                                    </div>
                                    </center>
                              </div>
                           </div>
                        </div>
                     </div>
                 
                 
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection