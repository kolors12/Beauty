<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Vendors View</title>
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
                                <i class="lnr-database icon-gradient bg-night-fade"></i>
                                </div>
                                <div>Vendors
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>            
                  
                    <h5 ><p class="text-success col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message1'); ?></p></h5>
                    <h5 ><p class="text-info col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message2'); ?></p></h5>
                    <h5 ><p class="text-danger col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message3'); ?></p></h5>
                    <!-- <div class="d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-md-3 p-0 mb-3">
                            <a href="<?php echo base_url('users/add_users');?>">
							<button type="button" class="btn-shadow dropdown-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-plus fa-w-20"></i>
                                </span>
                                Add Users
                            </button><a/>
                        </div>

                    </div> -->
                  
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav"><li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                <span>View Vendors</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>Add Vendor</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                           
                       <div class="tabs-animation">
                        
                       <div class="card mb-3">
                           
                            <div class="card-body">
                                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                        <thead>
                                        <tr>
                                        <th>S.No</th>
                                        <th>City Name</th>
                                        <th>Vendor Name</th>
                                        <th>Vendor Location</th>
                                        <th>Mobile No</th>
                                        <th>Email_id</th>
										<th>Vendor Details</th>
                                        <th>Status</th>
                                        <th>Actions</th> 
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        if(!empty($vendors)){	
                                        $i = 0;
                                        foreach ($vendors as $row) {
                                        ++$i;
										?>	
                                        <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $row['city_name']?></td>
                                        <td><?php echo $row['name']?></td>
                                        <td><?php echo $row['location']?></td>
										
                                        <td><?php echo $row['mobile_no']?></td>
										<td><?php echo $row['email_id']?></td>
										<td><a href="<?php echo base_url('vendors/view_vendor_details');?>/<?php echo $row['vendor_id']?>"><button type="button" class="btn-shadow dropdown-toggle btn btn-info">Vendor Details</button><a></td>
                                        <!--td><button class="mb-2 mr-2 btn-pill btn btn-gradient-primary btn-sm"><?php // //$row['admin_type']?></button></td>
                                        <td><img src="<?php// echo base_url(); ?><?php //echo $row['user_image']?>" data-toggle="tooltip" data-placement="top" title="Avatar Name" height="50" width="50" alt="Avatar" class="w35 h35 rounded"></td-->
                                        <td scope="row">
                                        <?php if($row['status'] == "1")
                                        { ?>
                                        <a  Onclick="return Inactive();" href="<?php echo base_url(); ?>vendors/vendor_status/<?php echo $row['vendor_id'].'/0'?>" data-toggle="tooltip" title="Inactive" class="btn btn-sm btn-danger changestatus">
                                        <span class="mb-2    badge-danger"> Inactive</span></a>
                                        <?php  }
                                        else
                                        { ?>
                                       <a  Onclick="return Active();" href="<?php echo base_url(); ?>vendors/vendor_status/<?php echo $row['vendor_id'].'/1'?>" data-toggle="tooltip" title="Active" class="btn btn-sm btn-success changestatus">
                                        <span class="mb-2  badge-success">Active</span></a>
                                        <?php  }
                                        ?>
                                        </td>
                                      
                                        <td>
                                        <a href="<?php echo base_url(); ?>users/edit_user/<?php echo $row['admin_id'];?>"><button type="button" class="btn btn-gradient-warning btn-sm " data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="pe-7s-trash pe-7s-link"></i></button></a>
                                        
                                        <a Onclick="return ConfirmDelete();" href="<?php echo base_url(); ?>vendors/delete_vendor/<?php echo $row['vendor_id'];?>"><button type="button" class="btn btn-info btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="pe-7s-trash btn-icon-wrapper"></i></button></a>
                                        
                                        </td>
                                        <?php  $i++; } }else{?>
                                        <tr>
                                        <td colspan="5" style="text-align:center;color:red;">No Sets Found</td>
                                        </tr>
                                        <?php } ?>
                                    </tr>
                                   
                                   
                                </tbody>
                                   
                               </table>
                            </div>
                        </div>
                       
                     
                    </div>
                        </div>
                        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                   
                                 <div class="main-card mb-3 card">
								<div class="card-body">
                           
								<form id="signupForm" class="col-md-10 mx-auto" method="post" action="<?php echo base_url('vendors/insert_vendor');?>" enctype="multipart/form-data">
									
								<div class="row">
								
								
								<div class="col-md-6">
									<div class="position-relative form-group">
										<label for="exampleSelect" class="">City</label>
										<select name="city_id" id="exampleSelect" class="form-control">
										<option value="">Please City</option>
										<option value="0">Admin</option>
										<option value="1">Vender</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="vendor_name">Vendor Name</label>
										<div>
										<input type="text" class="form-control" id="vendor_name" name="vendor_name" placeholder=" Please Enter Vendor Name"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="location">location</label>
										<div>
										<input type="text" class="form-control" id="location" name="location" placeholder="Last location"></div>
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
									<div class="form-group">
										<label for="latitude">latitude</label>
										<div>
										<input type="text" class="form-control" id="latitude" name="latitude" placeholder=" Please Enter latitude"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="longitude">Longitude</label>
										<div>
								   <input type="text" class="form-control" id="longitude" name="longitude" placeholder=" Please Enter longitude Number"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="mobile">phone</label>
										<div>
										<input type="text" class="form-control" id="phone" name="phone" placeholder=" Please Enter Phone Number"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="mobile">Mobile</label>
										<div>
										<input type="text" class="form-control" id="mobile" name="mobile" placeholder=" Please Enter Mobile Number"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Email</label>
										<div>
										<input type="text" class="form-control" id="email" name="email" placeholder=" Please Enter Email id"></div>
									</div>
								</div>
			
								<div class="col-md-6">
										<div class="position-relative form-group">
										<label for="exampleSelect" class="">Categories</label>
										<select name="categories" id="exampleSelect" class="form-control">
										<option value="">Please Categories</option>
										<option value="Admin">Admin</option>
										<option value="Vender">Vender</option>
										</select>
									</div>
								</div>
								
								
								<div class="col-md-6">
									<div class="form-group">
										<label for="address">About vendor</label>
										<div>
										 <textarea rows="1" class="form-control autosize-input" id="about_vendor" name="about_vendor" style="max-height: 200px; height: 35px;"></textarea>
										</div>
									</div>
								</div>
								
								
								<div class="col-md-6">
									<div class="form-group">
									<label for="user_image">photos</label>
									<div>
									<input type="file" class="form-control" id="photos" name="photos" placeholder="Please Your State">
										</div>
									</div>
								</div>
							
								
								   
								<div class="col-md-6">
									<div class="form-group">
										<button type="submit" class="ladda-button mb-2 mr-2 btn btn-info" name="signup" value="Sign up">Submit</button>
									</div>
								</div>
									
									
								</div>
							</form>
								 </div>
								</div>
                                </div>
                               </div>
                              </div>
                             </div>
                            </div>
        
                        
                        </div>
                    </div>
                   
                </div>
               
                <?php $this->load->view('footer');?>
            </div>
    </div>
</div>
<script>
    
function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
	function Inactive()
    {
      var x = confirm("Are you sure you want to Inactive?");
      if (x)
          return true;
      else
        return false;
    }
	function Active()
    {
      var x = confirm("Are you sure you want to Active?");
      if (x)
          return true;
      else
        return false;
    }
</script>
</script>
<?php $this->load->view('right_top');?>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts-main.87c0748b313a1dda75f5.js"></script></body></html>
