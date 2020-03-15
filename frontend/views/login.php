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
						<!-- <li class="breadcrumb-item"> -->
							<!-- <a href="#">Pages</a> -->
						<!-- </li> -->
						<li class="breadcrumb-item active">
							Login
						</li>
					</ol>
				</div>

			</div>


		</div>
	</div>
</section>
 <section id="testimonial" class="fh5co-bg-section">
	<div class="container">
		<div class="row row-pb-md">
			<div class="fh5co-heading text-center">
				<!-- <h2 class="">Welcome back,</h2> </div> -->
			<div class="cont wow col-xs-12 slideInLeft s--signup" style="visibility: visible; animation-name: slideInLeft;">
				<div class="form  sign-in text-center">
					<h2 class="text-center">Sign In</h2>
					<button type="button" class="fb-btn">Connect with <span>facebook</span></button>
					<button type="button" class="google-btn">Connect with <span>Google</span></button>
					<div class="or-seperator"><i>or</i></div>
					<div id="signFormSec" style="display: block;">                                          
					<div style="color:red" id="login-responces"></div>
					<div class="u-form-group">
					<input type="email" placeholder="Email" name="email" id="loginemails" required=""> </div>
					<div class="u-form-group">
					<input type="password" placeholder="Password" name="password" id="loginpasswords" required=""> </div>
					<div>
					<!-- <button type="button" id="logins" class="submits-btn e-mtn-longinbtn ">SIGN IN</button> -->
					<button type="submit" class="default-btn mt20">
						<a href="javascript:void(0)">
						SIGN IN</a>
					</button>
					</div>
					<div class="u-form-group"> <a href="javascript:void(0)" id="forgotButton">Forgot password?</a> </div>
					</div>
					<div class="lg-hidden">
					<h2>New here?</h2>
					<p><a id="signUpId" href="javascript:void(0)"> Sign up</a> and discover great amount of new opportunities!</p>
							</div>
						<!---Forgot Password--->
					<div id="forgotPassModal" style="display: none;">
					<div align="center" style="color:red;" id="forgoterrors"></div> 
					<div class="u-form-group ">
					<input type="text" placeholder="Your Email Address" id="forgot-emails" required="">
					</div>
					<div class="u-form-group">
					<!-- <button class="theme-btn-small" id="sendpasswords">Submit</button> -->
					<button type="submit" class="default-btn mt20">
						<a href="javascript:void(0)">
						Submit</a>
					</button>
					
					</div>
					<div class="u-form-group"> <a href="javascript:void(0)" id="backButton"><i class="fa fa-arrow-circle-o-left fa-3x"></i></a> </div>
					</div>
					 
				</div>
				<div class="sub-cont">
					<div class="img">
					<div class="img__text m--up">
					<h2>New here?</h2>
				   
					</div>
					<div class="img__text m--in">
					<h2>One of us?</h2>
					<p>If you already have an account with us, We've missed you! Sign-in</p>
					</div>
					<div class="img__btn"> <span class="m--up">Sign Up</span> <span class="m--in">Sign In</span> </div>
					</div>
					<div id="regSec">
					<div class="form sign-up text-center">
						<h2>Register</h2>
						<div class="u-form-group">
							<input type="text" placeholder="Full Name" id="reg-names" required=""> </div>
						<div class="u-form-group">
							<input type="text" placeholder="Mobile" id="reg-mobiles" pattern="^\d{10}$" required=""> </div>
						<div class="u-form-group">
							<input type="email" placeholder="Email" id="reg-emails" required=""> </div>
						<div class="u-form-group">
							<input type="password" id="reg-passr" placeholder="Password" required=""> </div>
						<div class="u-form-group">
							<input type="password" id="reg-con-passr" placeholder="Confirm Password" required=""> </div>
						<!-- <button type="button" class="submits-btn e-mtn-longinbtn" id="registers">SIGN UP</button> -->
						<button type="submit" class="default-btn mt20">
						<a href="javascript:void(0)">
						SIGN UP</a>
					</button>
					</div>
					 <div class="lg-hidden">
					<h2>One of us?</h2>
					 <p>If you already has an account, just <a id="signInId" href="javascript:void(0)">sign in.</a> We've missed you!</p>
					 </div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

	




    <?php $this->load->view('footer');?>
	
	<script>
	$(document).ready(function(){ 
	$('#signUpId').click(function(e){  
	 e.preventDefault();  
    $('#signFormSec').fadeOut('slow', function(){
        $('#regSec').fadeIn('slow');
    });
	});
	$('#signInId').click(function(e){  
		 e.preventDefault();  
		$('#regSec').fadeOut('slow', function(){
			$('#signFormSec').fadeIn('slow');
		});
	});
	});
	
	</script>
	<script>
		$(document).ready(function(e) {
			$("#forgotButton").click(function(){
		$("#signFormSec").hide();	
		$("#forgotPassModal").fadeIn();	
			 e.preventDefault();  
			$("#signFormSec").fadeOut('slow', function(){
				$("#forgotPassModal").fadeIn('slow');
			});
		});
		$("#backButton").click(function(e){  
			 e.preventDefault();  
			$("#forgotPassModal").fadeOut('slow', function(){
				$("#signFormSec").fadeIn('slow');
			});
		});
		});
	</script>
	
</body>
</html>
