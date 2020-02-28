<!DOCTYPE html>
<html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Analytics Dashboard</title>
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
                                <div>Analytics Dashboard
                                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                                        Buttons
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column"><li class="nav-item">
                                                <a class="nav-link" href="architectui-html-pro.html">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span>
                                                        Inbox
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="architectui-html-pro.html">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Book
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="architectui-html-pro.html">
                                                    <i class="nav-link-icon lnr-picture"></i>
                                                    <span>
                                                        Picture
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a disabled class="nav-link disabled" href="architectui-html-pro.html">
                                                    <i class="nav-link-icon lnr-file-empty"></i>
                                                    <span>
                                                        File Disabled
                                                    </span>
                                                </a>
                                            </li>
                                        </ul></div>
                                </div>
                            </div>    </div>
                    </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav"><li class="nav-item">
                            <a role="tab" class="nav-link active" href="index.html">
                                <span>Variation 1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" href="analytics-variation.html">
                                <span>Variation 2</span>
                            </a>
                        </li>
                    </ul><div class="tabs-animation">
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
                        <div class="card mb-3">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Easy Dynamic Tables</div>
                                <div class="btn-actions-pane-right actions-icon-btn">
                                    <div class="btn-group dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-menu btn-icon-wrapper"></i></button>
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
                            <div class="card-body">
                                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered"><thead><tr><th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr></thead><tbody><tr><td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr><tr><td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr><tr><td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr><td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr><tr><td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr><td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr><td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr><tr><td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr><tr><td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr><tr><td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr><tr><td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr><tr><td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr><tr><td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr><tr><td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr><tr><td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                    </tr><tr><td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr><tr><td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr><tr><td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr><tr><td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr><td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr><tr><td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                    </tr><tr><td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                    </tr><tr><td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr><tr><td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sidney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                    </tr><tr><td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr><tr><td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
                                    </tr><tr><td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                    </tr><tr><td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr><tr><td>Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
                                    </tr><tr><td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                    </tr><tr><td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sidney</td>
                                        <td>37</td>
                                        <td>2011/06/02</td>
                                        <td>$95,400</td>
                                    </tr><tr><td>Suki Burks</td>
                                        <td>Developer</td>
                                        <td>London</td>
                                        <td>53</td>
                                        <td>2009/10/22</td>
                                        <td>$114,500</td>
                                    </tr><tr><td>Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>2011/05/07</td>
                                        <td>$145,000</td>
                                    </tr><tr><td>Gavin Cortez</td>
                                        <td>Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>2008/10/26</td>
                                        <td>$235,500</td>
                                    </tr><tr><td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                    </tr><tr><td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/12/09</td>
                                        <td>$85,675</td>
                                    </tr><tr><td>Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>2008/12/16</td>
                                        <td>$164,500</td>
                                    </tr><tr><td>Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>2010/02/12</td>
                                        <td>$109,850</td>
                                    </tr><tr><td>Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr><tr><td>Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>2008/12/11</td>
                                        <td>$136,200</td>
                                    </tr><tr><td>Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                    </tr><tr><td>Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                    </tr><tr><td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr><tr><td>Sakura Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>37</td>
                                        <td>2009/08/19</td>
                                        <td>$139,575</td>
                                    </tr><tr><td>Thor Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2013/08/11</td>
                                        <td>$98,540</td>
                                    </tr><tr><td>Finn Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/07/07</td>
                                        <td>$87,500</td>
                                    </tr><tr><td>Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr><tr><td>Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                    </tr><tr><td>Zorita Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>56</td>
                                        <td>2012/06/01</td>
                                        <td>$115,000</td>
                                    </tr><tr><td>Jennifer Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>43</td>
                                        <td>2013/02/01</td>
                                        <td>$75,650</td>
                                    </tr><tr><td>Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr><tr><td>Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2011/03/21</td>
                                        <td>$356,250</td>
                                    </tr><tr><td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                    </tr><tr><td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr><tr><td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                    </tr><tr><td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr><tr><td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr></tbody><tfoot><tr><th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr></tfoot></table></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="card-hover-shadow-2x mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-database icon-gradient bg-malibu-beach"> </i>Tasks List</div>
                                        <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                            <div class="btn-group dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-menu btn-icon-wrapper"></i></button>
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
                                            <div class="p-2">
                                                <ul class="todo-list-wrapper list-group list-group-flush"><li class="list-group-item">
                                                        <div class="todo-indicator bg-warning"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox12"> </label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Wash the car
                                                                        <div class="badge badge-danger ml-2">Rejected</div>
                                                                    </div>
                                                                    <div class="widget-subheading"><i>Written by Bob</i></div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-focus"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox1"> </label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Task with dropdown menu</div>
                                                                    <div class="widget-subheading">
                                                                        <div>By Johnny
                                                                            <div class="badge badge-pill badge-info ml-2">NEW</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <div class="d-inline-block dropdown">
                                                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                                                            <i class="fa fa-ellipsis-h"></i>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                                            <button type="button" disabled tabindex="-1" class="disabled dropdown-item">Action</button>
                                                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                            <div tabindex="-1" class="dropdown-divider"></div>
                                                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-primary"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox4"> </label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left flex2">
                                                                    <div class="widget-heading">Badge on the right task</div>
                                                                    <div class="widget-subheading">This task has show on hover actions!</div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="widget-content-right ml-3">
                                                                    <div class="badge badge-pill badge-success">Latest Task</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-info"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox2"> </label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left mr-3">
                                                                    <div class="widget-content-left">
                                                                        <img width="42" class="rounded" src="images/avatars-1.jpg" alt=""></div>
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Go grocery shopping</div>
                                                                    <div class="widget-subheading">A short description for this todo item</div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-success"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox3"> </label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left flex2">
                                                                    <div class="widget-heading">Development Task</div>
                                                                    <div class="widget-subheading">Finish React ToDo List App</div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="badge badge-warning mr-2">69</div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-warning"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox12"> </label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Wash the car
                                                                        <div class="badge badge-danger ml-2">Rejected</div>
                                                                    </div>
                                                                    <div class="widget-subheading"><i>Written by Bob</i></div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-focus"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox1"> </label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Task with dropdown menu</div>
                                                                    <div class="widget-subheading">
                                                                        <div>By Johnny
                                                                            <div class="badge badge-pill badge-info ml-2">NEW</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <div class="d-inline-block dropdown">
                                                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                                                            <i class="fa fa-ellipsis-h"></i>
                                                                        </button>
                                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                                            <button type="button" disabled tabindex="-1" class="disabled dropdown-item">Action</button>
                                                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                            <div tabindex="-1" class="dropdown-divider"></div>
                                                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-primary"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox4"> </label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left flex2">
                                                                    <div class="widget-heading">Badge on the right task</div>
                                                                    <div class="widget-subheading">This task has show on hover actions!</div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="widget-content-right ml-3">
                                                                    <div class="badge badge-pill badge-success">Latest Task</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-info"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox2"> </label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left mr-3">
                                                                    <div class="widget-content-left">
                                                                        <img width="42" class="rounded" src="images/avatars-1.jpg" alt=""></div>
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Go grocery shopping</div>
                                                                    <div class="widget-subheading">A short description for this todo item</div>
                                                                </div>
                                                                <div class="widget-content-right widget-content-actions">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="todo-indicator bg-success"></div>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-2">
                                                                    <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox3"> </label>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left flex2">
                                                                    <div class="widget-heading">Development Task</div>
                                                                    <div class="widget-subheading">Finish React ToDo List App</div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="badge badge-warning mr-2">69</div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <button class="border-0 btn-transition btn btn-outline-success">
                                                                        <i class="fa fa-check"></i>
                                                                    </button>
                                                                    <button class="border-0 btn-transition btn btn-outline-danger">
                                                                        <i class="fa fa-trash-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul></div>
                                        </div>
                                    </div>
                                    <div class="d-block text-right card-footer">
                                        <button class="mr-2 btn btn-link btn-sm">Cancel</button>
                                        <button class="btn btn-primary">Add Task</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="card-hover-shadow-2x mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-printer icon-gradient bg-ripe-malin"> </i>Chat Box</div>
                                        <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                            <div class="btn-group dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-menu btn-icon-wrapper"></i></button>
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
                                            <div class="p-2">
                                                <div class="chat-wrapper p-1">
                                                    <div class="chat-box-wrapper">
                                                        <div>
                                                            <div class="avatar-icon-wrapper mr-1">
                                                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                <div class="avatar-icon avatar-icon-lg rounded">
                                                                    <img src="images/avatars-2.jpg" alt=""></div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="chat-box">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</div>
                                                            <small class="opacity-6">
                                                                <i class="fa fa-calendar-alt mr-1"></i>
                                                                11:01 AM | Yesterday
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="float-right">
                                                        <div class="chat-box-wrapper chat-box-wrapper-right">
                                                            <div>
                                                                <div class="chat-box">Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</div>
                                                                <small class="opacity-6">
                                                                    <i class="fa fa-calendar-alt mr-1"></i>
                                                                    11:01 AM | Yesterday
                                                                </small>
                                                            </div>
                                                            <div>
                                                                <div class="avatar-icon-wrapper ml-1">
                                                                    <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                    <div class="avatar-icon avatar-icon-lg rounded">
                                                                        <img src="images/avatars-3.jpg" alt=""></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-box-wrapper">
                                                        <div>
                                                            <div class="avatar-icon-wrapper mr-1">
                                                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                <div class="avatar-icon avatar-icon-lg rounded">
                                                                    <img src="images/avatars-2.jpg" alt=""></div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="chat-box">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</div>
                                                            <small class="opacity-6">
                                                                <i class="fa fa-calendar-alt mr-1"></i>
                                                                11:01 AM | Yesterday
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="float-right">
                                                        <div class="chat-box-wrapper chat-box-wrapper-right">
                                                            <div>
                                                                <div class="chat-box">Denouncing pleasure and praising pain was born and I will give you a complete account.</div>
                                                                <small class="opacity-6">
                                                                    <i class="fa fa-calendar-alt mr-1"></i>
                                                                    11:01 AM | Yesterday
                                                                </small>
                                                            </div>
                                                            <div>
                                                                <div class="avatar-icon-wrapper ml-1">
                                                                    <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                    <div class="avatar-icon avatar-icon-lg rounded">
                                                                        <img src="images/avatars-2.jpg" alt=""></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="float-right">
                                                        <div class="chat-box-wrapper chat-box-wrapper-right">
                                                            <div>
                                                                <div class="chat-box">The master-builder of human happiness.</div>
                                                                <small class="opacity-6">
                                                                    <i class="fa fa-calendar-alt mr-1"></i>
                                                                    11:01 AM | Yesterday
                                                                </small>
                                                            </div>
                                                            <div>
                                                                <div class="avatar-icon-wrapper ml-1">
                                                                    <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                                    <div class="avatar-icon avatar-icon-lg rounded">
                                                                        <img src="images/avatars-2.jpg" alt=""></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <input placeholder="Write here and hit enter to send..." type="text" class="form-control-sm form-control"></div>
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
                </div>
               
                <?php $this->load->view('footer');?>
            </div>
    </div>
</div>
<?php $this->load->view('right_top');?>

<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="<?php echo base_url();?>assets/js/scripts-main.87c0748b313a1dda75f5.js"></script></body></html>
