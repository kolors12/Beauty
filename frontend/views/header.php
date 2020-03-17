<header id="BBP_header" class="BBP_header">
	<div class="BBP_headertop">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-xs-4 col-sm-2">
				<strong class="BBP_headerlogo">
					<a href="<?php echo base_url('home/index')?>"><img class="img img-responsive" src="<?php echo base_url();?>assets/images/head_logo.png" alt="Logo"></a>
				</strong>
				</div>
				<div class="col-md-10 col-xs-8  col-sm-10 pull-right">
					<div class="BBP_headerright">
						
						<ul class="BBP_head_address wrp userdetails">
							<li class="hidden-xs">
								<span class="BBP_head_addressicon"><i class="fa fa-phone" aria-hidden="true"></i></span>
								<div class="BBP_head_addresscontent">
									<strong>Mobile Number</strong>
									<span>+91 9874563211</span>
									<span>+91 9874365421</span>
								</div>
							</li>
							<li class="hidden-xs">
								<span class="BBP_head_addressicon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
								<div class="BBP_head_addresscontent">
									<strong>Mail ID</strong>
									<span>info@bbp.in</span>
									<span>contact@bigbeautypack.com</span>
								</div>
							</li>
							<?php 	
							$user_data = $this->session->all_userdata();
							if($user_data['user_id'] == '' ){
							?>
							<li>
								<a class="bbp_btn_header" href="<?php echo base_url('login/login_register')?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Login / Register</a>
							</li>
							<?php }else {?>
							<div class="serar-cart-icon">
								<ul>
									<li><a href="<?php echo base_url('wishlist/wishlist_view')?>" class="search-opt"><i class="fa fa-heart-o"></i></a></li>
									<li><a href="javascript:void(0)" class="cart-open"><i class="fa fa-shopping-cart"></i><p>02</p></a></li>
								</ul>
								<div class="shopping-cart">
									<h4>ITEM IN MY CART</h4>
									<ul>
										<li class="sing-cart-list">
											<div class="cart-img"><img src="<?php echo base_url();?>assets/images/cartl1.jpg" alt="" class="img-thumbnail"></div>
											<div class="cart-text">
												<p>
													<span class="d-block">Massage oil</span>
													<span class="d-block"><strong><i class="fa fa-inr"></i>150 x 1</strong></span>
													<span> <i class="fa fa-star"></i></span>
													<span> <i class="fa fa-star"></i></span>
													<span> <i class="fa fa-star"></i></span>
													<span> <i class="fa fa-star"></i></span>
													<span class="cg"> <i class="fa fa-star"></i></span>
												</p>
											</div>
											<div class="cart-remove">
												<span>
												<i class="fa fa-close"></i>
											</span>
											</div>
										</li>
										<li class="sing-cart-list">
											<div class="cart-img"><img src="<?php echo base_url();?>assets/images/cartl2.jpg" alt="" class="img-thumbnail"></div>
											<div class="cart-text">
												<p>
													<span class="d-block">Shampoo plus </span>
													<span class="d-block"><strong><i class="fa fa-inr"></i>150 x 1</strong></span>
													<span> <i class="fa fa-star"></i></span>
													<span> <i class="fa fa-star"></i></span>
													<span> <i class="fa fa-star"></i></span>
													<span> <i class="fa fa-star"></i></span>
													<span class="cg"> <i class="fa fa-star"></i></span>
												</p>
											</div>
											<div class="cart-remove">
												<span>
												<i class="fa fa-close"></i>
											</span>
											</div>
											
										</li>
										
									</ul>
									
									<div class="cart-footer">
										<div class="Cfooter-top"> 
										<span>total</span> 
										<span><i class="fa fa-inr"></i>160</span></div>
										<div class="Cfooter-bottom"> 
										<a href="cart.html" class="btn-mr xsl pill th-secondary">VIEW CART</a> 
										<a href="<?php echo base_url('checkout/checkout_view')?>" class="btn-mr xsl pill th-primary">CHECKOUT</a>
									</div>
									</div>
								</div>
							
							</div>
						
							<div class="btn-group">
							  <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> User</a>
							  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
								<span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
							  </a>
							  <ul class="dropdown-menu">
								<li><a href="<?php echo base_url('login/user_account');?>"><i class="fa fa-pencil"></i> My Account</a></li>
								<li><a href="<?php echo base_url('wishlist/wishlist_view');?>"><i class="fa fa-heart-o"></i> Wishlist</a></li>
								<li><a href="<?php echo base_url('login/logout');?>"><i class="fa fa-unlock"></i> Logout</a></li>
							  </ul>
							</div>
							<?php }?>
						</ul>
						
					</div>
					
				</div>
				
			</div>
		</div>
	</div>
</header>