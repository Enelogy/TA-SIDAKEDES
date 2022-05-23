<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Sales Dashboard | Minton - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="../assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

		<!-- App css -->
		<link href="../assets/css/bootstrap-saas.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="../assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

		<link href="../assets/css/bootstrap-saas-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
		<link href="../assets/css/app-saas-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

		<!-- icons -->
		<link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>


    <body class="loading" data-layout-mode="two-column" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'></body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
    
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="d-none d-lg-block">
                            <form class="app-search">
                                <div class="app-search-box dropdown">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search..." id="top-search">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h5 class="text-overflow mb-2">Found <span class="text-danger">09</span> results</h5>
                                        </div>
            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-home mr-1"></i>
                                            <span>Analytics Report</span>
                                        </a>
            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-aperture mr-1"></i>
                                            <span>How can I help you?</span>
                                        </a>
                            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-settings mr-1"></i>
                                            <span>User profile settings</span>
                                        </a>

                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="media">
                                                    <img class="d-flex mr-2 rounded-circle" src="../assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                                    <div class="media-body">
                                                        <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                        <span class="font-12 mb-0">UI Designer</span>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="media">
                                                    <img class="d-flex mr-2 rounded-circle" src="../assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                                    <div class="media-body">
                                                        <h5 class="m-0 font-14">Jacob Deo</h5>
                                                        <span class="font-12 mb-0">Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
            
                                    </div>  
                                </div>
                            </form>
                        </li>
    
                        <li class="dropdown d-inline-block d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-right p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
    
                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>
    
                        <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-grid noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-right p-0">
    
                                <div class="p-2">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
    
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../assets/images/brands/g-suite.png" alt="G Suite">
                                                <span>G Suite</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </li>
    
                        <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="../assets/images/flags/us.jpg" alt="user-image" height="14">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="../assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="../assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="../assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="../assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
    
                            </div>
                        </li>
            
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-bell noti-icon"></i>
                                <span class="badge badge-danger rounded-circle noti-icon-badge">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">
    
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-right">
                                            <a href="" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>
    
                                <div class="noti-scroll" data-simplebar>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-soft-primary text-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Doug Dukes commented on Admin Dashboard
                                            <small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="../assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Mario Drummond</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="../assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-soft-warning text-warning">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-secondary">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>
    
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fe-arrow-right"></i>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="../assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    Nik Patel <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-account-circle-line"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-settings-3-line"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-wallet-line"></i>
                                    <span>My Wallet <span class="badge badge-success float-right">3</span> </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-lock-line"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-logout-box-line"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>
    
                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="../assets/images/logo-sm-dark.png" alt="" height="24">
                                <!-- <span class="logo-lg-text-light">Minton</span> -->
                            </span>
                            <span class="logo-lg">
                                <img src="../assets/images/logo-2-dark.png" alt="" height="20">
                                <!-- <span class="logo-lg-text-light">M</span> -->
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="../assets/images/logo-sm.png" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="../assets/images/logo-2-light.png" alt="" height="20">
                            </span>
                        </a>
                    </div>
    
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>   
            
                        <li class="dropdown d-none d-xl-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Create New
                                <i class="mdi mdi-chevron-down"></i> 
                            </a>
                            <div class="dropdown-menu">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-briefcase mr-1"></i>
                                    <span>New Projects</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>Create Users</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-bar-chart-line- mr-1"></i>
                                    <span>Revenue Report</span>
                                </a>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Settings</span>
                                </a>
    
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-headphones mr-1"></i>
                                    <span>Help & Support</span>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown dropdown-mega d-none d-xl-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Mega Menu
                                <i class="mdi mdi-chevron-down"></i> 
                            </a>
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="row">
                                    <div class="col-sm-8">
                            
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5 class="text-dark mt-0">UI Components</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">Widgets</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Nestable List</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Range Sliders</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Masonry Items</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Sweet Alerts</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Treeview Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Tour Page</a>
                                                    </li>
                                                </ul>
                                            </div>
    
                                            <div class="col-md-4">
                                                <h5 class="text-dark mt-0">Applications</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">eCommerce Pages</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">CRM Pages</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Email</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Calendar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Team Contacts</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Task Board</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Email Templates</a>
                                                    </li>
                                                </ul>
                                            </div>
    
                                            <div class="col-md-4">
                                                <h5 class="text-dark mt-0">Extra Pages</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">Left Sidebar with User</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Menu Collapsed</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Small Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">New Header Style</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Search Result</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Gallery Pages</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Maintenance & Coming Soon</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center mt-3">
                                            <h3 class="text-dark">Special Discount Sale!</h3>
                                            <h4>Save up to 70% off.</h4>
                                            <button class="btn btn-primary btn-rounded mt-3">Download Now</button>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" >

                    <div class="sidebar-content">
                        <div class="sidebar-icon-menu h-100" data-simplebar>
                            <!-- LOGO -->
                            <a href="index.html" class="logo">
                                <span>
                                    <img src="../assets/images/logo-sm.png" alt="" height="28">
                                </span>
                            </a>
                            <nav class="nav flex-column" id="two-col-sidenav-main">
                                <a class="nav-link active" href="#dashboard" data-toggle="tooltip" data-placement="right"
                                    title="Dashboard" data-trigger="hover">
                                    <i class="ri-dashboard-line"></i>
                                </a>
                                <a class="nav-link" href="#apps" data-toggle="tooltip" data-placement="right" title="Apps" data-trigger="hover">
                                    <i class="ri-apps-2-line"></i>
                                </a>
                                <a class="nav-link" href="#pages" data-toggle="tooltip" data-placement="right" title="Pages" data-trigger="hover">
                                    <i class="ri-pages-line"></i>
                                </a>
                                <a class="nav-link" href="#layouts" data-toggle="tooltip" data-placement="right" title="Layouts" data-trigger="hover">
                                    <i class="ri-layout-line"></i>
                                </a>
                                <a class="nav-link" href="#uielements" data-toggle="tooltip" data-placement="right" title="UI Elements" data-trigger="hover">
                                    <i class="ri-pencil-ruler-2-line"></i>
                                </a>
                                <a class="nav-link" href="#components" data-toggle="tooltip" data-placement="right"
                                    title="Components" data-trigger="hover">
                                    <i class="ri-stack-line"></i>
                                </a>
                                <a class="nav-link" href="widgets.html" data-toggle="tooltip" data-placement="right" title="Widgets" data-trigger="hover">
                                    <i class="ri-honour-line align-middle"></i>
                                </a>
                            </nav>
                        </div>
                        <!--- Sidemenu -->
                        <div class="sidebar-main-menu">
                            <div id="two-col-menu" class="h-100" data-simplebar>
                                <div class="twocolumn-menu-item d-block" id="dashboard">
                                    <div class="title-box">
                                        <h5 class="menu-title">Dashboards</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="index.html">Sales</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="dashboard-crm.html">CRM</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="dashboard-analytics.html">Analytics</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="twocolumn-menu-item" id="apps">
                                    <h5 class="menu-title">Apps</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-calendar.html">Calendar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-chat.html">Chat</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarEcommerce" data-toggle="collapse" class="nav-link">
                                                <span> Ecommerce </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarEcommerce">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="ecommerce-products.html">Products List</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-products-grid.html">Products Grid</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-product-detail.html">Product Detail</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-product-create.html">Create Product</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-customers.html">Customers</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-orders.html">Orders</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-orders-detail.html">Order Detail</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-sellers.html">Sellers</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-cart.html">Shopping Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="ecommerce-checkout.html">Checkout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                            
                                        <li class="nav-item">
                                            <a href="#sidebarEmail" data-toggle="collapse" class="nav-link">
                                                <span> Email </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarEmail">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="email-inbox.html">Inbox</a>
                                                    </li>
                                                    <li>
                                                        <a href="email-read.html">Read Email</a>
                                                    </li>
                                                    <li>
                                                        <a href="email-templates.html">Email Templates</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-companies.html">Companies</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarTasks" data-toggle="collapse" class="nav-link">
                                                <span> Tasks </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarTasks">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="task-list.html">List</a>
                                                    </li>
                                                    <li>
                                                        <a href="task-details.html">Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="task-kanban-board.html">Kanban Board</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarContacts" data-toggle="collapse" class="nav-link">
                                                <span> Contacts </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarContacts">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="contacts-list.html">Members List</a>
                                                    </li>
                                                    <li>
                                                        <a href="contacts-profile.html">Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                            
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-file-manager.html">File Manager</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-tickets.html">Tickets</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="twocolumn-menu-item" id="pages">
                                    <div class="title-box">
                                        <h5 class="menu-title">Pages</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-starter.html">Starter</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-timeline.html">Timeline</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-sitemap.html">Sitemap</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-invoice.html">Invoice</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-faqs.html">FAQs</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-search-results.html">Search Results</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-pricing.html">Pricing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-maintenance.html">Maintenance</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-coming-soon.html">Coming Soon</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="pages-gallery.html">Gallery</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarAuth" data-toggle="collapse" class="nav-link">
                                                    <span> Auth Pages </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarAuth">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="auth-login.html">Log In</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-login-2.html">Log In 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-register.html">Register</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-register-2.html">Register 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-signin-signup.html">Signin - Signup</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-signin-signup-2.html">Signin - Signup 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-recoverpw.html">Recover Password</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-recoverpw-2.html">Recover Password 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-lock-screen.html">Lock Screen</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-lock-screen-2.html">Lock Screen 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-logout.html">Logout</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-logout-2.html">Logout 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-confirm-mail.html">Confirm Mail</a>
                                                        </li>
                                                        <li>
                                                            <a href="auth-confirm-mail-2.html">Confirm Mail 2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarErrors" data-toggle="collapse" class="nav-link">
                                                    Error Pages <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarErrors">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="pages-404.html">Error 404</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-404-alt.html">Error 404-alt</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages-500.html">Error 500</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                
                                        </ul>
                                    </div>
                                </div>

                                <div class="twocolumn-menu-item" id="layouts">
                                    <div class="title-box">
                                        <h5 class="menu-title">Layouts</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="layouts-vertical.html">Vertical</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="layouts-horizontal.html">Horizontal</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="layouts-detached.html">Detached</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="layouts-preloader.html">Preloader</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="twocolumn-menu-item" id="uielements">
                                    <div class="title-box">
                                        <h5 class="menu-title">UI Elements</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-avatars.html">Avatars</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-buttons.html">Buttons</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-cards.html">Cards</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-carousel.html">Carousel</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-dropdowns.html">Dropdowns</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-video.html">Embed Video</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-general.html">General UI</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-grid.html">Grid</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-images.html">Images</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-list-group.html">List Group</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-modals.html">Modals</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-notifications.html">Notifications</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-portlets.html">Portlets</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-progress.html">Progress</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-ribbons.html">Ribbons</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-spinners.html">Spinners</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-tooltips-popovers.html">Tooltips & Popovers</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-typography.html">Typography</a>
                                            </li>
                                
                                        </ul>
                                    </div>
                                </div>

                                <div class="twocolumn-menu-item" id="components">
                                    <div class="title-box">
                                        <h5 class="menu-title">Components</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="#sidebarExtendedui" data-toggle="collapse" class="nav-link">
                                                    <span class="badge badge-info float-right">Hot</span>
                                                    <span> Extended UI </span>
                                                </a>
                                                <div class="collapse" id="sidebarExtendedui">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="extended-nestable.html">Nestable List</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-range-slider.html">Range Slider</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-sweet-alert.html">Sweet Alert</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-tour.html">Tour Page</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-treeview.html">Treeview</a>
                                                        </li>
                                                        <li>
                                                            <a href="extended-scrollspy.html">Scrollspy</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarIcons" data-toggle="collapse" class="nav-link">
                                                    <span> Icons </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarIcons">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="icons-feather.html">Feather</a>
                                                        </li>
                                                        <li>
                                                            <a href="icons-remix.html">Remix</a>
                                                        </li>
                                                        <li>
                                                            <a href="icons-boxicons.html">Boxicons</a>
                                                        </li>
                                                        <li>
                                                            <a href="icons-mdi.html">Material Design</a>
                                                        </li>
                                                        <li>
                                                            <a href="icons-font-awesome.html">Font Awesome 5</a>
                                                        </li>
                                                        <li>
                                                            <a href="icons-weather.html">Weather</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarForms" data-toggle="collapse" class="nav-link">
                                                    <span> Forms </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarForms">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="forms-elements.html">General Elements</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-advanced.html">Advanced</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-validation.html">Validation</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-pickers.html">Pickers</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-wizard.html">Wizard</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-masks.html">Masks</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-summernote.html">Summernote</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-quilljs.html">Quilljs Editor</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-file-uploads.html">File Uploads</a>
                                                        </li>
                                                        <li>
                                                            <a href="forms-x-editable.html">X Editable</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarTables" data-toggle="collapse" class="nav-link">
                                                    <span> Tables </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarTables">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="tables-basic.html">Basic Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="tables-datatables.html">Data Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="tables-editable.html">Editable Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="tables-responsive.html">Responsive Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="tables-footables.html">FooTable</a>
                                                        </li>
                                                        <li>
                                                            <a href="tables-tablesaw.html">Tablesaw Tables</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarCharts" data-toggle="collapse" class="nav-link">
                                                    <span> Charts </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarCharts">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="charts-flot.html">Flot Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-apex.html">Apex Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-morris.html">Morris Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-chartjs.html">Chartjs Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-c3.html">C3 Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-peity.html">Peity Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-chartist.html">Chartist Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-sparklines.html">Sparklines Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="charts-knob.html">Jquery Knob Charts</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarMaps" data-toggle="collapse" class="nav-link">
                                                    <span> Maps </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarMaps">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="maps-google.html">Google Maps</a>
                                                        </li>
                                                        <li>
                                                            <a href="maps-vector.html">Vector Maps</a>
                                                        </li>
                                                        <li>
                                                            <a href="maps-mapael.html">Mapael Maps</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarMultilevel" data-toggle="collapse" class="nav-link">
                                                    <span> Multi Level </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarMultilevel">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="#sidebarMultilevel2" data-toggle="collapse">
                                                                Second Level <span class="menu-arrow"></span>
                                                            </a>
                                                            <div class="collapse" id="sidebarMultilevel2">
                                                                <ul class="nav-second-level">
                                                                    <li>
                                                                        <a href="javascript: void(0);">Item 1</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript: void(0);">Item 2</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                
                                                        <li>
                                                            <a href="#sidebarMultilevel3" data-toggle="collapse">
                                                                Second Level 1
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- End Sidebar -->

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Welcome !</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Sales</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="knob-chart" dir="ltr">
                                                <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#6559cc"
                                                    data-bgColor="#ebefff" value="58"
                                                    data-skin="tron" data-angleOffset="0" data-readOnly=true
                                                    data-thickness=".15"/>
                                            </div>
                                            <div class="text-right">
                                                <h3 class="mb-1 mt-0"> <span data-plugin="counterup">268</span> </h3>
                                                <p class="text-muted mb-0">New Customers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="knob-chart" dir="ltr">
                                                <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#6559cc"
                                                    data-bgColor="#ebefff" value="80"
                                                    data-skin="tron" data-angleOffset="0" data-readOnly=true
                                                    data-thickness=".15"/>
                                            </div>
                                            <div class="text-right">
                                                <h3 class="mb-1 mt-0"> <span data-plugin="counterup">8574</span> </h3>
                                                <p class="text-muted mb-0">Online Orders</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="knob-chart" dir="ltr">
                                                <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#6559cc"
                                                    data-bgColor="#ebefff" value="77"
                                                    data-skin="tron" data-angleOffset="0" data-readOnly=true
                                                    data-thickness=".15"/>
                                            </div>
                                            <div class="text-right">
                                                <h3 class="mb-1 mt-0"> $<span data-plugin="counterup">958.25</span> </h3>
                                                <p class="text-muted mb-0">Revenue</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="knob-chart" dir="ltr">
                                                <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#6559cc"
                                                    data-bgColor="#ebefff" value="35"
                                                    data-skin="tron" data-angleOffset="0" data-readOnly=true
                                                    data-thickness=".15"/>
                                            </div>
                                            <div class="text-right">
                                                <h3 class="mb-1 mt-0"> $<span data-plugin="counterup">89.25</span> </h3>
                                                <p class="text-muted mb-1">Daily Average</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
    
                                        <h4 class="header-title">Revenue Report</h4>
    
                                        <div class="mt-3 text-center">

                                            <div class="row pt-2">
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                    <h4> $12,365</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                    <h4><i class="fe-arrow-down text-danger"></i> $365</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                    <h4><i class="fe-arrow-up text-success"></i> $8,501</h4>
                                                </div>
                                            </div>
                                            
                                            <div dir="ltr">
                                                <div id="revenue-report" class="apex-charts" data-colors="#6559cc,#e3eaef"></div>
                                            </div>
    
                                        </div>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
    
                                        <h4 class="header-title">Products Sales</h4>
    
                                        <div class="mt-3 text-center">

                                            <div class="row pt-2">
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                    <h4> $56,214</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                    <h4><i class="fe-arrow-up text-success"></i> $840</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                    <h4><i class="fe-arrow-down text-danger"></i> $7,845</h4>
                                                </div>
                                            </div>
                                            <div dir="ltr">
                                                <div id="products-sales" class="apex-charts" data-colors="#6559cc,#4e5995"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-xl-4 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title">Marketing Reports</h4>
                                        <p class="text-muted mb-0">1 Mar - 31 Mar Showing Data</p>
                                        
                                        <div dir="ltr">
                                            <div id="marketing-reports" class="apex-charts" data-colors="#6559cc,#4e5995,#f7b84b"></div>
                                        </div>
    
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <p class="text-muted mb-1">This Month</p>
                                                <h3 class="mt-0 font-20"><span class="align-middle">$120,254</span> <small class="badge badge-soft-warning font-12 align-middle">+15%</small></h3>
                                            </div>
    
                                            <div class="col-6">
                                                <p class="text-muted mb-1">Last Month</p>
                                                <h3 class="mt-0 font-20"><span class="align-middle">$98,741</span> <small class="badge badge-soft-primary font-12 align-middle">-5%</small></h3>
                                            </div>
                                        </div>
    
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false" aria-controls="cardCollpase4"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Revenue By Location</h4>

                                        <div id="cardCollpase4" class="collapse pt-3 show">
                                            <div id="world-map-markers" style="height: 433px"></div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false" aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Top Selling Products</h4>

                                        <div id="cardCollpase5" class="collapse pt-3 show">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-centered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Product Name</th>
                                                            <th>Price</th>
                                                            <th>Quantity</th>
                                                            <th>Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>ASOS Ridley High Waist</td>
                                                            <td>$79.49</td>
                                                            <td>82</td>
                                                            <td>$6,518.18</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Marco Lightweight Shirt</td>
                                                            <td>$128.50</td>
                                                            <td>37</td>
                                                            <td>$4,754.50</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Half Sleeve Shirt</td>
                                                            <td>$39.99</td>
                                                            <td>64</td>
                                                            <td>$2,559.36</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lightweight Jacket</td>
                                                            <td>$20.00</td>
                                                            <td>184</td>
                                                            <td>$3,680.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Marco Shoes</td>
                                                            <td>$28.49</td>
                                                            <td>69</td>
                                                            <td>$1,965.81</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ASOS Ridley High Waist</td>
                                                            <td>$79.49</td>
                                                            <td>82</td>
                                                            <td>$6,518.18</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Half Sleeve Shirt</td>
                                                            <td>$39.99</td>
                                                            <td>64</td>
                                                            <td>$2,559.36</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lightweight Jacket</td>
                                                            <td>$20.00</td>
                                                            <td>184</td>
                                                            <td>$3,680.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- end table responsive-->
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Revenue History</h4>
    
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-hover table-centered m-0">
    
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Marketplaces</th>
                                                        <th>Date</th>
                                                        <th>US Tax Hold</th>
                                                        <th>Payouts</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 font-weight-normal">Themes Market</h5>
                                                        </td>
        
                                                        <td>
                                                            Oct 15, 2020
                                                        </td>
                                                        
                                                        <td>
                                                            $125.23
                                                        </td>
    
                                                        <td>
                                                            $5848.68
                                                        </td>
        
                                                        <td>
                                                            <span class="badge badge-soft-secondary">Upcoming</span>
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>
    
                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 font-weight-normal">Freelance</h5>
                                                        </td>
        
                                                        <td>
                                                            Oct 12, 2020
                                                        </td>
    
                                                        <td>
                                                            $78.03
                                                        </td>
        
                                                        <td>
                                                            $1247.25
                                                        </td>
        
                                                        <td>
                                                            <span class="badge badge-soft-primary">Paid</span>
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>
    
                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 font-weight-normal">Share Holding</h5>
                                                        </td>
        
                                                        <td>
                                                            Oct 10, 2020
                                                        </td>
    
                                                        <td>
                                                            $358.24
                                                        </td>
        
                                                        <td>
                                                            $815.89
                                                        </td>
        
                                                        <td>
                                                            <span class="badge badge-soft-primary">Paid</span>
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>
    
                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 font-weight-normal">Wrap's Affiliates</h5>
                                                        </td>
        
                                                        <td>
                                                            Oct 03, 2020
                                                        </td>
    
                                                        <td>
                                                            $18.78
                                                        </td>
        
                                                        <td>
                                                            $248.75
                                                        </td>
        
                                                        <td>
                                                            <span class="badge badge-soft-danger">Overdue</span>
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>
    
                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 font-weight-normal">Marketing Revenue</h5>
                                                        </td>
        
                                                        <td>
                                                            Sep 21, 2020
                                                        </td>
    
                                                        <td>
                                                            $185.36
                                                        </td>
        
                                                        <td>
                                                            $978.21
                                                        </td>
        
                                                        <td>
                                                            <span class="badge badge-soft-secondary">Upcoming</span>
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>
    
                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 font-weight-normal">Advertise Revenue</h5>
                                                        </td>
        
                                                        <td>
                                                            Sep 15, 2020
                                                        </td>
    
                                                        <td>
                                                            $29.56
                                                        </td>
        
                                                        <td>
                                                            $358.10
                                                        </td>
        
                                                        <td>
                                                            <span class="badge badge-soft-primary">Paid</span>
                                                        </td>
        
                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-secondary"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>
    
                                                </tbody>
                                            </table>
                                        </div> <!-- end .table-responsive-->
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
    
                                        <h4 class="header-title">Projections Vs Actuals</h4>
    
                                        <div class="mt-3 text-center" dir="ltr">
    
                                            <div id="projections-actuals" class="apex-charts" data-colors="#6559cc,#4e5995,#9ba3d9,#e3eaef"></div>
    
                                            <div class="row mt-3">
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                    <h4>$8712</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                    <h4><i class="fe-arrow-up text-success"></i> $523</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                    <h4><i class="fe-arrow-down text-danger"></i> $965</h4>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Minton theme by <a href="">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
    
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link py-2" data-toggle="tab" href="#chat-tab" role="tab">
                            <i class="mdi mdi-message-text-outline d-block font-22 my-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" data-toggle="tab" href="#tasks-tab" role="tab">
                            <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 active" data-toggle="tab" href="#settings-tab" role="tab">
                            <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content pt-0">
                    <div class="tab-pane" id="chat-tab" role="tabpanel">
                
                        <form class="search-bar p-3">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>

                        <h6 class="font-weight-medium px-3 mt-2 text-uppercase">Group Chats</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-success"></i>
                                <span class="mb-0 mt-1">App Development</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-warning"></i>
                                <span class="mb-0 mt-1">Office Work</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-danger"></i>
                                <span class="mb-0 mt-1">Personal Group</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                <span class="mb-0 mt-1">Freelance</span>
                            </a>
                        </div>

                        <h6 class="font-weight-medium px-3 mt-3 text-uppercase">Favourites <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-right mdi mdi-plus-circle"></i></a></h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <span class="user-status"></span>
                                        <img src="../assets/images/users/avatar-10.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Andrew Mackie</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <span class="user-status"></span>
                                        <img src="../assets/images/users/avatar-1.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Rory Dalyell</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <span class="user-status busy"></span>
                                        <img src="../assets/images/users/avatar-9.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Jaxon Dunhill</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <h6 class="font-weight-medium px-3 mt-3 text-uppercase">Other Chats <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-right mdi mdi-plus-circle"></i></a></h6>

                        <div class="p-2 pb-4">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <span class="user-status online"></span>
                                        <img src="../assets/images/users/avatar-2.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Jackson Therry</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <span class="user-status away"></span>
                                        <img src="../assets/images/users/avatar-4.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Charles Deakin</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <span class="user-status online"></span>
                                        <img src="../assets/images/users/avatar-5.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Ryan Salting</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">If several languages coalesce the grammar of the resulting.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <span class="user-status online"></span>
                                        <img src="../assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Sean Howse</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <span class="user-status busy"></span>
                                        <img src="../assets/images/users/avatar-7.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Dean Coward</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <span class="user-status away"></span>
                                        <img src="../assets/images/users/avatar-8.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Hayley East</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="text-center mt-3">
                                <a href="javascript:void(0);" class="btn btn-sm btn-white">
                                    <i class="mdi mdi-spin mdi-loading mr-2"></i>
                                    Load more
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="tasks-tab" role="tabpanel">
                        <h6 class="font-weight-medium p-3 m-0 text-uppercase">Working Tasks</h6>
                        <div class="px-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">App Development<span class="float-right">75%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Database Repair<span class="float-right">37%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Backup Create<span class="float-right">52%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <h6 class="font-weight-medium px-3 mb-0 mt-4 text-uppercase">Upcoming Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Sales Reporting<span class="float-right">12%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Redesign Website<span class="float-right">67%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">New Admin Design<span class="float-right">84%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <div class="p-3 mt-2">
                            <a href="javascript: void(0);" class="btn btn-success btn-block waves-effect waves-light">Create Task</a>
                        </div>

                    </div>
                    <div class="tab-pane active" id="settings-tab" role="tabpanel">
                        <h6 class="font-weight-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                            <span class="d-block py-1">Theme Settings</span>
                        </h6>

                        <div class="p-3">
                            <div class="alert alert-warning" role="alert">
                                <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                            </div>

                            <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light"
                                    id="light-mode-check" checked />
                                <label class="custom-control-label" for="light-mode-check">Light Mode</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark"
                                    id="dark-mode-check" />
                                <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
                            </div>

                            <!-- Width -->
                            <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="width" value="fluid" id="fluid-check" checked />
                                <label class="custom-control-label" for="fluid-check">Fluid</label>
                            </div>
                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="width" value="boxed" id="boxed-check" />
                                <label class="custom-control-label" for="boxed-check">Boxed</label>
                            </div>

                            <!-- Topbar -->
                            <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="topbar-color" value="dark" id="darktopbar-check"
                                    checked />
                                <label class="custom-control-label" for="darktopbar-check">Dark</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="topbar-color" value="light" id="lighttopbar-check" />
                                <label class="custom-control-label" for="lighttopbar-check">Light</label>
                            </div>

                            <!-- Left Sidebar-->
                            <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="leftsidebar-color" value="light" id="light-check" checked />
                                <label class="custom-control-label" for="light-check">Light</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="leftsidebar-color" value="dark" id="dark-check" />
                                <label class="custom-control-label" for="dark-check">Dark</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="leftsidebar-color" value="brand" id="brand-check" />
                                <label class="custom-control-label" for="brand-check">Brand</label>
                            </div>

                            <div class="custom-control custom-switch mb-3">
                                <input type="radio" class="custom-control-input" name="leftsidebar-color" value="gradient" id="gradient-check" />
                                <label class="custom-control-label" for="gradient-check">Gradient</label>
                            </div>

                            <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

                            <a href="https://wrapbootstrap.com/theme/minton-admin-dashboard-landing-template-WB0858DB6?ref=coderthemes"
                                class="btn btn-danger btn-block mt-2" target="_blank"><i class="mdi mdi-basket mr-1"></i> Purchase Now</a>

                        </div>

                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="../assets/js/vendor.min.js"></script>

        <!-- KNOB JS -->
        <script src="../assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <!-- Apex js-->
        <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Plugins js-->
        <script src="../assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

        <!-- Dashboard init-->
        <script src="../assets/js/pages/dashboard-sales.init.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>
        
    </body>
</html>