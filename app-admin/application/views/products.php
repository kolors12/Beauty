<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Products</title>
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
                                <div>Products
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
                                <span>View Products List </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>Add Product</span>
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
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Sub Category </th>
                                        <th>Product Type</th>
                                        <th>HSN Code</th>
										<th>Vendor Details</th>
                                        <th>Status</th>
                                        <th>Actions</th> 
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        if(!empty($products)){	
                                        $i = 0;
                                        foreach ($products as $row) {
                                        ++$i;
										?>	
                                        <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $row['pro_name']?></td>
                                        <td><?php echo $row['cat_id']?></td>
                                        <td><?php echo $row['sub_cat_id']?></td>
										
                                        <td><?php echo $row['pro_type']?></td>
										<td><?php echo $row['hsn_code']?></td>
										<td><a href="<?php echo base_url('products/view_product_details');?>/<?php echo $row['prod_id']?>"><button type="button" class="btn-shadow dropdown-toggle btn btn-primary">Product Details</button><a></td>
                                        <!--td><button class="mb-2 mr-2 btn-pill btn btn-gradient-primary btn-sm"><?php // //$row['admin_type']?></button></td>
                                        <td><img src="<?php// echo base_url(); ?><?php //echo $row['user_image']?>" data-toggle="tooltip" data-placement="top" title="Avatar Name" height="50" width="50" alt="Avatar" class="w35 h35 rounded"></td-->
                                        <td scope="row">
                                        <?php if($row['status'] == "1")
                                        { ?>
                                        <a  Onclick="return Inactive();" href="<?php echo base_url(); ?>products/product_status/<?php echo $row['prod_id'].'/0'?>" data-toggle="tooltip" title="Inactive" class="btn btn-sm btn-danger changestatus">
                                        <span class="mb-2    badge-danger"> Inactive</span></a>
                                        <?php  }
                                        else
                                        { ?>
                                       <a  Onclick="return Active();" href="<?php echo base_url(); ?>products/product_status/<?php echo $row['prod_id'].'/1'?>" data-toggle="tooltip" title="Active" class="btn btn-sm btn-success changestatus">
                                        <span class="mb-2  badge-success">Active</span></a>
                                        <?php  }
                                        ?>
                                        </td>
                                      
                                        <td>
                                        <a href="<?php echo base_url(); ?>users/edit_user/<?php echo $row['admin_id'];?>"><button type="button" class="btn btn-gradient-warning btn-sm " data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="pe-7s-trash pe-7s-link"></i></button></a>
                                        
                                        <a Onclick="return ConfirmDelete();" href="<?php echo base_url(); ?>products/delete_product/<?php echo $row['prod_id'];?>"><button type="button" class="btn btn-info btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="pe-7s-trash btn-icon-wrapper"></i></button></a>
                                        
                                        </td>
                                        <?php  $i++; } }else{?>
                                        <tr>
                                        <td colspan="5" style="text-align:center;color:red;">No Products Found</td>
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
                           
								<form id="signupForm" class="col-md-10 mx-auto" method="post" action="<?php echo base_url('products/insert_product');?>" enctype="multipart/form-data">
									
								<div class="row">
								
								
								
								<div class="col-md-6">
									<div class="position-relative form-group">
										<label for="exampleSelect" class="">Category</label>
										<select name="cat_id" id="exampleSelect" class="form-control">
										<option value="">Please Category</option>
										<?php  foreach ($category as $row) {?>
										<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
										<?php }?>
										
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="position-relative form-group">
										<label for="exampleSelect" class="">Sub Category</label>
										<select name="sub_cat_id" id="exampleSelect" class="form-control">
										<option value="">Please Sub Category</option>
									
										<option value="1">fdgdf</option>
										<option value="2">fdgdf</option>
										<option value="3">fdgdf</option>
										
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="vendor_name">Product Type</label>
										<div>
										<input type="number" class="form-control" id="pro_type" name="pro_type" placeholder=" Please Enter Product Type"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="location">Lang_id</label>
										<div>
										<input type="text" class="form-control" id="lang_id" name="lang_id" placeholder="lang_id"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="location">Product Name</label>
										<div>
										<input type="text" class="form-control" id="pro_name" name="pro_name" placeholder=" Please Enter Product Name"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="location">Slug</label>
										<div>
										<input type="text" class="form-control" id="slug" name="slug" placeholder=" Please Enter slug"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="location">HSN Code</label>
										<div>
										<input type="text" class="form-control" id="hsn_code" name="hsn_code" placeholder=" Please Enter Hsn Code"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="bullet_points">Bullet Points</label>
										<div>
										 <textarea rows="1" class="form-control autosize-input" id="bullet_points" name="bullet_points" style="max-height: 200px; height: 35px;"></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="pro_priority">Product Priority</label>
										<div>
										<input type="number" class="form-control" id="pro_priority" name="pro_priority" placeholder=" Please Enter product Priority"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="pro_image">Product image</label>
										<div>
								   <input type="file" class="form-control" id="pro_image" name="pro_image" placeholder=""></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="pro_image_2">Product image 2 </label>
										<div>
								   <input type="file" class="form-control" id="pro_image_2" name="pro_image_2" placeholder=""></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="pro_image_3">Product image 3</label>
										<div>
								   <input type="file" class="form-control" id="pro_image_3" name="pro_image_3" placeholder=""></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="pro_image_4">Product image 4</label>
										<div>
								   <input type="file" class="form-control" id="pro_image_4" name="pro_image_4" placeholder=""></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="pro_image_5">Product image 5</label>
										<div>
								   <input type="file" class="form-control" id="pro_image_5" name="pro_image_5" placeholder=""></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="pro_short_desc"> Product Short Description</label>
										<div>
										 <textarea rows="1" class="form-control autosize-input" id="pro_short_desc	" name="pro_short_desc	" style="max-height: 200px; height: 35px;"></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="mobile">Product Price</label>
										<div>
										<input type="text" class="form-control" id="pro_price" name="pro_price" placeholder=" Please Enter Product Price"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="pro_desc"> Product Description</label>
										<div>
										 <textarea rows="1" class="form-control autosize-input" id="pro_desc	" name="pro_desc	" style="max-height: 200px; height: 35px;"></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="mobile">Product qty</label>
										<div>
										<input type="number" class="form-control" id="qty" name="qty" placeholder=" Please Enter Product qty"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Product Brand</label>
										<div>
										<input type="text" class="form-control" id="pro_brand" name="pro_brand" placeholder=" Please Enter Product Brand"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Product Dim</label>
										<div>
										<input type="text" class="form-control" id="pro_dim" name="pro_dim" placeholder=" Please Enter Product Dim"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Product Model</label>
										<div>
										<input type="text" class="form-control" id="pro_model" name="pro_model" placeholder=" Please Enter Product model"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Product sku</label>
										<div>
										<input type="text" class="form-control" id="pro_sku" name="pro_sku" placeholder=" Please Enter Product sku"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Product Weight</label>
										<div>
										<input type="text" class="form-control" id="pro_weight" name="pro_weight" placeholder=" Please Enter Product weight"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Product series</label>
										<div>
										<input type="text" class="form-control" id="series" name="series" placeholder=" Please Enter Product series"></div>
									</div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
									<label for="address">Specification</label>
									<div>
									 <textarea rows="1" class="form-control autosize-input" id="specification" name="specification" style="max-height: 200px; height: 35px;"></textarea>
									</div>
								</div>
							   </div>
								
								<div class="col-md-6">
									<div class="form-group">
									<label for="user_image">Product Prices</label>
									<div>
									<input type="text" class="form-control" id="pro_prices" name="pro_prices" placeholder="Please Your product_prices">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="user_image">Product Spl Discount</label>
									<div>
									<input type="text" class="form-control" id="spl_discount" name="spl_discount" placeholder="Please Your spl_discount">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="user_image">Product Extra fields</label>
									<div>
									<input type="text" class="form-control" id="extra_fields" name="extra_fields" placeholder="Please Your Extra_fields">
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
									<label for="user_image">Top Deal Order</label>
									<div>
									<input type="text" class="form-control" id="top_deal_order" name="top_deal_order" placeholder="Please Your Top Deal order">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="user_image">Product seo_title</label>
									<div>
									<input type="text" class="form-control" id="seo_title" name="seo_title" placeholder="Please Your seo_title">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="user_image">Product seo_desc</label>
									<div>
									<input type="text" class="form-control" id="seo_desc" name="seo_desc" placeholder="Please Your seo_desc">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label for="user_image">Product seo_keywords</label>
									<div>
									<input type="text" class="form-control" id="seo_keywords" name="seo_keywords" placeholder="Please Your seo_keywords">
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
