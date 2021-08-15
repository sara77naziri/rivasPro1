<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin - Dashboard</title>

    <link rel="shortcut icon" type="image/x-icon" href="/admin/assets//img/favicon.png">

    <link rel="stylesheet" href="/admin/assets//css/bootstrap.min.css">

    <link rel="stylesheet" href="/admin/assets//css/font-awesome.min.css">

    <link rel="stylesheet" href="/admin/assets//css/feathericon.min.css">
    <link rel="stylesheet" href="/admin/assets//plugins/morris/morris.css">

    <link rel="stylesheet" href="/admin/assets//css/style.css">
    <!--[if lt IE 9]>
    <script src="/admin/assets//js/html5shiv.min.js"></script>
    <script src="/admin/assets//js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="main-wrapper">

    <div class="header">




        <a class="mobile_btn" id="mobile_btn">
            <i class="fa fa-bars"></i>
        </a>


        <ul class="nav user-menu">



            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><img class="rounded-circle" src="/admin/assets//img/profiles/avatar-01.jpg" width="31" alt=""></span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="/admin/assets//img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                            <h6>Admin name</h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="{{route('profile')}}">My Profile</a>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>

        </ul>

    </div>


    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="active">
                        <a href="{{route('dashboard')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{route('appointments')}}"><i class="fe fe-layout"></i> <span>Appointments</span></a>
                    </li>
                    <li>
                        <a href="{{route('BeautifiersAndSpeciality')}}"><i class="fe fe-users"></i> <span> Beautifiers & Specialities</span></a>
                    </li>

                    <li>
                        <a href="{{route('customers')}}"><i class="fe fe-user"></i> <span>Customers</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
                    </li>


                    <li class="submenu">
                        <a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{route('invoice')}}">Invoice Reports</a></li>
                        </ul>
                    </li>



                    <li><a href="{{route('service')}}"><i class="fe fe-layout"></i> <span>service List</span></a></li>
                    <li>
                        <a href="{{route('profile')}}"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
                    </li>





                </ul>
            </div>
        </div>
    </div>

@yield('content')

</div>

    <script src="/admin/assets//js/jquery-3.2.1.min.js"></script>

    <script src="/admin/assets//js/popper.min.js"></script>
    <script src="/admin/assets//js/bootstrap.min.js"></script>

    <script src="/admin/assets//plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/admin/assets//plugins/raphael/raphael.min.js"></script>
    <script src="/admin/assets//plugins/morris/morris.min.js"></script>
    <script src="/admin/assets//js/chart.morris.js"></script>

    <script src="/admin/assets//js/script.js"></script>
</body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 14:39:32 GMT -->
</html>
