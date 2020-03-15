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
							<!-- <a>Saloon @ home for women</a> -->
						<!-- </li> -->
						<li class="breadcrumb-item active">
							Contact Us
						</li>
					</ol>
				</div>

			</div>


		</div>
	</div>
</section>
<section class="contact-info-area contact-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-6 col-md-6">
				<div class="single-contact-info">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<h3>Email Us:</h3>
					<a>info@bbp.in <br></a>
					<a>contact@bigbeautypack.com</a>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-md-6">
				<div class="single-contact-info">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<h3>Call Us:</h3>
					<a>+91 9874563211 <br></a>
					<a>+91 9874365421</a>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-md-6 offset-md-3 offset-lg-0 offset-md-0">
				<div class="single-contact-info">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<h3>Our Address:</h3>
					<a>Lorem ipsum, lorem dolor, lorm, Sdasid.</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact-area pb50">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="request-quote-wrap contact-pages mb-0">
					<div class="contact-form">
						<div class="section-title">
							<h2>Contact Us</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ainim veniam.</p>
						</div>
						<form id="contactForm">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="number" name="number" id="number" class="form-control" placeholder="Phone" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" name="Subject" id="Subject" class="form-control" placeholder="Subject" required>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Write something" required></textarea>
									</div> 
								</div>
								<div class="col-lg-12">
									<button type="submit" class="default-btn">
										Send
										<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="map-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.3169829332!2d78.26795805927911!3d17.41229980061335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1582370212847!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</div>
	
<?php $this->load->view('footer');?>
	
	
</body>
</html>
