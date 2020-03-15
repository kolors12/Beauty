<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Users View</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
<meta name="description" content="This is an example dashboard created using build-in elements and components."><!-- Disable tap highlight on IE -->
<meta name="msapplication-tap-highlight" content="no"><link href="<?php echo base_url();?>assets/css/.-main.87c0748b313a1dda75f5.css" rel="stylesheet"></head><body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">


<style>
.pagination li a{
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6;
}

</style>
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
                                </div>
                                <div>Users
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>            
                   <h5 ><p class="text-success col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message1'); ?></p></h5>
                    <h5 ><p class="text-info col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message2'); ?></p></h5>
                    <h5 ><p class="text-danger col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message3'); ?></p></h5>
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-md-3 p-0 mb-3">
                            <a href="<?php echo base_url('users/add_users');?>"><button type="button" class="btn-shadow dropdown-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-plus fa-w-20"></i>
                                </span>
                                Add Users
                            </button><a/>
                        </div>
                        <!-- <div class="col-12 col-md-3 p-0 mb-3">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div> -->
                    </div>
                    
                   <div class="search-fields" >
								<div class="row clearfix">
								    <div class="col-lg-5 col-md-5 col-sm-12">
									 <div class="form-group" style="margin-top:10px;">
                                    <input type="text"   id="name" class="form-control" placeholder="Enter Name" style="background-color: #fff; border-color: #fff;" required/>
									</div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12">
									 <div class="form-group" style="margin-top:10px;">
                                    <input type="text"   id="email_id" class="form-control" placeholder="Enter Your Mail Id" style="background-color: #fff; border-color: #fff;" required/>
									</div>
									</div>  
									<div class="col-lg-2 col-md-2 col-sm-12" style="margin-top:10px;">
                                    <button id="search" class="btn btn-success">Search</button>
									</div>
                                </div>
                                </div>
								
                                <div class="tabs-animation">
                                <div class="card mb-3">
                           
                                  
                                    <table class="table table-hover table-custom spacing8">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>City Name</th>
                                                <th>User Name</th>
                                                <th>User Email</th>
                                                <th>User Mobile</th>
                                                <th>Admin Type</th>
                                                <th>User_image</th>
                                                <th>Status</th>
                                                 <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                        
                                        </div>
                                <div id="pagination_link" class="pull-right">
                                </div>                
                                </div>
                            
                </div>
               
                <?php $this->load->view('footer');?>
            </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
 
    $(document).ready(function(){
        
        ///filter and pagenation//
        filter_data(1);
        $("#search").on("click", function(){
            filter_data(1);
        });
        function filter_data(page)
        {
            $('#loading').show();
            var action = 'fetch_data';
            var email_id = $('#email_id').val();
            var name = $('#name').val();
            $.ajax({
                url:"<?php echo base_url(); ?>users/fetch_data/"+page,
                method:"POST",
                dataType:"JSON",
                data:{action:action, name:name, email_id:email_id},
                success:function(data)
                {
                    $('tbody').html(data.admissions_list);
                    $('#pagination_link').html(data.pagination_link);
                    $('#loading').hide();
                }
            })
        }
        $(document).on('click', '.pagination li a', function(event){
            event.preventDefault();
            var page = $(this).data('ci-pagination-page');
            filter_data(page);
        });
    });
function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
	function Inactive()
    {
      var x = confirm("Are you sure you want to Inactive?");
      if (x)
          return true;
      else
        return false;
    }
	function Active()
    {
      var x = confirm("Are you sure you want to Active?");
      if (x)
          return true;
      else
        return false;
    }
</script>

<?php $this->load->view('right_top');?>
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts-main.87c0748b313a1dda75f5.js"></script>
</body>
</html>
