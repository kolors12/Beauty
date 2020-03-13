<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Add Users</title>
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
                                <i class="lnr-user icon-gradient bg-ripe-malin"></i>
                                    </i>
                                </div>
                                <div>Add User
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>            
                  
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-md-3 p-0 mb-3">
                            <a href="<?php echo base_url('users/users_view');?>"><button type="button" class="btn-shadow dropdown-toggle btn btn-info">
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
                            <?php foreach ($view_user_details as $row) {?>
                        <div class="row">
                                <div class="col-md-5">
									<div class="form-group">
										<strong>City Name : </strong>
										<span class="pull-right"><?php echo $row['city_name'];?>
										</span>
									</div>
                                </div>
                                <div class="col-md-5">
									<div class="form-group">
										<strong>User Name :</strong>
										<span class="pull-right"><?php echo $row['name'];?>
										</span>
									</div>
                                </div>
								<div class="col-md-5">
									<div class="form-group">
										<strong>Mobile :</strong>
										<span class="pull-right">
										<?php echo $row['mobile'];?></span>
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<strong>Email :</strong>
										<span class="pull-right">
										<?php echo $row['email_id'];?></span>
									</div>
								</div>
			
								<div class="col-md-5">
										<div class="form-group">
										<strong>Categories :</strong>
										 <span class="pull-right"><?php echo $row['categories'];?>
									</span>
								</div>
								</div>
								
								<div class="col-md-5">
									<div class="form-group">
										<strong>Address :</strong>
										<span class="pull-right">
										<?php echo $row['address'];?>
										</span>
									</div>
								</div>
								
								<div class="col-md-5">
									<div class="form-group">
										<strong>Admin Type :</strong>
										<span class="pull-right">
										<?php echo $row['admin_type'];?></span>
									</div>
								</div>
								
								
                                <div class="col-md-5">
									<div class="form-group">
										<strong>location :</strong>
										<span class="pull-right"><?php echo $row['location'];?>
										</span>
									</div>
                                </div>
                                <div class="col-md-5">
									<div class="form-group">
										<strong>latitude :</strong>
										<span class="pull-right">
										<?php echo $row['latitude'];?></span>
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
									<strong>Longitude :</strong>
										<span class="pull-right">
								       <?php echo $row['longitude'];?></span>
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<strong>About vendor :</strong>
										<span class="pull-right">
										<?php echo $row['about_vendor'];?>
										</span>
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
									<strong>photos :</strong>
									<span class="pull-right">
									<?php echo $row['city_id'];?>
									</span>
								</div>
                            </div>
                            <?php }?>
						    </div>
                          </div>
                    </div>
                </div>
               
                <?php $this->load->view('footer');?>
            </div>
    </div>
</div>
<?php $this->load->view('right_top');?>

<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts-main.87c0748b313a1dda75f5.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
  $('.jobdeatils').hide();
  $('#admin_type').on('change', function(){
    if($("#admin_type option:selected").val()=='Vender'){
      $('.jobdeatils').show();
      $("#location").attr("required", "true");
      $("#latitude").attr("required", "true");
      $("#longitude").attr("required", "true");
      $("#about_vendor").attr("required", "true");
     

    }else{
      $('.jobdeatils').hide();
	   $("#country").removeAttr('required');
      $("#salary").removeAttr('required');
      $("#city").removeAttr('required');
      $("#org").removeAttr('required');
      $("#designation").removeAttr('required');
    }

});
</script>
</body>
</html>
