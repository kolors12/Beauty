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
							PRIVACY POLICY
						</li>
					</ol>
				</div>

			</div>


		</div>
	</div>
</section>
	
<?php $this->load->view('footer');?>
	
	
</body>
</html>
