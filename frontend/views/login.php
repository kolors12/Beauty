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
					<div id="status"></div>

					<!-- Facebook login or logout button 
					<a href="javascript:void(0);" onclick="fbLogin();" id="fbLink"><button type="button" class="fb-btn">Connect with <span>facebook</span></button></a>

					< Display user profile data -->
					<div id="userData"></div>
					<button type="button" class="fb-btn">Connect with <span>facebook</span></button>
					<button type="button" class="google-btn">Connect with <span>Google</span></button>
					<div class="or-seperator"><i>or</i></div>
					<div id="signFormSec" style="display: block;">                                          
					<div style="color:red" id="login-responces"></div>
					<div class="u-form-group">
					<input type="email" placeholder="Email" name="email" id="loginemails" required> </div>
					<div class="u-form-group">
					<input type="password" placeholder="Password" name="password" id="loginpasswords" required> </div>
					<div>
					<button type="button" id="logins" class="default-btn mt20 ">SIGN IN</button>
				
					</div>
					<div class="u-form-group"> <a href="javascript:void(0)" id="forgotButton">Forgot password?</a> </div>
					</div>
					<div class="lg-hidden">
					<h2>New here?</h2>
					<p><a id="signUpId" href="javascript:void(0)"> Sign up</a> and discover great amount of new opportunities!</p>
					</div>
					
					<div id="forgotPassModal" style="display: none;">
						
					<div align="center" style="color:red;" id="forgoterrors"></div> 
					<div class="u-form-group ">
					<input type="text" placeholder="Your Email Address" id="forgot-emails" required="">
					</div>
					<div class="u-form-group">
					<button class="default-btn mt20" id="sendpasswords">Submit</button> 
				
					
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
					<div class="img__btn" id="suggu"> <span class="m--up">Sign Up</span> <span class="m--in">Sign In</span> </div>
					</div>
					<div id="regSec">
						
					<div class="form sign-up text-center">
					<form action="javascript:void(0)" id="form" method="post">
						
						<h2>Register</h2>
						<div style="color:green" id="login-success"></div>
						<div class="u-form-group">
							<input type="text"  class="form-control" placeholder="Full Name" id="reg-names" required> 
						</div>
						
						<div class="u-form-group">
							<input type="email"  class="form-control" placeholder="Email" id="reg-emails" required> 
						</div>
						<div class="u-form-group">
							<input type="password"  class="form-control"  placeholder="Password" id="reg-passr" required> 
						</div>
						<div class="u-form-group">
							<input type="text"  class="form-control numbre"  placeholder="Mobile" id="reg-mobiles" required> 
						</div>
						<button type="submit" class="default-btn mt20" id="butsave">SIGN UP</button>
					
						</form>
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
	<style>
	.error{
	color: red;
	}
	</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
	<script>
 	$("#form").validate({
    });

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
	<script>
		// Register////
$(document).ready(function() {
	$('#butsave').on('click', function() {
		
		  var name = $("#reg-names").val();
		  var mobile = $("#reg-mobiles").val();
		  var email = $("#reg-emails").val();
		  var pass = $("#reg-passr").val();

		 if(name == ''){
				$( "#reg-names" ).addClass( "error" );
				return false;
		}
		if(email == ''){

		$( "#reg-emails" ).addClass( "error" );

		$( "#reg-names" ).removeClass( "error" );

		return false;

		}
		
		var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/; 

		if(!filter.test(email)) {

		$( "#reg-emails" ).addClass( "error" );

		return false;  

		}
		
		if(pass == ''){

		$( "#reg-passr" ).addClass( "error" );

		$( "#reg-names" ).removeClass( "error" );

		$( "#reg-emails" ).removeClass( "error" );

		return false;

		}	  
		if(mobile == ''){
		$( "#reg-mobiles" ).addClass( "error" );
		return false;
		}
		
		$.ajax({
				url: "<?php echo base_url("login/insert_user");?>",
				type: "POST",
				data: {
					type: 1,
					name: name,
					email: email,
					pass : pass,
					mobile: mobile
					
				},
				cache: false,
				success: function(res) {
					setTimeout(function(){
						   location.reload(); 
				    }, 5000);
					if(res == 1){
					$('#login-success').html('<div style="color:green"><h6>User Data successfully Register !</h6>');
					}else if(res == 2){
					$('#login-success').html('<div style="color:Red"><h6>Email Id Already Exits</div></h6>');
					}else{
					$('#login-success').html('<div style="color:Red"><h6>Login Failed Please Try Again..!</h6></div>');
					}
					

				}





			});
		
		
	});
});
   /*Llogin */   
$("#logins").click(function() { 

	var email_id = $("#loginemails").val();
	var password = $("#loginpasswords").val();

		if(email_id == ''){
			$("#loginemails").addClass("error");
			return false;
		}
		if(password == ''){
			$("#loginpasswords").addClass("error");
			return false;

		}

		jQuery.ajax(
		 {
			type: "POST",
		    url: "<?php echo base_url("login/user_login");?>",
			data: {password: password,email_id: email_id},
			success: function(res) {
				if(res == "1"){
					 window.location="<?php echo base_url("login/user_account");?>";
				} else {
					$('#login-responces').html('<div style="color:Red"><h6>Please Check Your Login Details..!!!</div></h6>');
				}
			}

		});
  });


  /*Forgotpassword*/    
$(document).ready(function() {        
    $("#sendpasswords").on('click', function(e) { 
      e.preventDefault();            
      var email = $("#forgot-emails").val();
        if(email == ''){                
        $( "#forgot-emails" ).addClass("error");                
        return false;            
        }           
        jQuery.ajax({                
            type: "POST",                
            url: "<?php echo base_url("login/forgotpassword");?>",                
            data: {email: email},                
            success: function(res) {                    
            $('#forgoterrors').html(res);                                                       
            }            
        });        
    });    
});
    
</script>

<!-- Face Book Login -->
<script>
window.fbAsyncInit = function() {
    // FB JavaScript SDK configuration and setup
    FB.init({
      appId      : '409116946202937', // FB App ID
      cookie     : true,  // enable cookies to allow the server to access the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.10' // use graph api version 2.10
    });
    
    // Check whether the user already logged in
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            //display user data
            getFbUserData();
        }
    });
};

// Load the JavaScript SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Facebook login with JavaScript SDK
function fbLogin() {
    FB.login(function (response) {
     
        if (response.authResponse) {
            // Get and display the user profile data
            getFbUserData();
        } else {
            document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
        }
    }, {scope: 'email'});
}

// Fetch the user profile data from facebook
function getFbUserData(){
    FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture,cover'},
    function (response) {
        document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
        document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
        document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.first_name + '!';
        document.getElementById('userData').innerHTML = 
        '<div style="position: relative;"><img src="'+response.picture.data.url+'" /></div><p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Profile Link:</b> <a target="_blank" href="'+response.picture.data.url+'">click to view profile</a></p>';
        
        // Save user data
       saveUserData(response);
    });
}

// Save user data to the database
function saveUserData(userData){
	$.post("<?php echo base_url("login/facebook_insert");?>",
	 {
		 oauth_provider:'facebook', 
		 userData: JSON.stringify(userData)}, 
		 function(data){ return true; });
    }

// Logout from facebook
function fbLogout() {
    FB.logout(function() {
        document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
        document.getElementById('fbLink').innerHTML = '<img src="<?php echo base_url('assets/images/fblogin.jpg'); ?>"/>';
        document.getElementById('userData').innerHTML = '';
        document.getElementById('status').innerHTML = 'You have successfully logout from Facebook.';
    });
}
</script>
</body>
</html>
