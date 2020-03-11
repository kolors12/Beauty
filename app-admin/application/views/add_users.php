<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Add Users</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
<meta name="description" content="This is an example dashboard created using build-in elements and components."><!-- Disable tap highlight on IE -->
<meta name="msapplication-tap-highlight" content="no"><link href="<?php echo base_url();?>assets/css/.-main.87c0748b313a1dda75f5.css" rel="stylesheet"></head><body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <?php $this->load->view('header');?>
        <div class="app-header__menu">
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>    
       
    </div>    
    
        <?php $this->load->view('color_change_menu');?>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    
            <?php $this->load->view('side_menu');?>
              
            </div>    
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                <i class="lnr-user icon-gradient bg-ripe-malin"></i>
                                    </i>
                                </div>
                                <div>Add User
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>            
                  
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-md-3 p-0 mb-3">
                            <a href="<?php echo base_url('users/users_view');?>"><button type="button" class="btn-shadow dropdown-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <b><i class="ion-android-arrow-back"></i></b>
                                </span>
                                Back
                            </button><a/>
                        </div>
                        <!-- <div class="col-12 col-md-3 p-0 mb-3">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div> -->
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                           
                            <!--form id="signupForm" class="col-md-10 mx-auto" method="post" action="<?php //echo base_url('users/insert_user');?>" enctype="multipart/form-data">
                                
        
                                <div class="form-group">
                                    <label for="lastname">Full Name</label>
                                    <div>
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Please Enter Your Name"></div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email"></div>
                                </div>
        
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"></div>
        
                                <div class="form-group">
                                    <label for="confirm_password">Confirm password</label>
                                    <div>
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password"></div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <div>
                                        <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Please Your Mobile Number"></div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Please Enter Your Address</label>
                                    <div>
                                       
                                        <textarea rows="1" class="form-control autosize-input" id="address" name="address" style="max-height: 200px; height: 35px;"></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <div>
                                        <input type="text" class="form-control" id="dob" name="dob" data-toggle="datepicker" placeholder="Please Enter Your Date of Birth"></div>
                                </div>
                                <div class="form-group">
                                <label for="user_image">User Image</label>
                                <div>
                                    <input type="file" class="form-control" id="user_image" name="user_image" placeholder="Please Your Mobile Number"></div>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleSelect" class="">Admin Type</label>
                                    <select name="admintype" id="exampleSelect" class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Vender">Vender</option>
                                    </select>
                                </div>
                               
        
                                <div class="form-group">
                                    <button type="submit" class="ladda-button mb-2 mr-2 btn btn-info" name="signup" value="Sign up">Submit</button>
                                </div>
                            </form-->
							<div class="row">
                                <div class="col-md-12">
                                   
                               
								
                           
								<form id="signupForm" class="col-md-10 mx-auto" method="post" action="<?php echo base_url('users/insert_user');?>" enctype="multipart/form-data">
									
								<div class="row">
								
								
								<div class="col-md-6">
									<div class="position-relative form-group">
										<label for="exampleSelect" class="">City</label>
										<select name="city_id" id="exampleSelect" class="form-control">
										<option value="">Please City</option>
										<?php  foreach ($city as $row) {?>
										<option value="<?php echo $row['city_id']?>"><?php echo $row['city_name']?></option>
										<?php }?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="vendor_name">User Name</label>
										<div>
										<input type="text" class="form-control" id="name" name="name" placeholder=" Please Enter User Name"></div>
									</div>
                                </div>
                               <div class="col-md-6">
									<div class="form-group">
										<label for="mobile">User Mobile Number</label>
										<div>
										<input type="number" class="form-control" id="mobile" name="mobile" placeholder=" Please Enter User Mobile Number"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email"> User Email</label>
										<div>
										<input type="text" class="form-control" id="email" name="email" placeholder=" Please Enter User Email id"></div>
									</div>
                                </div>
                                <div class="col-md-6">
									<div class="form-group">
										<label for="password"> User Password</label>
										<div>
										<input type="password" class="form-control" id="password" name="password" placeholder=" Please Enter User Password"></div>
									</div>
                                </div>
                                <div class="col-md-6">
									<div class="form-group">
										<label for="confirm_password">Confirm password</label>
										<div>
										<input type="password" class="form-control" id="confirm_password" name="confirm_password"  placeholder=" Please Enter Confirm password"></div>
									</div>
                                </div>
                                <!-- <div class="col-md-6">
									<div class="form-group">
										<label for="email">Email</label>
										<div>
										<input type="text" class="form-control" id="email" name="email" placeholder=" Please Enter Email id"></div>
									</div>
                                </div> -->
                                <!-- <div class="col-md-6">
									<div class="form-group">
										<label for="email">Date of Birth</label>
										<div>
										<input type="text" class="form-control" id="dob" name="dob" data-toggle="datepicker" placeholder="Please Enter Your Date of Birth"></div>
									</div>
                                </div> -->
                                <div class="col-md-6">
										<div class="position-relative form-group">
										<label for="exampleSelect" class="">Categories</label>
										<select name="categories" id="exampleSelect" class="form-control">
										<option value="">Please Categories</option>
											<?php  foreach ($category as $row) {?>
										<option value="<?php echo $row ['id'];?>"><?php echo $row ['name'];?></option>
											<?php }?>
										</select>
									</div>
                                </div>
                                <div class="col-md-6">
									<div class="form-group">
									<label for="user_image">User Image</label>
									<div>
									<input type="file" class="form-control" id="photos" name="photos" placeholder="Please Your State">
										</div>
									</div>
                                </div>
                                <div class="col-md-6">
									<div class="form-group">
										<label for="address">Address</label>
										<div>
										 <textarea rows="1" class="form-control autosize-input" id="address" name="address" style="max-height: 200px; height: 35px;"></textarea>
										</div>
									</div>
                                </div>
                                <div class="col-md-6">
										<div class="position-relative form-group">
										<label for="exampleSelect" class="">User Type</label>
										<select  name="admin_type" id="admin_type"  class="form-control">
										<option value="">Please Select User</option>
										<option value="Vender" >Vender</option>
										<option value="Admin">Admin</option>
										
										</select>
									</div>
                                </div>
                               
                                <div class="jobdeatils col-md-12">  
                                <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="location">location</label>
										<input type="text" class="form-control" id="location" name="location" placeholder="Last location" required="required">
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
										<label for="latitude">latitude</label>
										
										<input type="number" class="form-control" id="latitude" name="latitude" placeholder=" Please Enter latitude" required="required">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="longitude">Longitude</label>
										
								   <input type="number" class="form-control" id="longitude" name="longitude" placeholder=" Please Enter longitude Number" required="required"></div>
									
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
										<label for="address">About vendor</label>
										
										 <textarea rows="1" class="form-control autosize-input" id="about_vendor" name="about_vendor" style="max-height: 200px; height: 35px;" required="required"></textarea>
										
									</div>
								</div>
								
								   
                                </div>
                                
                            </div>    

                           
								
									
                                </div>
                                <div class="col-md-6">
									<div class="form-group">
										<button type="submit" class="ladda-button mb-2 mr-2 btn btn-info" name="signup" value="Sign up" data-style="expand-right"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span></button>
									</div>
                                    </div>
							</form>
							
							
                                </div>
                               </div>
                        </div>
                    </div>
                </div>
               
                <?php $this->load->view('footer');?>
            </div>
    </div>
</div>
<?php $this->load->view('right_top');?>

<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts-main.87c0748b313a1dda75f5.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
  $('.jobdeatils').hide();
  $('#admin_type').on('change', function(){
    if($("#admin_type option:selected").val()=='Vender'){
      $('.jobdeatils').show();
      $("#location").attr("required", "true");
      $("#latitude").attr("required", "true");
      $("#longitude").attr("required", "true");
      $("#about_vendor").attr("required", "true");
     

    }else{
      $('.jobdeatils').hide();
	   $("#country").removeAttr('required');
      $("#salary").removeAttr('required');
      $("#city").removeAttr('required');
      $("#org").removeAttr('required');
      $("#designation").removeAttr('required');
    }

});
</script>
</body>
</html>
