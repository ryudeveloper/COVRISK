<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

?>
<!doctype html>
<html lang="en" dir="rtl">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Adminor-Bootstrap HTML Admin Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="bootstrap admin template, bootstrap dashboard, dashboard template, bootstrap dashboard, admin dashboard, bootstrap admin, html admin template, html dashboard template, bootstrap admin dashboard, themeforest admin template, admin panel template, bootstrap 4 admin template, template admin bootstrap 4, bootstrap dashboard template, dashboard design template">
    <link rel="icon" href="/assets/images/brand/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/brand/favicon.ico" />

    <!-- Title -->
    <title>adminor – Clean & Modern Responsive Bootstrap 4 admin dashboard HTML5 Template.</title>
    <link rel="stylesheet" href="/assets/fonts/fonts/font-awesome.min.css">

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Dashboard Css -->
    <link href="/assets/css-rtl/style.css" rel="stylesheet" />
    <link href="/assets/css-rtl/style-dark.css" rel="stylesheet" />

    <!--  Rating css-->
    <link rel="stylesheet" href="/assets/plugins/rating/css/ratings.css">
    <link rel="stylesheet" href="/assets/plugins/rating/css/rating-themes.css">

    <!-- c3.js Charts Plugin -->
    <link href="/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

    <!-- select2 Plugin -->
    <link href="/assets/plugins/select2/select2.min-dark.css" rel="stylesheet" />

    <!-- forn-wizard css-->
    <link href="/assets/plugins/forn-wizard/css/material-bootstrap-wizard-dark.css" rel="stylesheet" />
    <link href="/assets/plugins/forn-wizard/css/demo.css" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="/assets/plugins/p-scroll/p-scroll.css" rel="stylesheet" />

    <!---Font icons-->
    <link href="/assets/css-rtl/icons.css" rel="stylesheet" />

</head>

<body class="dark-theme">
    <div id="global-loader"></div>
    <div class="page">
        <div class="page-main">
            <div class="header">
                <div class="container">
                    <div class="d-flex">
                        <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
                        <a class="header-brand" href="index.html">
                            <img src="/assets/images/brand/logo.png" class="header-brand-img" alt="adminor logo">
                        </a>
                        <div class="d-flex order-lg-2 mr-auto header-right-icons header-search-icon">
                            <div class="p-2">
                                <form class="input-icon ">
                                    <div class="input-icon-addon">
                                        <i class="fe fe-search"></i>
                                    </div>
                                    <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                                </form>
                            </div>

                            <div class="dropdown d-none d-md-flex">
                                <a class="nav-link icon full-screen-link nav-link-bg">
                                    <i class="fa fa-expand" id="fullscreen-button"></i>
                                </a>
                            </div>

                            <div class="dropdown d-none d-md-flex">
                                <a class="nav-link icon" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="nav-unread bg-warning"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg">
                                            <i class="fa fa-thumbs-o-up"></i>
                                        </div>
                                        <div>
                                            <strong>Someone likes our posts.</strong>
                                            <div class="small text-muted">3 hours ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg">
                                            <i class="fa fa-commenting-o"></i>
                                        </div>
                                        <div>
                                            <strong> 3 New Comments</strong>
                                            <div class="small text-muted">5 hour ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <div class="notifyimg">
                                            <i class="fa fa-cogs"></i>
                                        </div>
                                        <div>
                                            <strong> Server Rebooted.</strong>
                                            <div class="small text-muted">45 mintues ago</div>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item text-center">View all Notification</a>
                                </div>
                            </div>
                            <div class="dropdown d-none d-md-flex">
                                <a class="nav-link icon text-center" data-toggle="dropdown">
                                    <i class="icon icon-speech"></i>
                                    <span class=" nav-unread badge badge-info badge-pill">2</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
                                    <a href="#" class="dropdown-item text-center">2 New Messages</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <span class="avatar brround ml-3 align-self-center cover-image" data-image-src="/assets/images/faces/male/41.jpg"></span>
                                        <div>
                                            <strong>Madeleine</strong> Hey! there I' am available....
                                            <div class="small text-muted">3 hours ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <span class="avatar brround ml-3 align-self-center cover-image" data-image-src="/assets/images/faces/female/1.jpg"></span>
                                        <div>
                                            <strong>Anthony</strong> New product Launching...
                                            <div class="small text-muted">5 hour ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex pb-3">
                                        <span class="avatar brround ml-3 align-self-center cover-image" data-image-src="/assets/images/faces/female/18.jpg"></span>
                                        <div>
                                            <strong>Olivia</strong> New Schedule Realease......
                                            <div class="small text-muted">45 mintues ago</div>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item text-center">See all Messages</a>
                                </div>
                            </div>
                            <div class="dropdown d-none d-md-flex ">
                                <a class="nav-link icon " data-toggle="dropdown">
                                    <i class="fe fe-grid floating"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
                                    <ul class="drop-icon-wrap p-1">
                                        <li>
                                            <a href="email.html" class="drop-icon-item">
                                                <i class="fe fe-mail text-dark"></i>
                                                <span class="block"> E-mail</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="calendar2.html" class="drop-icon-item">
                                                <i class="fe fe-calendar text-dark"></i>
                                                <span class="block">calendar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="maps.html" class="drop-icon-item">
                                                <i class="fe fe-map-pin text-dark"></i>
                                                <span class="block">map</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html" class="drop-icon-item">
                                                <i class="fe fe-shopping-cart text-dark"></i>
                                                <span class="block">Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="chat.html" class="drop-icon-item">
                                                <i class="fe fe-message-square text-dark"></i>
                                                <span class="block">chat</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profile.html" class="drop-icon-item">
                                                <i class="fe fe-phone-outgoing text-dark"></i>
                                                <span class="block">contact</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item text-center">View all</a>
                                </div>
                            </div>
                            <div class="dropdown text-center selector">
                                <a href="#" class="nav-link leading-none" data-toggle="dropdown">
                                    <span class="avatar avatar-sm brround cover-image" data-image-src="/assets/images/faces/female/25.jpg"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow ">
                                    <div class="text-center">
                                        <a href="#" class="dropdown-item text-center font-weight-sembold user" data-toggle="dropdown">Joyce Stewart</a>
                                        <span class="text-center user-semi-title text-dark">web designer</span>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <span class="float-left"><span class="badge badge-primary">6</span></span>
                                        <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                                    </a>
                                    <a class="dropdown-item" href="login.html">
                                        <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Horizontal-menu -->
            <div class="sticky">
                <div class="horizontal-main hor-menu clearfix">
                    <div class="horizontal-mainwrapper container clearfix">
                        <nav class="horizontalMenu clearfix">
                            <ul class="horizontalMenu-list">
                                <li aria-haspopup="true">
                                    <a href="#" class="sub-icon"><i class="fa fa-desktop hor-icon"></i>Dashboard<i class="fa fa-angle-down horizontal-icon"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Dashboard 1</a></li>
                                        <li><a href="index2.html">Dashboard 2</a></li>
                                        <li><a href="index3.html">Dashboard 3</a></li>
                                        <li><a href="index4.html">Dashboard 4</a></li>
                                        <li><a href="index5.html">Dashboard 5</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="#" class="sub-icon"><i class="fa fa-area-chart hor-icon"></i>Charts<i class="fa fa-angle-down horizontal-icon"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="chart-chartist.html">Chartjs Charts</a></li>
                                        <li><a href="chart-echart.html">Echart Charts</a></li>
                                        <li><a href="chart-flot.html">Flot Charts</a></li>
                                        <li><a href="chart-nvd3.html">Nvd3 Charts</a></li>
                                        <li><a href="chart-morris.html">Morris Charts</a></li>
                                        <li aria-haspopup="true" class="sub-menu-sub"><a href="#">C3 Charts</a>
                                            <ul class="sub-menu">
                                                <li aria-haspopup="true"><a href="charts.html">C3 Bar Charts</a></li>
                                                <li aria-haspopup="true"><a href="chart-line.html">C3 Line Charts</a></li>
                                                <li aria-haspopup="true"><a href="chart-donut.html">C3 Donut Charts</a></li>
                                                <li aria-haspopup="true"><a href="chart-pie.html">C3 Pie charts</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="#" class="sub-icon"><i class="fa fa-tachometer hor-icon"></i>UI Design<i class="fa fa-angle-down horizontal-icon"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="widgets.html">Widgets</a></li>
                                        <li><a href="cards.html">Cards design</a></li>
                                        <li><a href="chat.html">Default Chat</a></li>
                                        <li><a href="notify.html">Notifications</a></li>
                                        <li><a href="sweetalert.html">Sweet alerts</a></li>
                                        <li><a href="rangeslider.html">Range slider</a></li>
                                        <li><a href="scroll.html">Content Scroll bar</a></li>
                                        <li><a href="counters.html">Counters</a></li>
                                        <li><a href="rating.html">Rating</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="#" class="sub-icon"><i class="mdi mdi-buffer hor-icon"></i>UI Elements<i class="fa fa-angle-down horizontal-icon"></i></a>
                                    <div class="horizontal-megamenu clearfix">
                                        <div class="container">
                                            <div class="mega-menubg">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                        <!-- <h3 class="fs-14 font-weight-bold mb-1">Basic Elements</h3> -->
                                                        <ul>
                                                            <li aria-haspopup="true"><a href="alerts.html">Alerts</a></li>
                                                            <li aria-haspopup="true"><a href="buttons.html">Buttons</a></li>
                                                            <li aria-haspopup="true"><a href="colors.html">Colors</a></li>
                                                            <li aria-haspopup="true"><a href="avatarsquare.html">Avatar-Square</a></li>
                                                            <li aria-haspopup="true"><a href="avatar-round.html">Avatar-Rounded</a></li>
                                                            <li aria-haspopup="true"><a href="avatar-radius.html">Avatar-Radius</a></li>
                                                            <li aria-haspopup="true"><a href="dropdown.html">Drop downs</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                        <ul>
                                                            <li aria-haspopup="true"><a href="list.html">List</a></li>
                                                            <li aria-haspopup="true"><a href="tags.html">Tags</a></li>
                                                            <li aria-haspopup="true"><a href="pagination.html">Pagination</a></li>
                                                            <li aria-haspopup="true"><a href="navigation.html">Navigation</a></li>
                                                            <li aria-haspopup="true"><a href="typography.html">Typography</a></li>
                                                            <li aria-haspopup="true"><a href="breadcrumbs.html">Breadcrumbs</a></li>
                                                            <li aria-haspopup="true"><a href="badge.html">Badges</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                        <ul>
                                                            <li aria-haspopup="true"><a href="jumbotron.html">Jumbotron</a></li>
                                                            <li aria-haspopup="true"><a href="panels.html">Panels</a></li>
                                                            <li aria-haspopup="true"><a href="thumbnails.html">Thumbnails</a></li>
                                                            <li aria-haspopup="true"><a href="mediaobject.html">Media Object</a></li>
                                                            <li aria-haspopup="true"><a href="accordion.html">Accordions</a></li>
                                                            <li aria-haspopup="true"><a href="tabs.html">Tabs</a></li>
                                                            <li aria-haspopup="true"><a href="chart.html">Charts</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                        <ul>
                                                            <li aria-haspopup="true"><a href="modal.html">Modal</a></li>
                                                            <li aria-haspopup="true"><a href="tooltipandpopover.html">Tooltip and popover</a></li>
                                                            <li aria-haspopup="true"><a href="progress.html">Progress</a></li>
                                                            <li aria-haspopup="true"><a href="carousel.html">Carousels</a></li>
                                                            <li aria-haspopup="true"><a href="headers.html">Headers </a></li>
                                                            <li aria-haspopup="true"><a href="footers.html">Footers </a></li>
                                                            <li aria-haspopup="true"><a href="loaders.html">Loaders</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="#" class="sub-icon"><i class="mdi mdi-file hor-icon"></i>Pages <i class="fa fa-angle-down horizontal-icon"></i></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Profile</a>
                                            <ul class="sub-menu">
                                                <li aria-haspopup="true"><a href="profile.html">Profile</a></li>
                                                <li aria-haspopup="true"><a href="editprofile.html">Edit Profile</a></li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Email</a>
                                            <ul class="sub-menu">
                                                <li aria-haspopup="true"><a href="email.html">Email</a></li>
                                                <li aria-haspopup="true"><a href="emailservices.html">Email Inbox</a></li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="sub-menu-sub"><a href="#">E-commerce</a>
                                            <ul class="sub-menu">
                                                <li aria-haspopup="true"><a href="shop.html">Products</a></li>
                                                <li aria-haspopup="true"><a href="shop-description.html">Product Details</a></li>
                                                <li aria-haspopup="true"><a href="cart.html">Shopping Cart</a></li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="sub-menu-sub"><a href="#">User Pages</a>
                                            <ul class="sub-menu">
                                                <li aria-haspopup="true"><a href="login.html">Login</a></li>
                                                <li aria-haspopup="true"><a href="register.html">Register</a></li>
                                                <li aria-haspopup="true"><a href="forgot-password.html">Forgot password</a></li>
                                                <li aria-haspopup="true"><a href="lockscreen.html">Lock screen</a></li>
                                                <li aria-haspopup="true"><a href="empty.html">Empty Page</a></li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true"><a href="construction.html">Under Construction</a></li>
                                        <li aria-haspopup="true"><a href="gallery.html">Gallery</a></li>
                                        <li aria-haspopup="true"><a href="about.html">About Company </a></li>
                                        <li aria-haspopup="true"><a href="company-history.html">Company History </a></li>
                                        <li aria-haspopup="true"><a href="services.html">Services </a></li>
                                        <li aria-haspopup="true"><a href="faq.html">FAQS </a></li>
                                        <li aria-haspopup="true"><a href="terms.html">Terms </a></li>
                                        <li aria-haspopup="true"><a href="invoice.html">Invoice</a></li>
                                        <li aria-haspopup="true"><a href="pricing.html">Pricing Table </a></li>
                                        <li aria-haspopup="true"><a href="blog.html">Blog </a></li>
                                        <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Error Pages</a>
                                            <ul class="sub-menu">
                                                <li aria-haspopup="true"><a href="400.html">400 Error</a></li>
                                                <li aria-haspopup="true"><a href="401.html">401 Error</a></li>
                                                <li aria-haspopup="true"><a href="403.html">403 Error</a></li>
                                                <li aria-haspopup="true"><a href="404.html">404 Error</a></li>
                                                <li aria-haspopup="true"><a href="500.html">500 Error</a></li>
                                                <li aria-haspopup="true"><a href="503.html">503 Error</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="#" class="sub-icon"><i class="mdi mdi-arrange-send-backward hor-icon"></i>Forms <i class="fa fa-angle-down horizontal-icon"></i></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="form-elements.html">Form Elements</a></li>
                                        <li aria-haspopup="true"><a href="form-wizard.html">Wizard Elements</a></li>
                                        <li aria-haspopup="true"><a href="wysiwyag.html">Text Editor</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="#" class="sub-icon"><i class="fa fa-cogs hor-icon"></i>Components<i class="fa fa-angle-down horizontal-icon"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="maps.html">Maps</a></li>
                                        <li aria-haspopup="true"><a href="crypto-currencies.html">Crypto-currencies</a></li>
                                        <li aria-haspopup="true"><a href="users-list.html">User List</a></li>
                                        <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Calendar</a>
                                            <ul class="sub-menu">
                                                <li aria-haspopup="true"><a href="calendar.html">Default calendar</a></li>
                                                <li aria-haspopup="true"><a href="calendar2.html">Full calendar</a></li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Tables</a>
                                            <ul class="sub-menu">
                                                <li aria-haspopup="true"><a href="tables.html">Default table</a></li>
                                                <li aria-haspopup="true"><a href="datatable.html">Data Table</a></li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true"><a href="search.html">Search page</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true">
                                    <a href="#" class="sub-icon"><i class="fa fa-bandcamp hor-icon"></i>Icons<i class="fa fa-angle-down horizontal-icon"></i></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="icons.html">Font Awesome</a></li>
                                        <li aria-haspopup="true"><a href="icons2.html">Material Design Icons</a></li>
                                        <li aria-haspopup="true"><a href="icons3.html">Simple Line Iocns</a></li>
                                        <li aria-haspopup="true"><a href="icons4.html">Feather Icons</a></li>
                                        <li aria-haspopup="true"><a href="icons5.html">Ionic Icons</a></li>
                                        <li aria-haspopup="true"><a href="icons6.html">Flag Icons</a></li>
                                        <li aria-haspopup="true"><a href="icons7.html">pe7 Icons</a></li>
                                        <li aria-haspopup="true"><a href="icons8.html">Themify Icons</a></li>
                                        <li aria-haspopup="true"><a href="icons9.html">Typicons Icons</a></li>
                                        <li aria-haspopup="true"><a href="icons10.html">Weather Icons</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!--Nav end -->
                    </div>
                </div>
            </div>
            <!-- Horizontal-menu end -->
            <div>
                <div class="container">
                    <div class="page-header">
                        <h4 class="page-title">Form Wizard</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Wizard</li>
                        </ol>
                    </div>
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>

        <!--footer-->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
                        Copyright © 2021 <a href="#">COVRISK</a>. Developed by <a href="#">Miquéias</a> <a href="https://www.spaceappschallenge.org/" target="_blank">for NASA SPACE APPS</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer-->
    </div>

    <!-- Dashboard js -->
    <script src="/assets/js/vendors/jquery.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min-rtl.js"></script>
    <script src="/assets/js/vendors/jquery.sparkline.min.js"></script>
    <script src="/assets/js/vendors/selectize.min.js"></script>
    <script src="/assets/js/vendors/jquery.tablesorter.min.js"></script>
    <script src="/assets/js/vendors/circle-progress.min.js"></script>

    <!--rating -->
    <script src="/assets/plugins/rating/js/jquery.barrating.js"></script>
    <script src="/assets/plugins/rating/js/custom-ratings.js"></script>

    <!--  Horizontal-menu js -->
    <script src="/assets/plugins/horizontal-menu/horizontal-menu.js"></script>

    <!--  Sticky js -->
    <script src="/assets/js/sticky.js"></script>

    <!-- forn-wizard js-->
    <script src="/assets/plugins/forn-wizard/js/material-bootstrap-wizard-rtl.js"></script>
    <script src="/assets/plugins/forn-wizard/js/jquery.validate.min.js"></script>
    <script src="/assets/plugins/forn-wizard/js/jquery.bootstrap.js"></script>

    <!--Select2 js -->
    <script src="/assets/plugins/select2/select2.full.min.js"></script>

    <!-- Custom scroll bar Js-->
    <script src="/assets/plugins/p-scroll/p-scroll.js"></script>

    <!-- Custom Js-->
    <script src="/assets/js/custom-dark.js"></script>
    <?= $this->fetch('js') ?>
</body>

</html>