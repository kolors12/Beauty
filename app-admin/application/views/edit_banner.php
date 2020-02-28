<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Add Banner</title>
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
                                <i class="pe-7s-paint-bucket icon-gradient bg-grow-early"></i>
                                    </i>
                                </div>
                                <div>Edit Banner 
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>            
                  
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-md-3 p-0 mb-3">
                            <a href="<?php echo base_url('banner/banner_view');?>"><button type="button" class="btn-shadow dropdown-toggle btn btn-secondary">
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
                        <?php foreach ($view_edit_banner as $row) {?>
                            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="<?php echo base_url('banner/update_banner');?>" enctype="multipart/form-data">
                                
                                <input type="hidden" class="form-control"  name="id" value="<?php echo  $row['cat_id']?>">
                                <div class="form-group">
                                    <label for="lang_id">Lang Id</label>
                                    <div>
                                        <input type="Number" class="form-control" id="lang_id" name="lang_id"  value="<?php echo  $row['lang_id']?>" placeholder="Please Enter Your Lang Id"></div>
                                </div>
                              
                                <div class="form-group">
                                    <label for="cat_name">Category Name </label>
                                    <div>
                                        <input type="text" class="form-control" id="cat_name" name="cat_name" value="<?php echo  $row['cat_name']?>" placeholder="Please Enter Category Name"></div>
                                </div>
                                <div class="form-group">
                                    <label for="cat_desc">Category Description </label>
                                    <div>
                                       
                                        <textarea rows="1" class="form-control autosize-input" id="cat_desc" name="cat_desc" style="max-height: 200px; height: 35px;"> <?php echo  $row['cat_desc']?></textarea>
                                    </div>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="banner_type" class="">Banner Type</label>
                                    <select name="banner_type" id="banner_type" class="form-control">
                                     <option value="">Please Select</option>
                                     <option value="0" <?php if(($row['banner_type'])=="0"){ echo 'selected=selected';  } ?> >Home Slider</option>
                                     <option value="1" <?php if(($row['banner_type'])=="1"){ echo 'selected=selected';  } ?> >Top Offers</option>
                                     <option value="2" <?php if(($row['banner_type'])=="2"){ echo 'selected=selected';  } ?> >Bottom Offers</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="cat_image"> Category Image </label>
                                <div>
                                <img src="<?php echo base_url(); ?><?php echo $row['cat_image']?>" data-toggle="tooltip" data-placement="top" title="Avatar Name" height="80" width="80" alt="Avatar" class="w35 h35 rounded">
                                    <input type="file" class="form-control" id="cat_image" name="cat_image" placeholder="Please Your Mobile Number"></div>
                                </div>
                                
                               
        
                                <div class="form-group">
                                    <button type="submit" class="ladda-button mb-2 mr-2 btn btn-secondary" name="signup" value="Sign up">Submit</button>
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
