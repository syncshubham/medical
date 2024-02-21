<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/assets/css/feathericon.min.css">
    <link rel="stylesheet" href="admin/assets/css/feather.css">
    <link rel="stylesheet" href="admin/assets/css/ckeditor.css">
    <link rel="stylesheet" href="admin/assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link rel="stylesheet" href="admin/assets/plugins/morris/morris.css">
    <link rel="stylesheet" href="admin/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="admin/assets/plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="admin/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.html" class="logo">
<img src="admin/assets/img/logo.png" alt="Logo">
</a>
<a href="index.html" class="logo logo-small">
<img src="admin/assets/img/logo-small.png" alt="Logo" width="30" height="30">
</a>
</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fe fe-text-align-left"></i>
</a>
<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>

<a class="mobile_btn" id="mobile_btn">
<i class="fa fa-bars"></i>
</a>


<ul class="nav user-menu">

<li class="nav-item dropdown noti-dropdown">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="admin/assets/img/user/user.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Jonathan Doe</span> Schedule <span class="noti-title">his appointment</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="admin/assets/img/user/user1.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Julie Pennington</span> has booked her appointment to <span class="noti-title">Ruby Perrin</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="admin/assets/img/user/user2.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Tyrone Roberts</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="admin/assets/img/user/user4.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Patricia Manzi</span> send a message <span class="noti-title"> to his Mentee</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="#">View all Notifications</a>
</div>
</div>
</li>


<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="admin/assets/img/profiles/avatar-12.jpg" width="31" alt="Ryan Taylor"></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="admin/assets/img/profiles/avatar-12.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6>Allen Davis</h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</div>
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</li>

</ul>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span><i class="fe fe-home"></i> Main</span>
</li>
<li class="active">
<a href="index.html"><span>Dashboard</span></a>
</li>
<li>
<a href="mentor.html"><span>Mentor</span></a>
</li>
<li>
<a href="mentee.html"><span>Mentee</span></a>
</li>
<li>
<a href="booking-list.html"><span>Booking List</span></a>
</li>
<li>
<a href="categories.html"><span>Categories</span></a>
</li>
<li>
<a href="transactions-list.html"><span>Transactions</span></a>
</li>
<li>
<a href="settings.html"><span>Settings</span></a>
</li>
<li class="submenu">
<a href="#"><span> Reports</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="invoices.html">Invoices List</a></li>
<li><a href="invoice-grid.html">Invoices Grid</a></li>
<li><a href="add-invoice.html">Add Invoices</a></li>
<li><a href="edit-invoice.html">Edit Invoices</a></li>
<li><a href="view-invoice.html">Invoice Details</a></li>
<li><a href="invoices-settings.html">invoice settings</a></li>
</ul>
</li>
<li>
<a href="invoice-items.html"><span>Items</span></a>
</li>
<li class="menu-title">
<span><i class="fe fe-document"></i> Pages</span>
</li>
<li>
<a href="profile.html"><span>My Profile</span></a>
</li>
<li class="submenu">
<a href="#"><span>Blog</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="blog.html"> Blog </a></li>
<li><a href="blog-details.html"> Blog Details </a></li>
<li><a href="add-blog.html"> Add Blog </a></li>
<li><a href="edit-blog.html"> Edit Blog </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><span> Authentication </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="login.html"> Login </a></li>
<li><a href="register.html"> Register </a></li>
<li><a href="forgot-password.html"> Forgot Password </a></li>
<li><a href="lock-screen.html"> Lock Screen </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><span> Error Pages </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="error-404.html">404 Error </a></li>
<li><a href="error-500.html">500 Error </a></li>
</ul>
</li>
<li>
<a href="blank-page.html"><span>Blank Page</span></a>
</li>
<li class="menu-title">
<span><i class="fe fe-star-o"></i> UI Interface</span>
</li>
<li>
<a href="components.html"><span>Components</span></a>
</li>
<li class="submenu">
<a href="#"><span> Forms </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
<li><a href="form-input-groups.html">Input Groups </a></li>
<li><a href="form-horizontal.html">Horizontal Form </a></li>
<li><a href="form-vertical.html"> Vertical Form </a></li>
<li><a href="form-mask.html"> Form Mask </a></li>
<li><a href="form-validation.html"> Form Validation </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><span> Tables </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="tables-basic.html">Basic Tables </a></li>
<li><a href="data-tables.html">Data Table </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><span>Multi Level</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);">Level 3</a></li>
<li><a href="javascript:void(0);">Level 3</a></li>
</ul>
</li>
<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
</ul>
</li>
<li>
<a href="javascript:void(0);"> <span>Level 1</span></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Welcome Admin!</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Dashboard</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon text-primary border-primary">
<i class="fe fe-users"></i>
</span>
<div class="dash-count">
<h3>168</h3>
</div>
</div>
<div class="dash-widget-info">
<h6 class="text-muted">Members</h6>
<div class="progress progress-sm">
<div class="progress-bar bg-primary w-50"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon text-success">
<i class="fe fe-credit-card"></i>
</span>
<div class="dash-count">
<h3>487</h3>
</div>
</div>
<div class="dash-widget-info">
<h6 class="text-muted">Appointments</h6>
<div class="progress progress-sm">
<div class="progress-bar bg-success w-50"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon text-danger border-danger">
<i class="fe fe-star-o"></i>
</span>
<div class="dash-count">
<h3>485</h3>
</div>
</div>
<div class="dash-widget-info">
<h6 class="text-muted">Mentoring Points</h6>
<div class="progress progress-sm">
<div class="progress-bar bg-danger w-50"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon text-warning border-warning">
<i class="fe fe-folder"></i>
</span>
<div class="dash-count">
<h3>$62523</h3>
</div>
</div>
<div class="dash-widget-info">
<h6 class="text-muted">Revenue</h6>
<div class="progress progress-sm">
<div class="progress-bar bg-warning w-50"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 col-lg-6">

<div class="card card-chart">
<div class="card-header">
<h4 class="card-title">Revenue</h4>
</div>
<div class="card-body">
<div id="morrisArea"></div>
</div>
</div>

</div>
<div class="col-md-12 col-lg-6">

<div class="card card-chart">
<div class="card-header">
<h4 class="card-title">Status</h4>
</div>
<div class="card-body">
<div id="morrisLine"></div>
</div>
</div>

</div>
</div>
<div class="row">
<div class="col-md-6 d-flex">

<div class="card card-table flex-fill">
<div class="card-header">
<h4 class="card-title">Mentor List</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Mentor Name</th>
<th>Course</th>
<th>Earned</th>
<th>Reviews</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-08.jpg" alt="User Image"></a>
<a href="profile.html">James Amen</a>
</h2>
</td>
<td>Maths</td>
<td>$3200.00</td>
<td>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star-o text-secondary"></i>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
<a href="profile.html">Jessica Fogarty</a>
</h2>
</td>
<td>Business Maths</td>
<td>$3100.00</td>
<td>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star-o text-secondary"></i>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-17.jpg" alt="User Image"></a>
<a href="profile.html">Jose Anderson</a>
</h2>
</td>
<td>Algebra</td>
<td>$4000.00</td>
<td>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star-o text-secondary"></i>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
<a href="profile.html">Sofia Brient</a>
</h2>
</td>
<td>Integrated Sum</td>
<td>$3200.00</td>
<td>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star-o text-secondary"></i>
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-14.jpg" alt="User Image"></a>
<a href="profile.html">Marvin Campbell</a>
</h2>
</td>
<td>Flow chart</td>
<td>$3500.00</td>
<td>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star text-warning"></i>
<i class="fe fe-star-o text-secondary"></i>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

</div>
<div class="col-md-6 d-flex">

<div class="card  card-table flex-fill">
<div class="card-header">
<h4 class="card-title">Mentee List</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Mentee Name</th>
<th>Phone</th>
<th>Last Visit</th>
<th class="text-end">Paid</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user.jpg" alt="User Image"></a>
<a href="profile.html">Jonathan Doe </a>
</h2>
</td>
<td>8286329170</td>
<td>20 Oct 2019</td>
<td class="text-end">$100.00</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user1.jpg" alt="User Image"></a>
<a href="profile.html">Julie Pennington </a>
</h2>
</td>
<td>2077299974</td>
<td>22 Oct 2019</td>
<td class="text-end">$200.00</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user2.jpg" alt="User Image"></a>
<a href="profile.html">Tyrone Roberts</a>
</h2>
</td>
<td>2607247769</td>
<td>21 Oct 2019</td>
<td class="text-end">$250.00</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user3.jpg" alt="User Image"></a>
<a href="profile.html">Allen Davis </a>
</h2>
</td>
<td>5043686874</td>
<td>21 Sep 2019</td>
<td class="text-end">$150.00</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user4.jpg" alt="User Image"></a>
<a href="profile.html">Patricia Manzi </a>
</h2>
</td>
<td>9548207887</td>
<td>18 Sep 2019</td>
<td class="text-end">$350.00</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
<div class="row">
<div class="col-md-12">

<div class="card card-table">
<div class="card-header">
<h4 class="card-title">Booking List</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Mentor Name</th>
<th>Course</th>
<th>Mentee Name</th>
<th>Booking Time</th>
<th>Status</th>
<th class="text-end">Amount</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-08.jpg" alt="User Image"></a>
<a href="profile.html">James Amen</a>
</h2>
</td>
<td>Maths</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user.jpg" alt="User Image"></a>
<a href="profile.html">Jonathan Doe </a>
</h2>
</td>
<td>9 Nov 2019 <span class="text-primary d-block">11.00 AM - 11.15 AM</span></td>
<td>
<div class="status-toggle">
<input type="checkbox" id="status_1" class="check" checked>
<label for="status_1" class="checktoggle">checkbox</label>
</div>
</td>
<td class="text-end">
$200.00
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
<a href="profile.html">Jessica Fogarty</a>
</h2>
</td>
<td>Business Maths</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user1.jpg" alt="User Image"></a>
<a href="profile.html">Julie Pennington </a>
</h2>
</td>
<td>5 Nov 2019 <span class="text-primary d-block">11.00 AM - 11.35 AM</span></td>
<td>
<div class="status-toggle">
<input type="checkbox" id="status_2" class="check" checked>
<label for="status_2" class="checktoggle">checkbox</label>
</div>
</td>
<td class="text-end">
$300.00
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-17.jpg" alt="User Image"></a>
<a href="profile.html">Jose Anderson</a>
</h2>
</td>
<td>Algebra</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user2.jpg" alt="User Image"></a>
<a href="profile.html">Tyrone Roberts</a>
</h2>
</td>
<td>11 Nov 2019 <span class="text-primary d-block">12.00 PM - 12.15 PM</span></td>
<td>
<div class="status-toggle">
<input type="checkbox" id="status_3" class="check" checked>
<label for="status_3" class="checktoggle">checkbox</label>
</div>
</td>
<td class="text-end">
$150.00
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
<a href="profile.html">Sofia Brient</a>
</h2>
</td>
<td>Integrated Sum</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user3.jpg" alt="User Image"></a>
<a href="profile.html">Allen Davis </a>
</h2>
</td>
<td>7 Nov 2019<span class="text-primary d-block">1.00 PM - 1.20 PM</span></td>
<td>
<div class="status-toggle">
<input type="checkbox" id="status_4" class="check" checked>
<label for="status_4" class="checktoggle">checkbox</label>
</div>
</td>
<td class="text-end">
$150.00
</td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-14.jpg" alt="User Image"></a>
<a href="profile.html">Marvin Campbell</a>
</h2>
</td>
<td>Flow chart</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user4.jpg" alt="User Image"></a>
<a href="profile.html">Patricia Manzi </a>
</h2>
</td>
<td>15 Nov 2019 <span class="text-primary d-block">1.00 PM - 1.15 PM</span></td>
<td>
<div class="status-toggle">
<input type="checkbox" id="status_5" class="check" checked>
<label for="status_5" class="checktoggle">checkbox</label>
</div>
</td>
<td class="text-end">
$200.00
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>
</div>

</div>


    
<script src="admin/assets/js/jquery-3.6.0.min.js" type="738cc95feedbee1c773f2aa8-text/javascript"></script>
<script src="admin/assets/js/bootstrap.bundle.min.js" type="738cc95feedbee1c773f2aa8-text/javascript"></script>
<script src="admin/assets/js/feather.min.js" type="738cc95feedbee1c773f2aa8-text/javascript"></script>
<script src="admin/assets/plugins/slimscroll/jquery.slimscroll.min.js" type="738cc95feedbee1c773f2aa8-text/javascript"></script>
<script src="admin/assets/plugins/raphael/raphael.min.js" type="738cc95feedbee1c773f2aa8-text/javascript"></script>
<script src="admin/assets/plugins/morris/morris.min.js" type="738cc95feedbee1c773f2aa8-text/javascript"></script>
<script src="admin/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>
<script src="admin/assets/plugins/datatables/datatables.min.js"></script>
<script src="admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin/assets/plugins/select2/js/select2.min.js"></script>
<script src="admin/assets/js/chart.morris.js" type="738cc95feedbee1c773f2aa8-text/javascript"></script>
<script src="admin/assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="admin/assets/js/ckeditor.js"></script>
<script src="admin/assets/js/form-validation.js"></script>
<script src="admin/assets/js/jquery.maskedinput.min.js"></script>
<script src="admin/assets/js/mask.js"></script>
<script src="admin/assets/js/moment.min.js"></script>
<script src="admin/assets/js/script.js" type="738cc95feedbee1c773f2aa8-text/javascript"></script>
<script src="admin/assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="738cc95feedbee1c773f2aa8-|49" defer></script>
</body>
</html>