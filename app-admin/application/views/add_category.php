<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Add Category</title>
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
                                <i class="pe-7s-moon icon-gradient bg-sunny-morning"></i>
                                    </i>
                                </div>
                                <div>Add Category
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>            
                  
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-md-3 p-0 mb-3">
                            <a href="<?php echo base_url('category/category_view');?>"><button type="button" class="btn-shadow dropdown-toggle btn btn-warning">
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
                           
                            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="<?php echo base_url('category/insert_category');?>" enctype="multipart/form-data">
                                
                                
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Please Enter Category Name "></div>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <div>
                                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Please Enter Your Slug"></div>
                                </div>
                               
                                
                                <div class="form-group">
                                <label for="cat_image"> Category Image </label>
                                <div>
                                    <input type="file" class="form-control" id="cat_image" name="cat_image" placeholder="Please Your Mobile Number"></div>
                                </div>
                                <div class="form-group">
                                <label for="image2"> Category Image2 </label>
                                <div>
                                    <input type="file" class="form-control" id="image2" name="image2" placeholder="Please Your Mobile Number"></div>
                                </div>
                                <div class="form-group">
                                    <label for="parent_id">Parent Id</label>
                                    <div>
                                        <input type="number" class="form-control" id="parent_id" name="parent_id" placeholder="Please Enter Your Parent Id"></div>
                                </div>
                                <div class="form-group">
                                    <label for="cat_desc">Category Description </label>
                                    <div>
                                       
                                        <textarea rows="1" class="form-control autosize-input" id="cat_desc" name="cat_desc" style="max-height: 200px; height: 35px;"></textarea>
                                    </div>
                                </div>  
                               
                                <div class="position-relative form-group">
                                    <label for="brand_id" class="">Brands Type</label>
                                    <select name="brand_id" id="brand_id" class="form-control">
                                        <option value="">Please Select Brand</option>
                                        <?php  foreach ($brands_drop as $row) {?>
                                        <option value="<?php echo $row['id']?>"><?php echo $row['brand_name']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sequence">Sequence Number</label>
                                    <div>
                                        <input type="text" class="form-control" id="sequence" name="sequence" placeholder="Please Enter Your Sequence Number"></div>
                                </div>
                                <div class="form-group">
                                    <label for="seo_title">Seo Title</label>
                                    <div>
                                        <input type="text" class="form-control" id="seo_title" name="seo_title" placeholder="Please Enter Your Title"></div>
                                </div>
                                <div class="form-group">
                                    <label for="seo_desc">Seo Description</label>
                                    <div>
                                    <textarea rows="1" class="form-control autosize-input" id="seo_desc" name="seo_desc" style="max-height: 200px; height: 35px;"></textarea>
                                        
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="seo_keywords">Seo Keywords</label>
                                    <div>
                                        <input type="text" class="form-control" id="seo_keywords" name="seo_keywords" placeholder="Please Enter Your Keywords"></div>
                                </div>
                                
                               
        
                                <div class="form-group">
                                    <button type="submit" class="ladda-button mb-2 mr-2 btn btn-warning" name="signup" value="Sign up">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
               
                <?php $this->load->view('footer');?>
            </div>
    </div>
</div>
<?php $this->load->view('right_top');?>

<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts-main.87c0748b313a1dda75f5.js"></script></body></html>
