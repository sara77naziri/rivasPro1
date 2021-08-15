<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link href="/client/assets//img/favicon.png" rel="icon">

    <link rel="stylesheet" href="/client/assets//css/bootstrap.min.css">

    <link rel="stylesheet" href="/client/assets//plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/client/assets//plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="/client/assets//css/style.css">

    <!--[if lt IE 9]>
    <script src="/client/assets//js/html5shiv.min.js"></script>
    <script src="/client/assets//js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="main-wrapper">

    <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
                </a>
                <a href="index.html" class="navbar-brand logo">
                    <img src="/client/assets//img/logo.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.html" class="menu-logo">
                        <img src="/client/assets//img/logo.png" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu">
                        <a href="#"> services <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="index.html">service1</a></li>

                        </ul>
                    </li>

                    <li class="has-submenu active">
                        <a href="#">beautifiers panel <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="active"><a href="doctor-dashboard.html">Dashboard</a></li>

                            <li><a href="appointments.html">Appointments</a></li>

                            <li><a href="schedule-timings.html">Schedule Timing</a></li>

                            <li><a href="my-patients.html">customer List</a></li>

                            <li><a href="doctor-profile-settings.html">Profile</a></li>

                            <li class="has-submenu">
                                <a href="services">Blog</a>
                                <ul class="submenu">
                                    <!--@foreach-->
                                    <li><a href="doctor-blog.html">haircut</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">Bookings <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="booking.html">Booking</a></li>
                            <li><a href="calendar.html">Calendar</a></li>

                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">invoices <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">

                            <li class="has-submenu">
                                <a href="invoices.html">Invoices</a>
                                <ul class="submenu">
                                    <li><a href="invoices.html">Invoices</a></li>
                                </ul>
                            </li>
                            <li><a href="blank-page.html">Starter Page</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#" target="_blank">Admin <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="admin/index.html" target="_blank">Admin</a></li>
                            <li><a href="pharmacy/index.html" target="_blank">Pharmacy Admin</a></li>
                        </ul>
                    </li>
                    <li class="login-link">
                        <a href="login.html">Login / Signup</a>
                    </li>
                </ul>
            </div>

            <ul class="nav header-navbar-rht">
                <li class="nav-item contact-item">
                    <div class="header-contact-img">
                        <i class="far fa-hospital"></i>
                    </div>
                    <div class="header-contact-detail">
                        <p class="contact-header">Contact</p>
                        <p class="contact-info-header"> +1 315 369 5943</p>
                    </div>
                </li>

                <li class="nav-item dropdown has-arrow logged-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<span class="user-img">
<img class="rounded-circle" src="/client/assets//img/doctors/doctor-thumb-02.jpg" width="31" alt="">
</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="/client/assets//img/doctors/doctor-thumb-02.jpg" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Darren Elder</h6>
                                <p class="text-muted mb-0">Doctor</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="doctor-dashboard.html">Dashboard</a>
                        <a class="dropdown-item" href="doctor-profile-settings.html">Profile Settings</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>

            </ul>
        </nav>
    </header>


    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title"></h2>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                    <div class="profile-sidebar">
                        <div class="widget-profile pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-doc-img">
                                    <img src="/client/assets//img/doctors/doctor-thumb-02.jpg" alt="User Image">
                                </a>
                                <div class="profile-det-info">
                                    <h3>Dr. Darren Elder</h3>
                                    <div class="patient-details">
                                        <h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-widget">
                            <nav class="dashboard-menu">
                                <ul>
                                    <li class="active">
                                        <a href="doctor-dashboard.html">
                                            <i class="fas fa-columns"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="appointments.html">
                                            <i class="fas fa-calendar-check"></i>
                                            <span>Appointments</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="my-patients.html">
                                            <i class="fas fa-user-injured"></i>
                                            <span>My customers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="schedule-timings.html">
                                            <i class="fas fa-hourglass-start"></i>
                                            <span>Schedule Timings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="available-timings.html">
                                            <i class="fas fa-clock"></i>
                                            <span>Available Timings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="invoices.html">
                                            <i class="fas fa-file-invoice"></i>
                                            <span>Invoices</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="doctor-profile-settings.html">
                                            <i class="fas fa-user-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>

                @yield('content')



                <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/client//client/assets///js/jquery.min.js"></script>

                <script src="/client//client/assets///js/popper.min.js"></script>
                <script src="/client//client/assets///js/bootstrap.min.js"></script>

                <script src="/client//client/assets///plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
                <script src="/client//client/assets///plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

                <script src="/client//client/assets///js/script.js"></script>


                <script src="/client//client/assets///plugins/select2/js/select2.min.js"></script>

                <script src="/client//client/assets///plugins/dropzone/dropzone.min.js"></script>

                <script src="/client//client/assets///plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

                <script src="/client//client/assets///js/profile-settings.js"></script>

</body>

</html>

