<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Edit User</title>
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
                                </div>
                                <div>Edit User
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>            
                  
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-md-3 p-0 mb-3">
                            <a href="<?php echo base_url('users/users_view');?>"><button type="button" class="btn btn-shadow btn-wide btn btn-info">
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
                         <?php foreach ($view_edit_user as $row) {?>
                            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="<?php echo base_url('users/update_user')?>" enctype="multipart/form-data" >
                            <input type="hidden" name="id" class="form-control" value="<?php echo $row['admin_id']?>">
                            <div class="form-group">
                                    <label for="lastname">Full Name</label>
                                    <div>
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $row['name']?>" placeholder="Please Enter Your Name"></div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div>
                                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email_id']?>"  placeholder="Email"></div>
                                </div>
                                    <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <div>
                                        <input type="number" class="form-control" id="mobile" name="mobile" value="<?php echo $row['mobile']?>" placeholder="Please Your Mobile Number"></div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Please Enter Your Address</label>
                                    <div>
                                       
                                        <textarea rows="1" class="form-control autosize-input" id="address" name="address" style="max-height: 200px; height: 35px;"><?php echo $row['address']?></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <div>
                                        <input type="text" class="form-control" id="dob" name="dob" data-toggle="datepicker" value="<?php echo $row['dob']?>" placeholder="Please Enter Your Date of Birth"></div>
                                </div>
                                <div class="form-group">
                                <label for="user_image">User Image</label>
                                <div>
                                <img src="<?php echo base_url(); ?><?php echo $row['user_image']?>" data-toggle="tooltip" data-placement="top" title="Avatar Name" height="100" width="100" alt="Avatar" class="w35 h35 rounded">
                                    <input type="file" class="form-control" id="user_imagee" name="user_imagee" placeholder="Please Your Mobile Number"></div>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="exampleSelect" class="">Admin Type</label>
                                    <select name="admintype" id="exampleSelect" class="form-control">
                                        <option value="">Please Select</option>
                                        <option value="Admin" <?php if(($row['admin_type'])=="Admin"){ echo 'selected=selected';  } ?> >Admin</option>
										 <option value="Vender" <?php if(($row['admin_type'])=="Vender"){ echo 'selected=selected';  } ?> >Vender</option>
                                    </select>
                                </div>
                               
        
                                <div class="form-group">
                                <button type="submit" value="submit" name="submit" class="btn btn btn-info">Submit</button>
                                    
                                </div>
                            </form>
                         <?php }?>
                        </div>
                    </div>
                </div>
               
                <?php $this->load->view('footer');?>
            </div>
    </div>
</div>
<?php $this->load->view('right_top');?>

<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts-main.87c0748b313a1dda75f5.js"></script></body></html>
