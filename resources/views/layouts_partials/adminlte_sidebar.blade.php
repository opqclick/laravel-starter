<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('adminLTE2/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{auth()->user()->email}}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
            <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </span>
            </a>
        </li>
        <li class="header">LEADS</li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span> REPORTS </span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> List of All Clients </a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Clients by Query Type </a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Clients by City </a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Search by Name and Number </a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Favourite Leads </a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Leads by Date – Open Calendar </a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Archive Database </a></li>
            </ul>
        </li>

        <li class="header">CORE FEATURES</li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span> LEADS MANAGEMENT </span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-plus"></i> Create / Leads Entry Form</a></li>
                <li><a href="#"><i class="fa fa-list"></i> List / List of all leads</a></li>
                <li><a href="#"><i class="fa fa-upload"></i> Import Leads</a></li>
                <li><a href="#"><i class="fa fa-download"></i> Export Leads</a></li>
            </ul>
        </li>

        <li class="header">COMMONS</li>
        <li class="treeview @if($commonData['menu'] == 'users') active @endif">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span>User Management</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu active">
                <li class="@if($commonData['menu-active'] == 'users-create') active @endif"><a href="{{route('administrator.users.create')}}"><i class="fa fa-plus"></i> Create </a></li>
                <li class="@if($commonData['menu-active'] == 'users-list') active @endif"><a href="{{route('administrator.users.list')}}"><i class="fa fa-list"></i> List </a></li>
            </ul>
        </li>
    </ul>
</section>
<!-- /.sidebar -->
