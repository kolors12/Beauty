<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
<meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template"><!-- Disable tap highlight on IE --><meta name="msapplication-tap-highlight" content="no">
<link href="<?php echo base_url();?>assets/css/.-main.87c0748b313a1dda75f5.css" rel="stylesheet"></head><body>
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Admin Login,</div>
                                            <span>Please sign in to your account below.</span>
                                        </h4>
                                        <h4><p class="text-danger col-sm-12 text-success" ><?php echo $this->session->flashdata('message'); ?></p></h4>
                                    </div>
                                    <form  action="<?php echo base_url('login/index');?>" method="post">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <input name="email_id" id="exampleEmail" placeholder="Enter Your Email here..." type="email" class="form-control" value="<?php echo set_value("email_id")?>">
                                                    <span class="text-danger" style="float: right"><?php echo form_error("email_id") ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><input name="password" id="examplePassword" value="<?php echo set_value("password")?>" placeholder="Enter Your Password here..." type="password" class="form-control">
                                                <span class="text-danger" style="float: right"><?php echo form_error("password") ?></span>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Keep me logged in</label></div>
                                   
                                    <div class="divider"></div>
                                    <h6 class="mb-0">No account? <a href="javascript:void(0);" class="text-primary">Sign up now</a></h6>
                                </div>
                                <div class="modal-footer clearfix">
                                    <div class="float-left"><a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a></div>
                                    <div class="float-right">
                                    
                                    <div class="float-left"><input type="submit" class="btn btn-primary " name="submit"  value="Login to Dashboard"></div>
                                    <?php //echo base_url('dashboard/dashboard_view');?>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © ArchitectUI 2019</div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts-main.87c0748b313a1dda75f5.js"></script></body></html>
