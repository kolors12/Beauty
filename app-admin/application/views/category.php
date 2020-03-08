<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Category View</title>
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
                                </div>
                                <div>category 
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>            
                    <!-- <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav"><li class="nav-item">
                            <a role="tab" class="nav-link active" href="index.html">
                                <span>Variation 1</span>
                            </a>
                        </li>
                       
                    </ul> -->
                    <h5 ><p class="text-success col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message1'); ?></p></h5>
                    <h5 ><p class="text-info col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message2'); ?></p></h5>
                    <h5 ><p class="text-danger col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message3'); ?></p></h5>
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-md-3 p-0 mb-3">
                            <a href="<?php echo base_url('category/add_category');?>"><button type="button" class="btn-shadow dropdown-toggle btn btn-warning">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-plus fa-w-20"></i>
                                </span>
                                Add Category
                            </button><a/>
                        </div>
                        <!-- <div class="col-12 col-md-3 p-0 mb-3">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div> -->
                    </div>
                    <div class="tabs-animation">
                        
                       
                       
                        <div class="card mb-3">
                           
                            <div class="card-body">
                                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                        <thead>
                                        <tr>
                                        <th>S.No</th>
                                        <th>category Name</th>
                                        <th>Slug</th>
                                        <th>Category Description</th>
                                        <th>Category Image</th>
                                        <th>Category Image2</th>
                                        <th>Brand Type</th>
                                        <th>Sequence</th>
                                        <th>Seo Title</th>
                                        <th>Seo Description</th>
                                        <th>Seo Keywords</th>
                                        <th>Status</th>
                                        <th>Actions</th> 
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        if(!empty($category)){	
                                        $i = 0;
                                        foreach ($category as $row) {
                                        ++$i;
										?>	
                                        <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $row['name']?></td>
                                        <td><?php echo $row['slug']?></td>
                                        <td><?php echo $row['cat_desc']?></td>
                                        <td><img src="<?php echo base_url(); ?><?php echo $row['image']?>" data-toggle="tooltip" data-placement="top" title="Avatar Name" height="80" width="80" alt="Avatar" class="w35 h35 rounded"></td>
                                        <td><img src="<?php echo base_url(); ?><?php echo $row['image2']?>" data-toggle="tooltip" data-placement="top" title="Avatar Name" height="80" width="80" alt="Avatar" class="w35 h35 rounded"></td>
                                        <td> <?php echo $row['brand_id']?></td>
                                        <td> <?php echo $row['sequence']?></td>
                                        <td> <?php echo $row['seo_title']?></td>
                                        <td> <?php echo $row['seo_desc']?></td> 
                                        <td> <?php echo $row['seo_keywords']?></td>
                                        
                                        <td scope="row">
                                        <?php if($row['status'] == "0")
                                        { ?>
                                       
                                        <a  Onclick="return Inactive();" href="<?php echo base_url(); ?>category/category_status/<?php echo $row['id'].'/1'?>" data-toggle="tooltip" title="Inactive" class="btn btn-sm btn-danger changestatus"><span class="mb-2 badge-danger"> Inactive</span></a>
                                        <?php  }
                                        else
                                        { ?>
                                       <a  Onclick="return Active();" href="<?php echo base_url(); ?>category/category_status/<?php echo $row['id'].'/0'?>" data-toggle="tooltip" title="Active" class="btn btn-sm btn-success changestatus">
                                        <span class="mb-2 badge-success">Active</span></a>
                                        <?php  }
                                        ?>
                                        </td>
                                      
                                        <td>
                                         <a href="<?php echo base_url(); ?>category/edit_category/<?php echo $row['id'];?>"><button type="button" class="btn btn-gradient-warning btn-sm " data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="pe-7s-trash pe-7s-link"></i></button></a>
                                        
                                        <a Onclick="return ConfirmDelete();" href="<?php echo base_url(); ?>category/delete_category/<?php echo $row['id'];?>"><button type="button" class="btn btn-info btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="pe-7s-trash btn-icon-wrapper"></i></button></a>
                                        
                                        </td>
                                        <?php  $i++; } }else{?>
                                        <tr>
                                        <td colspan="13" style="text-align:center;color:red;">No Category Found</td>
                                        </tr>
                                        <?php } ?>
                                    </tr>
                                   
                                   
                                </tbody>
                                   
                                </table>
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
