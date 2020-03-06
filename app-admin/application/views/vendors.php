<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Users View</title>
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
                            <a href="<?php echo base_url('users/add_users');?>"><button type="button" class="btn-shadow dropdown-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-plus fa-w-20"></i>
                                </span>
                                Add Users
                            </button><a/>
                        </div>

                    </div> -->
                    <!-- <div class="tabs-animation">
                        
                       
                       
                        <div class="card mb-3">
                           
                            <div class="card-body">
                                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                        <thead>
                                        <tr>
                                        <th>S.No</th>
                                        <th>User Name</th>
                                        <th>User Email</th>
                                        <th>User Mobile</th>
                                        <th>User Address</th>
                                        <th>Admin Type</th>
                                        <th>User_image</th>
                                        <th>Status</th>
                                        <th>Actions</th> 
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        if(!empty($users)){	
                                        $i = 0;
                                        foreach ($users as $row) {
                                        ++$i;
										?>	
                                        <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $row['name']?></td>
                                        <td><?php echo $row['email_id']?></td>
                                        <td><?php echo $row['mobile']?></td>
                                        <td><?php echo $row['address']?></td>
                                        <td><button class="mb-2 mr-2 btn-pill btn btn-gradient-primary btn-sm"><?php echo $row['admin_type']?></button></td>
                                        <td><img src="<?php echo base_url(); ?><?php echo $row['user_image']?>" data-toggle="tooltip" data-placement="top" title="Avatar Name" height="50" width="50" alt="Avatar" class="w35 h35 rounded"></td>
                                        <td scope="row">
                                        <?php if($row['user_status'] == "0")
                                        { ?>
                                       
                                        <span class="mb-2 mr-2 badge badge-pill badge-danger"> Inactive</span>
                                        <?php  }
                                        else
                                        { ?>
                                      
                                        <span class="mb-2 mr-2 badge badge-success">Active</span>
                                        <?php  }
                                        ?>
                                        </td>
                                      
                                        <td>
                                        <?php if ($row['user_status'] == '1') { ?>
                                        <a  Onclick="return Inactive();" href="<?php echo base_url(); ?>users/user_status/<?php echo $row['admin_id'].'/0'?>" data-toggle="tooltip" title="Inactive" class="btn btn-sm btn-danger changestatus"><span  class="pe-7s-door-lock" title="Inactive"></span></a>
                                        <?php } else { ?>
                                        <a  Onclick="return Active();" href="<?php echo base_url(); ?>users/user_status/<?php echo $row['admin_id'].'/1'?>" data-toggle="tooltip" title="Active" class="btn btn-sm btn-success changestatus"><span class="pe-7s-door-lock" title="Active"></span></a>
                                        <?php } ?>
                                        

                                        <a href="<?php echo base_url(); ?>users/edit_user/<?php echo $row['admin_id'];?>"><button type="button" class="btn btn-gradient-warning btn-sm " data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="pe-7s-trash pe-7s-link"></i></button></a>
                                        
                                        <a Onclick="return ConfirmDelete();" href="<?php echo base_url(); ?>users/delete_user/<?php echo $row['admin_id'];?>"><button type="button" class="btn btn-info btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="pe-7s-trash btn-icon-wrapper"></i></button></a>
                                        
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
                           
                            <div class="main-card mb-3 card element-block-example">
                                <div class="card-header">Header</div>
                                <div class="card-body"><p>With supporting text below as a natural lead-in to additional content.</p>
                                    <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p></div>
                                <div class="d-block text-right card-footer">
                                    <button class="mr-2 btn btn-link btn-sm">Cancel</button>
                                    <button class="btn btn-success btn-lg">Save</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-card mb-3 card">
                                       



                                    <div class="row">
                                <div class=" col-md-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
        
                                            <div id="smartwizard">
                                                <ul class="forms-wizard"><li>
                                                        <a href="#step-1">
                                                            <em>1</em><span>Account Information</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-2">
                                                            <em>2</em><span>Payment Information</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-3">
                                                            <em>3</em><span>Finish Wizard</span>
                                                        </a>
                                                    </li>
                                                </ul><div class="form-wizard-content">
                                                    <div id="step-1">
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group"><label for="exampleEmail55">Email</label><input name="email" id="exampleEmail55" placeholder="with a placeholder" type="email" class="form-control"></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group"><label for="examplePassword22">Password</label><input name="password" id="examplePassword22" placeholder="password placeholder" type="password" class="form-control"></div>
                                                            </div>
                                                        </div>
                                                        <div class="position-relative form-group"><label for="exampleAddress">Address</label><input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="exampleAddress2">Address 2</label><input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text" class="form-control"></div>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="position-relative form-group"><label for="exampleCity">City</label><input name="city" id="exampleCity" type="text" class="form-control"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative form-group"><label for="exampleState">State</label><input name="state" id="exampleState" type="text" class="form-control"></div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="position-relative form-group"><label for="exampleZip">Zip</label><input name="zip" id="exampleZip" type="text" class="form-control"></div>
                                                            </div>
                                                        </div>
                                                        <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Check me out</label></div>
                                                    </div>
                                                    <div id="step-2">
                                                        <div id="accordion" class="accordion-wrapper mb-3">
                                                            <div class="card">
                                                                <div id="headingOne" class="card-header">
                                                                    <button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                                                        <span class="form-heading">Account Information<p>Enter your user informations below</p></span>
                                                                    </button>
                                                                </div>
                                                                <div data-parent="#accordion" id="collapseOne" aria-labelledby="headingOne" class="collapse show">
                                                                    <div class="card-body">
                                                                        <div class="form-row">
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="exampleEmail2">Email</label>
                                                                                    <input name="email" id="exampleEmail2" placeholder="with a placeholder" type="email" class="form-control" required></div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group">
                                                                                    <label for="examplePassword">Password</label>
                                                                                    <input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="position-relative form-group">
                                                                            <label for="exampleAddress">Address</label><input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
                                                                        <div class="position-relative form-group"><label for="exampleAddress2">Address 2</label><input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text" class="form-control"></div>
                                                                        <div class="form-row">
                                                                            <div class="col-md-6">
                                                                                <div class="position-relative form-group"><label for="exampleCity">City</label><input name="city" id="exampleCity" type="text" class="form-control"></div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="position-relative form-group"><label for="exampleState">State</label><input name="state" id="exampleState" type="text" class="form-control"></div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="position-relative form-group"><label for="exampleZip">Zip</label><input name="zip" id="exampleZip" type="text" class="form-control"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="step-3">
                                                        <div class="no-results">
                                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                <span class="swal2-success-line-tip"></span>
                                                                <span class="swal2-success-line-long"></span>
                                                                <div class="swal2-success-ring"></div>
                                                                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                            </div>
                                                            <div class="results-subtitle mt-4">Finished!</div>
                                                            <div class="results-title">You arrived at the last form wizard step!</div>
                                                            <div class="mt-3 mb-3"></div>
                                                            <div class="text-center">
                                                                <button class="btn-shadow btn-wide btn btn-success btn-lg">Finish</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="clearfix">
                                                <button type="button" id="reset-btn" class="btn-shadow float-left btn btn-link">Reset</button>
                                                <button type="button" id="next-btn" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Next</button>
                                                <button type="button" id="prev-btn" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</button>
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
