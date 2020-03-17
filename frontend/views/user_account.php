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
							<a href="index.html">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a>Products</a>
						</li>
						<li class="breadcrumb-item active">
							User Account 
						</li>
					</ol>
				</div>

			</div>


		</div>
	</div>
</section>
<section class="useracc">
<div class="container">   
	<div class="account_dashboard">
		<div class="row">
			<div class="col-sm-12 col-md-3 col-lg-3">
				<div class="dashboard_tab_button">
					<ul role="tablist" class="nav flex-column dashboard-list">
						<li><a href="#account-details" data-toggle="tab" class="nav-link  active">Account details</a></li>
						<li> <a href="#orders" data-toggle="tab" class="nav-link">My Orders</a></li>
						<li><a href="#changepass" data-toggle="tab" class="nav-link">Change Password </a></li>
						<li><a href="#address" data-toggle="tab" class="nav-link">Saved Addresses</a></li>
					</ul>
				</div>    
			</div>
			<div class="col-sm-12 col-md-9 col-lg-9">
				<div class="tab-content dashboard_content">
					<div class="tab-pane fade active" id="account-details">
						<h3>Account details </h3>
						<div class="login">
							<div class="login_form_container">
								<div class="account_login_form">
									<form action="#">
										<div class="input-radio">
											<span class="custom-radio"><input type="checkbox" value="1" name="male"> Male</span>
											<span class="custom-radio"><input type="checkbox" value="1" name="female"> Female</span>
										</div>
										<label>First Name</label>
										<input type="text" name="first-name">
										<label>Last Name</label>
										<input type="text" name="last-name">
										<label>Email</label>
										<input type="text" name="email-name">
										<label>Password</label>
										<input type="password" name="user-password">
										<label>Address lane1</label>
										<input type="text" name="Address1">
										<label>Address lane2</label>
										<input type="text" name="Address2">
										<label>Landmark</label>
										<input type="text" name="Landmark">
										<label>City</label>
										<input type="text" name="city">
										<label>District</label>
										<input type="text" name="District">
										<label>State</label>
										<input type="text" name="state">
										<div class="useracc_btn">
										   <button type="submit" class="btn color1_head hvr-shutter-out-horizontal pt15 pb15">Save</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="orders">
						<h3>Orders</h3>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Order</th>
										<th>Date</th>
										<th>Status</th>
										<th>Total</th>
										<th>Download pdf</th>	 	 	 	
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>May 10, 2018</td>
										<td><span class="success">Completed</span></td>
										<td><i class="fa fa-inr"></i>225.00 for 1 item </td>
										<td><a href="#" class="view">Download</a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>May 10, 2018</td>
										<td>Completed</td>
										<td><i class="fa fa-inr"></i> 1117.00 for 1 item </td>
										<td><a href="#" class="view">Download</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="changepass">
						<h3>Change Password</h3>
						<div class="login">
							<div class="login_form_container">
								<div class="account_login_form">
									<form action="#">
										
										<label>Old Password</label>
										<input type="password" name="user-password">
										<label>New Password</label>
										<input type="password" name="user-password">
										<label>Re enter Password</label>
										<input type="password" name="user-password">
										<div class="useracc_btn">
										   <button type="submit" class="btn color1_head hvr-shutter-out-horizontal pt15 pb15">Save</button>
											
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="address">
					   <h4 class="billing-address">Address</h4>
						<span class="custom_checkbox">
							<input type="checkbox" value="1" name="optin">
							<label>The following addresses will be used on the checkout page by default.</label>
						</span>
						
						<p><strong>Full Name here</strong></p>
						<address>Door No: 8-4-500, Room 402, My Building, City, District, State, Country.</address>
						<a href="#" class="view">Edit</a>  
					</div>
					
				</div>
			</div>
		</div>
	</div>  
</div>        	
</section>

	
<?php $this->load->view('footer');?>
	
	
	
	
</body>
</html>
