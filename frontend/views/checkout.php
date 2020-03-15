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
							Checkout 
						</li>
					</ol>
				</div>

			</div>


		</div>
	</div>
</section>

<section class="checkout-area pt30 pb30">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="user-actions">
				<i class="fas fa-sign-in-alt"></i>
				<span>Already customer? <a href="login_register.html">Click here to login</a></span>
			</div>
		</div>
	</div>

	<form>
		<div class="row">
			<div class="col-md-6">
				<div class="billing-details">
					<h3 class="title">Billing Details</h3>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Country <span class="required">*</span></label>
							
								<div class="select-box">
									<select class="form-control" style="display: none;">
										<option value="5">United Arab Emirates</option>
										<option value="1">China</option>
										<option value="2">United Kingdom</option>
										<option value="0">Germany</option>
										<option value="3">France</option>
										<option value="4">Japan</option>
									</select>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>First Name <span class="required">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Last Name <span class="required">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label>Company Name</label>
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Address <span class="required">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Town / City <span class="required">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>State / County <span class="required">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Postcode / Zip <span class="required">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Email Address <span class="required">*</span></label>
								<input type="email" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Phone <span class="required">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>

						
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="order-details">
					<div class="order-table table-responsive">
						<h3 class="title">Your Order</h3>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">Product Name</th>
									<th scope="col">Total</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td class="product-name">
										<a>Product 2</a>
									</td>

									<td class="product-total">
										<span class="subtotal-amount"><i class="fa fa-inr"></i> 140.00</span>
									</td>
								</tr>

								<tr>
									<td class="product-name">
										<a>Product 1</a>
									</td>

									<td class="product-total">
										<span class="subtotal-amount"><i class="fa fa-inr"></i> 200.00</span>
									</td>
								</tr>

								<tr>
									<td class="product-name">
										<a>Product 3</a>
									</td>

									<td class="product-total">
										<span class="subtotal-amount"><i class="fa fa-inr"></i> 244.00</span>
									</td>
								</tr>

								<tr>
									<td class="product-name">
										<a>Product 4</a>
									</td>

									<td class="product-total">
										<span class="subtotal-amount"><i class="fa fa-inr"></i> 250.00</span>
									</td>
								</tr>

								<tr>
									<td class="order-subtotal">
										<span>Cart Subtotal</span>
									</td>

									<td class="order-subtotal-price">
										<span class="order-subtotal-amount"><i class="fa fa-inr"></i> 125.00</span>
									</td>
								</tr>

								<tr>
									<td class="order-shipping">
										<span>Shipping</span>
									</td>

									<td class="shipping-price">
										<span><i class="fa fa-inr"></i>30.00</span>
									</td>
								</tr>

								<tr>
									<td class="total-price">
										<span>Order Total</span>
									</td>

									<td class="product-subtotal">
										<span class="subtotal-amount"><i class="fa fa-inr"></i> 130.00</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="payment-box">
						<div class="payment-method">
							<p>
								<input type="radio" id="direct-bank-transfer" name="radio-group" checked>
								<label for="direct-bank-transfer">Direct Bank Transfer</label>

								Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
							</p>
							<p>
								<input type="radio" id="paypal" name="radio-group">
								<label for="paypal">PayPal</label>
							</p>
							<p>
								<input type="radio" id="cash-on-delivery" name="radio-group">
								<label for="cash-on-delivery">Cash on Delivery</label>
							</p>
						</div>

						<a href="#" class="default-btn">
							Place Order
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
</section>

	<?php $this->load->view('footer');?>
	
	
	
</body>
</html>
