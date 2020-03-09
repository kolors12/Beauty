<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>View Product Details</title>
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
                                    </i>
                                </div>
                                <div>Product Details
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>            
                  
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-md-3 p-0 mb-3">
                            <a href="<?php echo base_url('products/products_view');?>"><button type="button" class="btn-shadow dropdown-toggle btn btn-info">
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
                           
						   
						   <h5>Product Details...</h5>
						    <div class="row">
                                <div class="col-md-12">
                                   
                               
								<div class="card-body">
                           
							
											
								<div class="row">
								<?php 
							    foreach ($product_details as $row) {
							     ?>	
								 
								<table class="table table-bordered">
						      <td>
							
							   <table  class="table table-bordered"  >
								<tr>
									 <th>Category Name </th>
									 <td><?php echo $row['cat_id']?></td>
								  </tr>
									<tr>
									 <th>Product Type</th>
									<td><?php echo $row['pro_type']?></td>
								  </tr>
									<tr>
									 <th>Product Name</th>
									 <td><?php echo $row['pro_name']?></td>
								  </tr>
								  <tr>
									 <th>HSN Code </th>
									 <td><?php echo $row['hsn_code']?></td>
								  </tr>
									<tr>
									 <th>Product Priority </th>
									<td><?php echo $row['pro_priority']?></td>
								  </tr>
								   <tr>
									 <th>Product Price</th>
									 <td><?php echo $row['pro_price']?></td>
								  </tr>
									<tr>
									 <th>Product qty</th>
									<td><?php echo $row['qty']?></td>
								  </tr>
									<tr>
									 <th>Product Dim</th>
									<td><?php echo $row['pro_dim']?></td>
								  </tr>
								  <tr>
									 <th>Product sku</th>
									<td><?php echo $row['pro_sku']?></td>
								  </tr>
								  <tr>
									 <th>Product series</th>
									<td><?php echo $row['series']?></td>
								  </tr> 
								  <tr>
									 <th>Product Prices</th>
									<td><?php echo $row['pro_prices']?></td>
								  </tr>
								   <tr>
									 <th>Product Extra fields</th>
									<td><?php echo $row['extra_fields']?></td>
								  </tr>
								    <tr>
									 <th>Product seo_title</th>
									<td><?php echo $row['seo_title']?></td>
								  </tr> 
								  
							   </table>
							</td>
							 <td>
							   <table  class="table table-bordered">
								<tr>
									 <th>Sub Category Name </th>
									 <td><?php echo $row['sub_cat_id']?></td>
								  </tr>
								 
									<tr>
									 <th>Lang id </th>
									 <td><?php echo $row['lang_id']?></td>
								  </tr>
									<tr>
									 <th>Slug </th>
									 <td><?php echo $row['slug']?></td>
								  </tr>
									<tr>
									 <th>Product qty</th>
									<td><?php echo $row['qty']?></td>
								  </tr>
									<tr>
									 <th>Product Dim</th>
									<td><?php echo $row['pro_dim']?></td>
								  </tr>
								   
									<tr>
									 <th>Product Brand</th>
									 <td><?php echo $row['pro_brand']?></td>
								  </tr>
								  <tr>
									 <th>Product Model</th>
									 <td><?php echo $row['pro_model']?></td>
								  </tr>
								  <tr>
									 <th>Product Weight</th>
									 <td><?php echo $row['pro_weight']?></td>
								  </tr>
								   <tr>
									 <th>Specification</th>
									 <td><?php echo $row['specification']?></td>
								  </tr> 
								  <tr>
									 <th>Product Spl Discount</th>
									 <td><?php echo $row['spl_discount']?></td>
								  </tr>
								    <tr>
									 <th>Top Deal Order</th>
									 <td><?php echo $row['top_deal_order']?></td>
								  </tr> 
								  <tr>
									 <th>Product seo_desc</th>
									 <td><?php echo $row['seo_desc']?></td>
								  </tr>
								  <tr>
									 <th>Product seo_keywords</th>
									<td><?php echo $row['seo_keywords']?></td>
								  </tr>
								
							   </table>
							   
							</td>
							
						 
					</table>
					<table class="table table-bordered">
					<thead>
					  <tr>
						<th>Bullet Points</th>
						<th>Product Short Description</th>
						<th>Product Description</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td><?php echo $row['bullet_points']?></td>
						<td><?php echo $row['pro_short_desc']?></td>
						<td><?php echo $row['pro_desc']?></td>
					  </tr>
					
					</tbody>
				  </table>
					<h4>Product Images...</h4>				
					<table class="table table-bordered">
					<tr>					
					 <td><img id="my_pro_pic" src="<?php echo base_url();?><?php echo $row['pro_image']?>" width="150" height="150"></td>
					 <td><img id="my_pro_pic" src="<?php echo base_url();?><?php echo $row['pro_image_2']?>" width="150" height="150"></td>
					 <td><img id="my_pro_pic" src="<?php echo base_url();?><?php echo $row['pro_image_3']?>" width="150" height="150"></td>
					 <td><img id="my_pro_pic" src="<?php echo base_url();?><?php echo $row['pro_image_4']?>" width="150" height="150"></td>
					 <td><img id="my_pro_pic" src="<?php echo base_url();?><?php echo $row['pro_image_5']?>" width="150" height="150"></td>
					</tr>
					</table>
								<?php }?>
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
<?php $this->load->view('right_top');?>

<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts-main.87c0748b313a1dda75f5.js"></script></body></html>
