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
						<!-- <li class="breadcrumb-item"> -->
							<!-- <a href="#">Pages</a> -->
						<!-- </li> -->
						<li class="breadcrumb-item active">
							About Us
						</li>
					</ol>
				</div>

			</div>


		</div>
	</div>
</section>
<div class="info-container">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 about-us">
				<header class="section-header">
					<h2>ABOUT BIG BEAUTY PACK? <i></i></h2>
					<strong>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </strong>
				</header>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
				
			</div>

			<div class="col-xs-12 col-sm-6 our-images">
				<ul>
					<li class="zoom">
						<figure>
							<a href="#"> <img src="<?php echo base_url();?>assets/images/about-img-1.png" alt="" /></a>
						</figure>
					</li>
					<li class="zoom">
						<figure>
							<a href="#"><img src="<?php echo base_url();?>assets/images/about-img-2.png" alt="" /></a>
						</figure>
					</li>
				</ul>
				<ul>
					<li class="zoom">
						<figure>
							<a href="#"><img src="<?php echo base_url();?>assets/images/about-img-3.png" alt="" /></a>
						</figure>
					</li>
					<li class="zoom">
						<figure>
							<a href="#"><img src="<?php echo base_url();?>assets/images/about-img-4.png" alt="" /></a>
						</figure>
					</li>
				</ul>
			</div>

		</div>
	</div>
</div>
	
<?php $this->load->view('footer');?>
	
	
</body>
</html>
