<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php $sess_data = $this->session->all_userdata();
if($sess_data['admin_type'] == 'Admin' ){ ?>
<title>Admin Dashboard</title>
<?php }else {?>
<title>Vendor Dashboard</title>
<?php }?>
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
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <?php 
			                    if($sess_data['admin_type'] == 'Admin' ){ ?>
                                <div>Admin Dashboard </div>
                                <?php } else {?> 
                                    <div>Vendor Dashboard </div> 
                                <?php }?>
                            </div>
                               
                        </div>
                    </div>            
                   <?php  if($sess_data['admin_type'] == 'Admin' ){ ?>
                    <div class="tabs-animation">
                        <div class="mb-3 card">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                                    Portfolio Performance
                                </div>
                                <div class="btn-actions-pane-right text-capitalize">
                                    <button class="btn-wide btn-outline-2x mr-md-2 btn btn-outline-focus btn-sm">View All</button>
                                </div>
                            </div>
                            <div class="no-gutters row">
                                <div class="col-sm-6 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                            <i class="lnr-laptop-phone text-dark opacity-8"></i></div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">Cash Deposits</div>
                                            <div class="widget-numbers">1,7M</div>
                                            <div class="widget-description opacity-8 text-focus">
                                                <div class="d-inline text-danger pr-1">
                                                    <i class="fa fa-angle-down"></i>
                                                    <span class="pl-1">54.1%</span>
                                                </div>
                                                less earnings
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                            <i class="lnr-graduation-hat text-white"></i></div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">Invested Dividents</div>
                                            <div class="widget-numbers"><span>9M</span></div>
                                            <div class="widget-description opacity-8 text-focus">
                                                Grow Rate:
                                                <span class="text-info pl-1">
                                                    <i class="fa fa-angle-down"></i>
                                                    <span class="pl-1">14.1%</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                            <i class="lnr-apartment text-white"></i></div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">Capital Gains</div>
                                            <div class="widget-numbers text-success"><span>$563</span></div>
                                            <div class="widget-description text-focus">
                                                Increased by
                                                <span class="text-warning pl-1">
                                                    <i class="fa fa-angle-up"></i>
                                                    <span class="pl-1">7.35%</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center d-block p-3 card-footer">
                                <button class="btn-pill btn-shadow btn-wide fsize-1 btn btn-primary btn-lg">
                                    <span class="mr-2 opacity-7">
                                        <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                    </span>
                                    <span class="mr-1">View Complete Report</span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"> </i>
                                            Technical Support
                                        </div>
                                        <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                            <div class="btn-group dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                    <i class="pe-7s-menu btn-icon-wrapper"></i>
                                                </button>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <div class="p-3 text-right">
                                                        <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                                        <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-0 card-body">
                                        <div class="p-1 slick-slider-sm mx-auto">
                                            <div class="slick-slider">
                                                <div>
                                                    <div class="widget-chart widget-chart2 text-left p-0">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-title opacity-5 text-muted text-uppercase">New Accounts since 2018</div>
                                                                </div>
                                                                <div class="widget-numbers">
                                                                    <div class="widget-chart-flex">
                                                                        <div>
                                                                                <span class="opacity-10 text-success pr-2">
                                                                                    <i class="fa fa-angle-up"></i>
                                                                                </span>
                                                                            <span>78</span>
                                                                            <small class="opacity-5 pl-1">%</small>
                                                                        </div>
                                                                        <div class="widget-title ml-2 font-size-lg font-weight-normal text-muted">
                                                                            <span class="text-success pl-2">+14</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                <div id="dashboard-sparkline-3"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="widget-chart widget-chart2 text-left p-0">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-title opacity-5 text-muted text-uppercase">Last Year Total Sales</div>
                                                                </div>
                                                                <div class="widget-numbers">
                                                                    <div class="widget-chart-flex">
                                                                        <div>
                                                                            <small class="opacity-3 pr-1">$</small>
                                                                            <span>629</span>
                                                                            <span class="text-primary pl-3">
                                                                            <i class="fa fa-angle-down"></i>
                                                                        </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                <div id="dashboard-sparkline-1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="widget-chart widget-chart2 text-left p-0">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                <div class="widget-chart-flex">
                                                                    <div class="widget-title opacity-5 text-muted text-uppercase">Helpdesk Tickets</div>
                                                                </div>
                                                                <div class="widget-numbers">
                                                                    <div class="widget-chart-flex">
                                                                        <div>
                                                                            <span class="text-warning">34</span>
                                                                        </div>
                                                                        <div class="widget-title ml-2 font-size-lg font-weight-normal text-dark">
                                                                            <span class="opacity-5 text-muted pl-2 pr-1">5%</span>
                                                                            increase
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                <div id="dashboard-sparkline-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="text-muted text-uppercase font-size-md opacity-5 pl-3 pr-3 pb-1 font-weight-normal">Sales Progress</h6>
                                        <ul class="list-group list-group-flush"><li class="p-3 bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Total Orders</div>
                                                                <div class="widget-subheading">Last year expenses</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-success">
                                                                    <small>$</small>
                                                                    1896
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-progress-wrapper">
                                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%;"></div>
                                                            </div>
                                                            <div class="progress-sub-label">
                                                                <div class="sub-label-left">YoY Growth</div>
                                                                <div class="sub-label-right">100%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="card-hover-shadow-2x mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon lnr-lighter icon-gradient bg-amy-crisp"> </i>
                                            Timeline Example
                                        </div>
                                        <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                            <div class="btn-group dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                    <i class="pe-7s-menu btn-icon-wrapper"></i>
                                                </button>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <div class="p-3 text-right">
                                                        <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                                        <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scroll-area-lg">
                                        <div class="scrollbar-container">
                                            <div class="p-4">
                                                <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">All Hands Meeting</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">Build the production release
                                                                    <div class="badge badge-danger ml-2">NEW</div>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">
                                                                    Something not important
                                                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/AJlL4R4tmvLMvJa4pUCx0e5vJm4wQgmlWIBJLH9KqKnSnsMnMnz1uvE-9k=" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/n3mbyWFkgTuTSJLyBEciFfd8KHTu5PpK31KPWStlDDf8ADmrBkBPt9fhoauScGf-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/j7bnZP8ALaTzwRv6hVckAH9cOddzRMSbK7cjB7ja9zgcOUEtuMmIFWGNjKTs7qYljMcanW3bOolQMuOAIP-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/AIhtef7mlUXKqLPW2u+LH-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/eWjDrLzW4tbdZY54mUDj+YPvtsdVa1bmB+xrDZ-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/8AEifdArq+TANAyqdwhJHcSKt5ap1a1a30i7Zsday8vAIUR3kEUsDBolLDdtoGo23cpIHaO8dNdBI55blsRLdWikelGAWgp6a1INNOBEvG5Gjs7W9FCSzOQO0gyMKaEKx-9k=" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/Irt7rO5S4yE7dPxX8AH3VRdqAd1NHjBLJE8GA0TYvhUdgHSg+TXaMObTIZKxvre8xsj2txbPviukYxyAj7hHUaxquDyNTpii7OEfufyVnazW3M7M30kULvZ5G2CpJK6iqRXCCieI9PMUdPaNLSsOvyvAYjeWpUvOOf8AI+b5h8plyocHbaW6E+TBFX+nGnsB9rfWPadFSSVEBlJt1YCCEgVp307taYdwo148d6A1Hs1ph-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/IE+E23UXqxlgCCXB0gN4g0rhLr4Co1sk28RN1rjn1Imciu4JVRxcNTgMHEoVPPoct7uwKytAzTSygr+IsBQihchh7l9MC00MnJLs7421+qT3HU1LqUOPyMSDR2bPTSlDiI2X9BZr5gElKFdDDUSKkAZ09cdHOWgrrR-9k=" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                            <div class="avatar-icon"><i>+</i></div>
                                                                        </div>
                                                                    </div>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">This dot has an info state</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">This dot has a dark state</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">All Hands Meeting</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">Build the production release
                                                                    <div class="badge badge-danger ml-2">NEW</div>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">
                                                                    Something not important
                                                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/AJlL4R4tmvLMvJa4pUCx0e5vJm4wQgmlWIBJLH9KqKnSnsMnMnz1uvE-9k=" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/n3mbyWFkgTuTSJLyBEciFfd8KHTu5PpK31KPWStlDDf8ADmrBkBPt9fhoauScGf-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/j7bnZP8ALaTzwRv6hVckAH9cOddzRMSbK7cjB7ja9zgcOUEtuMmIFWGNjKTs7qYljMcanW3bOolQMuOAIP-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/AIhtef7mlUXKqLPW2u+LH-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/eWjDrLzW4tbdZY54mUDj+YPvtsdVa1bmB+xrDZ-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/8AEifdArq+TANAyqdwhJHcSKt5ap1a1a30i7Zsday8vAIUR3kEUsDBolLDdtoGo23cpIHaO8dNdBI55blsRLdWikelGAWgp6a1INNOBEvG5Gjs7W9FCSzOQO0gyMKaEKx-9k=" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/Irt7rO5S4yE7dPxX8AH3VRdqAd1NHjBLJE8GA0TYvhUdgHSg+TXaMObTIZKxvre8xsj2txbPviukYxyAj7hHUaxquDyNTpii7OEfufyVnazW3M7M30kULvZ5G2CpJK6iqRXCCieI9PMUdPaNLSsOvyvAYjeWpUvOOf8AI+b5h8plyocHbaW6E+TBFX+nGnsB9rfWPadFSSVEBlJt1YCCEgVp307taYdwo148d6A1Hs1ph-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/IE+E23UXqxlgCCXB0gN4g0rhLr4Co1sk28RN1rjn1Imciu4JVRxcNTgMHEoVPPoct7uwKytAzTSygr+IsBQihchh7l9MC00MnJLs7421+qT3HU1LqUOPyMSDR2bPTSlDiI2X9BZr5gElKFdDDUSKkAZ09cdHOWgrrR-9k=" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                            <div class="avatar-icon"><i>+</i></div>
                                                                        </div>
                                                                    </div>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">This dot has an info state</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">This dot has a dark state</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">All Hands Meeting</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">Build the production release
                                                                    <div class="badge badge-danger ml-2">NEW</div>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">
                                                                    Something not important
                                                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/AJlL4R4tmvLMvJa4pUCx0e5vJm4wQgmlWIBJLH9KqKnSnsMnMnz1uvE-9k=" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/n3mbyWFkgTuTSJLyBEciFfd8KHTu5PpK31KPWStlDDf8ADmrBkBPt9fhoauScGf-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/j7bnZP8ALaTzwRv6hVckAH9cOddzRMSbK7cjB7ja9zgcOUEtuMmIFWGNjKTs7qYljMcanW3bOolQMuOAIP-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/AIhtef7mlUXKqLPW2u+LH-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/eWjDrLzW4tbdZY54mUDj+YPvtsdVa1bmB+xrDZ-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/8AEifdArq+TANAyqdwhJHcSKt5ap1a1a30i7Zsday8vAIUR3kEUsDBolLDdtoGo23cpIHaO8dNdBI55blsRLdWikelGAWgp6a1INNOBEvG5Gjs7W9FCSzOQO0gyMKaEKx-9k=" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/Irt7rO5S4yE7dPxX8AH3VRdqAd1NHjBLJE8GA0TYvhUdgHSg+TXaMObTIZKxvre8xsj2txbPviukYxyAj7hHUaxquDyNTpii7OEfufyVnazW3M7M30kULvZ5G2CpJK6iqRXCCieI9PMUdPaNLSsOvyvAYjeWpUvOOf8AI+b5h8plyocHbaW6E+TBFX+nGnsB9rfWPadFSSVEBlJt1YCCEgVp307taYdwo148d6A1Hs1ph-Z" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon"><img src="<?php echo base_url();?>assets/images/IE+E23UXqxlgCCXB0gN4g0rhLr4Co1sk28RN1rjn1Imciu4JVRxcNTgMHEoVPPoct7uwKytAzTSygr+IsBQihchh7l9MC00MnJLs7421+qT3HU1LqUOPyMSDR2bPTSlDiI2X9BZr5gElKFdDDUSKkAZ09cdHOWgrrR-9k=" alt=""></div>
                                                                        </div>
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                            <div class="avatar-icon"><i>+</i></div>
                                                                        </div>
                                                                    </div>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">This dot has an info state</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                        <div>
                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">This dot has a dark state</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-block text-center card-footer">
                                        <button class="btn-shadow btn-wide btn-pill btn btn-focus">
                                            <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">Badge</span>
                                            View All Messages
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pl-3 pb-1">
                                            <div class="widget-chart-flex">
                                                <div class="widget-numbers">
                                                    <div class="widget-chart-flex">
                                                        <div class="fsize-4">
                                                            <small class="opacity-5">$</small>
                                                            <span>874</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="widget-subheading mb-0 opacity-5">sales last month</h6></div>
                                        <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                            <div class="col-md-9">
                                                <div id="dashboard-sparklines-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-primary border-primary">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pl-3 pb-1">
                                            <div class="widget-chart-flex">
                                                <div class="widget-numbers">
                                                    <div class="widget-chart-flex">
                                                        <div class="fsize-4">
                                                            <small class="opacity-5">$</small>
                                                            <span>1283</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="widget-subheading mb-0 opacity-5">sales Income</h6></div>
                                        <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                            <div class="col-md-9">
                                                <div id="dashboard-sparklines-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-warning border-warning">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pl-3 pb-1">
                                            <div class="widget-chart-flex">
                                                <div class="widget-numbers">
                                                    <div class="widget-chart-flex">
                                                        <div class="fsize-4">
                                                            <small class="opacity-5">$</small>
                                                            <span>1286</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="widget-subheading mb-0 opacity-5">last month sales</h6></div>
                                        <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                            <div class="col-md-9">
                                                <div id="dashboard-sparklines-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-danger border-danger">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pl-3 pb-1">
                                            <div class="widget-chart-flex">
                                                <div class="widget-numbers">
                                                    <div class="widget-chart-flex">
                                                        <div class="fsize-4">
                                                            <small class="opacity-5">$</small>
                                                            <span>564</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="widget-subheading mb-0 opacity-5">total revenue</h6></div>
                                        <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                            <div class="col-md-9">
                                                <div id="dashboard-sparklines-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="card no-shadow bg-transparent no-border rm-borders mb-3">
                            <div class="card">
                                <div class="no-gutters row">
                                    <div class="col-md-12 col-lg-4">
                                        <ul class="list-group list-group-flush"><li class="bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Total Orders</div>
                                                                <div class="widget-subheading">Last year expenses</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-success">1896</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Clients</div>
                                                                <div class="widget-subheading">Total Clients Profit</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-primary">$12.6k</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul></div>
                                    <div class="col-md-12 col-lg-4">
                                        <ul class="list-group list-group-flush"><li class="bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Followers</div>
                                                                <div class="widget-subheading">People Interested</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-danger">45,9%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Products Sold</div>
                                                                <div class="widget-subheading">Total revenue streams</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-warning">$3M</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul></div>
                                    <div class="col-md-12 col-lg-4">
                                        <ul class="list-group list-group-flush"><li class="bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Total Orders</div>
                                                                <div class="widget-subheading">Last year expenses</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-success">1896</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Clients</div>
                                                                <div class="widget-subheading">Total Clients Profit</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-primary">$12.6k</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul></div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php }else {?>
                    <div class="tabs-animation">
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Income Report</h5>
                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                            <div style="height: 227px;">
                                                <canvas id="line-chart"></canvas></div>
                                        </div>
                                        <h5 class="card-title">Target Sales</h5>
                                        <div class="mt-3 row">
                                            <div class="col-sm-12 col-md-4">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-numbers text-dark">65%</div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-progress-wrapper mt-1">
                                                            <div class="progress-bar-xs progress-bar-animated-alt progress">
                                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                                                            </div>
                                                            <div class="progress-sub-label">
                                                                <div class="sub-label-left font-size-md">Sales</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-numbers text-dark">22%</div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-progress-wrapper mt-1">
                                                            <div class="progress-bar-xs progress-bar-animated-alt progress">
                                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%;"></div>
                                                            </div>
                                                            <div class="progress-sub-label">
                                                                <div class="sub-label-left font-size-md">Profiles</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-numbers text-dark">83%</div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-progress-wrapper mt-1">
                                                            <div class="progress-bar-xs progress-bar-animated-alt progress">
                                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%;"></div>
                                                            </div>
                                                            <div class="progress-sub-label">
                                                                <div class="sub-label-left font-size-md">Tickets</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="main-card mb-3 card">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-primary"></div>
                                                        <i class="lnr-cog text-primary"></i></div>
                                                    <div class="widget-numbers">45.8k</div>
                                                    <div class="widget-subheading">Total Views</div>
                                                    <div class="widget-description text-success">
                                                        <i class="fa fa-angle-up"></i>
                                                        <span class="pl-1">175.5%</span></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-info"></div>
                                                        <i class="lnr-graduation-hat text-info"></i>
                                                    </div>
                                                    <div class="widget-numbers">63.2k</div>
                                                    <div class="widget-subheading">Bugs Fixed</div>
                                                    <div class="widget-description text-info">
                                                        <i class="fa fa-arrow-right"></i>
                                                        <span class="pl-1">175.5%</span></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-danger"></div>
                                                        <i class="lnr-laptop-phone text-danger"></i>
                                                    </div>
                                                    <div class="widget-numbers">5.82k</div>
                                                    <div class="widget-subheading">Reports Submitted</div>
                                                    <div class="widget-description text-primary"><span class="pr-1">54.1%</span>
                                                        <i class="fa fa-angle-up"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover br-br">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-success"></div>
                                                        <i class="lnr-screen"></i></div>
                                                    <div class="widget-numbers">17.2k</div>
                                                    <div class="widget-subheading">Profiles</div>
                                                    <div class="widget-description text-warning"><span class="pr-1">175.5%</span>
                                                        <i class="fa fa-arrow-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Active Users
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus">Last Week</button>
                                                <button class="btn btn-focus">All Month</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover"><thead><tr><th class="text-center">#</th>
                                                <th>Name</th>
                                                <th class="text-center">City</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Sales</th>
                                                <th class="text-center">Actions</th>
                                            </tr></thead><tbody><tr><td class="text-center text-muted">#345</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="images/avatars-4.jpg" alt=""></div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">John Doe</div>
                                                                <div class="widget-subheading opacity-7">Web Developer</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">Madrid</td>
                                                <td class="text-center">
                                                    <div class="badge badge-warning">Pending</div>
                                                </td>
                                                <td class="text-center" style="width: 150px;">
                                                    <div class="pie-sparkline">2,4,6,9,4</div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr><tr><td class="text-center text-muted">#347</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="images/avatars-3.jpg" alt=""></div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Ruben Tillman</div>
                                                                <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">Berlin</td>
                                                <td class="text-center">
                                                    <div class="badge badge-success">Completed</div>
                                                </td>
                                                <td class="text-center" style="width: 150px;">
                                                    <div id="sparkline-chart4"></div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr><tr><td class="text-center text-muted">#321</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="images/avatars-2.jpg" alt=""></div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Elliot Huber</div>
                                                                <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">London</td>
                                                <td class="text-center">
                                                    <div class="badge badge-danger">In Progress</div>
                                                </td>
                                                <td class="text-center" style="width: 150px;">
                                                    <div id="sparkline-chart8"></div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr><tr><td class="text-center text-muted">#55</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="images/avatars-1.jpg" alt=""></div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Vinnie Wagstaff</div>
                                                                <div class="widget-subheading opacity-7">UI Designer</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">Amsterdam</td>
                                                <td class="text-center">
                                                    <div class="badge badge-info">On Hold</div>
                                                </td>
                                                <td class="text-center" style="width: 150px;">
                                                    <div id="sparkline-chart9"></div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr></tbody></table></div>
                                    <div class="d-block text-center card-footer">
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <h5 class="menu-header-title text-capitalize mb-3 fsize-3">Top Sellers Cards</h5>
                            <div role="group" class="mb-3 btn-group-lg btn-group">
                                <button type="button" class="btn-shadow active btn btn-primary">Hour</button>
                                <button type="button" class="btn-shadow  btn btn-primary">Day</button>
                                <button type="button" class="btn-shadow  btn btn-primary">Week</button>
                                <button type="button" class="btn-shadow  btn btn-primary">Month</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6 col-xl-4">
                                <div class="mb-3 profile-responsive card">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-dark">
                                            <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/abstract2.jpg');"></div>
                                            <div class="menu-header-content btn-pane-right">
                                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                                    <div class="avatar-icon rounded"><img src="images/avatars-3.jpg" alt="Avatar 5"></div>
                                                </div>
                                                <div>
                                                    <h5 class="menu-header-title">Jeff Walberg</h5>
                                                    <h6 class="menu-header-subtitle">Lead UX Developer</h6>
                                                </div>
                                                <div class="menu-header-btn-pane">
                                                    <button class="btn btn-success">View Profile</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush"><li class="list-group-item">
                                            <div class="widget-content pt-1 pl-0 pr-0">
                                                <div class="text-center">
                                                    <h5 class="widget-heading opacity-4 mb-0">Month Totals</h5>
                                                    <h6 class="mt-3 mb-3">
                                                            <span class="pr-2">
                                                            <b class="text-danger">12</b> new leads,
                                                            </span>
                                                        <span><b class="text-success">$56.24</b> in sales</span>
                                                    </h6>
                                                    <button class="btn-wide btn-pill btn btn-outline-primary">Full Report</button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-0 list-group-item">
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-square btn-transition br-bl btn btn-outline-link">
                                                            <i class="lnr-license btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                            View Profile
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-square btn-transition br-br btn btn-outline-link">
                                                            <i class="lnr-music-note btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                            Leads Generated
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul></div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xl-4">
                                <div class="mb-3 profile-responsive card">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-dark">
                                            <div class="menu-header-image opacity-4" style="background-image: url('assets/images/dropdown-header/city1.jpg');"></div>
                                            <div class="menu-header-content btn-pane-right">
                                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                                    <div class="avatar-icon rounded">
                                                        <img src="images/avatars-8.jpg" alt="Avatar 5"></div>
                                                </div>
                                                <div>
                                                    <h5 class="menu-header-title">John Rosenberg</h5>
                                                    <h6 class="menu-header-subtitle">Short profile description</h6>
                                                </div>
                                                <div class="menu-header-btn-pane">
                                                    <button type="button" class="btn-wide btn-shadow btn-pill btn btn-warning">Refresh</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush"><li class="p-0 list-group-item">
                                            <div class="widget-content">
                                                <div class="text-center">
                                                    <canvas id="doughnut-chart-2"></canvas></div>
                                            </div>
                                        </li>
                                        <li class="p-0 list-group-item">
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <div class="p-1">
                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                                <i class="lnr-sun text-primary opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                View Profile
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="p-1">
                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                                <i class="lnr-magic-wand text-primary opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                View Leads
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul></div>
                            </div>
                            <div class="col-sm-12 col-lg-12 col-xl-4">
                                <div class="mb-3 profile-responsive card">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-dark">
                                            <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/abstract3.jpg');"></div>
                                            <div class="menu-header-content btn-pane-right">
                                                <div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">
                                                    <div class="avatar-icon rounded">
                                                        <img src="images/avatars-1.jpg" alt="Avatar 5"></div>
                                                </div>
                                                <div>
                                                    <h5 class="menu-header-title">Ruben Tillman</h5>
                                                    <h6 class="menu-header-subtitle">Etiam sit amet orci eget</h6>
                                                </div>
                                                <div class="menu-header-btn-pane">
                                                    <button class="btn btn-success">View Profile</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush"><li class="list-group-item">
                                            <div class="widget-content pt-4 pb-4 pr-1 pl-1">
                                                <div class="text-center">
                                                    <h5 class="mb-0">
                                                            <span class="pr-1">
                                                                <b class="text-danger">12</b> new leads,
                                                            </span>
                                                        <span><b class="text-success">$56.24</b> in sales</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-0 list-group-item">
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <div class="p-1">
                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                                <i class="lnr-lighter text-dark opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                Automation
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="p-1">
                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                                <i class="lnr-construction text-danger opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                Reports
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="p-1">
                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                                                <i class="lnr-bus text-success opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                Activity
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="p-1">
                                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                                <i class="lnr-gift text-focus opacity-7 btn-icon-wrapper mb-2"> </i>
                                                                Settings
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul></div>
                            </div>
                        </div>
                    </div>
                   <?php } ?>
                </div>
               
                <?php $this->load->view('footer');?>
            </div>
    </div>
</div>
<?php $this->load->view('right_top');?>

<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts-main.87c0748b313a1dda75f5.js"></script></body></html>
