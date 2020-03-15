<!doctype html>
<html>
<?php $this->load->view('head');?>
<body>
	
	<?php $this->load->view('header');?>
	<?php $this->load->view('main_nav');?>
	<?php $this->load->view('mobile_nav');?>
<section class="page_title ds pb100 pt100">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<!-- <h1>About Us</h1> -->
				<div class="breadcrumb-wrap">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?php echo base_url('home/index')?>">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a>Products</a>
						</li>
						<li class="breadcrumb-item active">
							Wishlist 
						</li>
					</ol>
				</div>

			</div>


		</div>
	</div>
</section>
<div class="wishlist_area mt30 mb30">
<div class="container">   
	<form action="#"> 
		<div class="row">
			<div class="col-md-12">
				<div class="table_desc wishlist">
					<div class="cart_page table-responsive">
						<table>
							<thead>
								<tr>
									<th class="product_remove">Delete</th>
									<th class="product_thumb">Image</th>
									<th class="product_name">Product</th>
									<th class="product-price">Price</th>
									<th class="product_quantity">Stock Status</th>
									<th class="product_total">Add To Cart</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								   <td class="product_remove"><a href="#">X</a></td>
									<td class="product_thumb"><a href="saloon_products_details.html"><img alt="" src="<?php echo base_url();?>assets/images/products/saproduct1.jpg"></a></td>
									<td class="product_name"><a href="saloon_products_details.html">Product 1</a></td>
									<td class="product-price"><i class="fa fa-inr"></i> 400.00</td>
									<td class="product_quantity">In Stock</td>
									<td class="product_total"><a href="#">Add To Cart</a></td>


								</tr>

								<tr>
								   <td class="product_remove"><a href="#">X</a></td>
									<td class="product_thumb"><a href="saloon_products_details.html"><img alt="" src="<?php echo base_url();?>assets/images/products/saproduct2.jpg"></a></td>
									<td class="product_name"><a href="saloon_products_details.html">Product 2</a></td>
									<td class="product-price"><i class="fa fa-inr"></i> 200.00</td>
									<td class="product_quantity">In Stock</td>
									<td class="product_total"><a href="#">Add To Cart</a></td>


								</tr>
								<tr>
								   <td class="product_remove"><a href="#">X</a></td>
									<td class="product_thumb"><a href="saloon_products_details.html"><img alt="" src="<?php echo base_url();?>assets/images/products/saproduct3.jpg"></a></td>
									<td class="product_name"><a href="saloon_products_details.html">Product 3</a></td>
									<td class="product-price"><i class="fa fa-inr"></i> 140.00</td>
									<td class="product_quantity">In Stock</td>
									<td class="product_total"><a href="#">Add To Cart</a></td>


								</tr>

							</tbody>
						</table>   
					</div>  

				</div>
			 </div>
		 </div>

	</form> 

</div>
</div>

	
<?php $this->load->view('footer');?>
	
	
	
	
</body>
</html>
