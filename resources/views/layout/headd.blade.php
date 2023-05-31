@if(Auth::id() && Auth::user()->statues=='Active')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{trans('messages.title')}}</title>
<!-- Favicon -->
<link rel="shortcut icon" href="adminlite/dist/img/AdminLTELogo.png" type="image/x-icon">
<link rel="apple-touch-icon" href="adminlite/dist/img/AdminLTELogo.png">  

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlite/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- flag-icon-css -->
  <link rel="stylesheet" href="adminlite/plugins/flag-icon-css/css/flag-icon.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="adminlite/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="adminlite/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="adminlite/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlite/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="adminlite/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- pop Style -->
  <link rel="stylesheet" href="adminlite/dist/css/popup_style.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="adminlite/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="adminlite/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="adminlite/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="adminlite/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlite/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="adminlite/dist/css/calandercss.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<!-- Preloader -->
 <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="adminlite/dist/img/AdminLTELogo.png" alt="ETHIO-CHICKENS" height="60" width="60">
  </div> -->
<!-- ///////////////////////////////////////////// -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Iclude The message section -->
      
      <!-- Notifications Dropdown Menu -->
      <!-- Notification -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="flag-icon flag-icon-us"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right p-0">
          <a href="lang/en" class="dropdown-item active">
            <i class="flag-icon flag-icon-us mr-2"></i> English
          </a>
          <a href="lang/am" class="dropdown-item">
            <i class="flag-icon flag-icon-et mr-2"></i> አማርኛ
          </a>
        </div>
      </li>
      <li class="nav-item">
              <x-app-layout>
        
             </x-app-layout>

      </li>
    </ul>
  </nav>
  <!-- ////////////////////////////////////////////////// -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="background-color:#528EB5;">
      <img src="adminlite/dist/img/AdminLTELogo.png" alt="ETHIO-CHICKEN Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{trans('messages.title')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color:#528EB5;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="userimage/{{Auth::user()->profile_photo_path}}" class="img-circle elevation-2" alt="UserImage">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->email}}</a>
        </div>

      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('home')}}" class="nav-link active">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>{{trans('messages.dashboard')}}</p>
                                    </a>
                                </li>
                                </ul>
                              </li>
                                <!-- The System Admin Navbar -->
           @if(Auth::user()->userType=='admin')                         
          <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-users"></i>
              <p>
                {{trans('messages.manage_users')}}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_customers_view')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>Customers</p>
                </a>
              </li>
             </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_admins_view')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>Employees</p>
                </a>
              </li>
             </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_user_view')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>System Users</p>
                </a>
              </li>
             </ul>
           </li>
          <li class="nav-item">
            <a href="{{url('inventory_report_admin')}}" class="nav-link">
               <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Inventory
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-cart-arrow-down"></i>
              <p>
                Population and Production
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('population_report_admin')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>Chicken production</p>
                </a>
              </li>
             </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('population_report_eggs_admin')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>Egg production </p>
                </a>
              </li>
             </ul>
          </li>
            <!-- The Business Owener Nava Bar -->
             @elseif(Auth::user()->userType=='businessOwener')
           <li class="nav-item">
            <a href="{{url('inventory_report')}}" class="nav-link">
               <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Inventory
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-cart-arrow-down"></i>
              <p>
                Population and Production
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('population_report')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>Chicken production</p>
                </a>
              </li>
             </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('population_report_eggs')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>Egg production </p>
                </a>
              </li>
             </ul>
          </li>
             <!-- The FarmHandler Nava Bar -->
             @elseif(Auth::user()->userType=='farmHandler')
             <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-hand-holding-usd"></i>
              <p>
                Manage Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_products')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>add products</p>
                </a>
              </li>
             </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_product_eggs')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>add eggs</p>
                </a>
              </li>
             </ul>
           </li>
             <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-money-check"></i>
              <p>
                Manage Feeds
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_feeds')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>add feeds</p>
                </a>
              </li>
             </ul>
           </li>
             <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-donate"></i>
              <p>
                Manage Supplies
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_supplies')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>add supplies</p>
                </a>
              </li>
             </ul>
           </li>
             <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-crow"></i>
              <p>
                Manage Chickens Health
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_disease')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>add disease</p>
                </a>
              </li>
             </ul>
           </li>
          
         <!-- The Veterinary Nav Bar -->
         @elseif(Auth::user()->userType=='veterinary')
         <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-crow"></i>
              <p>
                Manage Chickens Health
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_treatement')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>add treatement</p>
                </a>
              </li>
             </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_medicine')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>add Medicines</p>
                </a>
              </li>
             </ul>
           </li>
        <!-- The Sales Manager Nave Bar -->
        @elseif(Auth::user()->userType=='saleManager')
        <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-funnel-dollar"></i>
              <p>
                Manage Sales
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('view_customers')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>View Customers</p>
                </a>
              </li>
             </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_sales')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>Add sale info</p>
                </a>
              </li>
             </ul>
           </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Manage Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_orders')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>Waiting Orders</p>
                </a>
              </li>
             </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_orders_approved')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>Approved orders</p>
                </a>
              </li>
             </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_orders_rejected')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>Rejected orders</p>
                </a>
              </li>
             </ul>
           </li>
           @elseif(Auth::user()->userType=='customer')
           <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa fa-shopping-cart"></i>
              <p>
                Manage Your Order
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('make_orders')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>Make Order</p>
                </a>
              </li>
             </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('manage_my_orders')}}" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                  <p>View Order Statue</p>
                </a>
              </li>
             </ul>
           </li>
             @endif
            <li class="nav-item">
            <a href="{{url('contact_admins')}}" class="nav-link">
               <i class="nav-icon fas fa-comments"></i>
              <p>
              Contact Others
                <i class=""></i>
              </p>
            </a>
           </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
  </aside>
@endif