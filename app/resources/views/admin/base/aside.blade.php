<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{asset('avatar.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{Auth::user()->name}}</p>
            <a href="#">
                <i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ $menu ==  'Dashboard' ? 'active' : ''  }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa fa-dashboard"></i>
                <span>{{ $menu }}</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-user-secret"></i>
                <span>User Management</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="pages/charts/chartjs.html">
                        <i class="fa fa-circle-o"></i> User List</a>
                </li>
                <li>
                    <a href="pages/charts/flot.html">
                        <i class="fa fa-circle-o"></i> User Add</a>
                </li>
                <li>
                    <a href="pages/charts/morris.html">
                        <i class="fa fa-circle-o"></i> User Group</a>
                </li>
            </ul>
        </li>
        <li class="header">Actions</li>
        <li>
            <a href="#">
                <i class="fa fa-lock text-red"></i>
                <span>Lock</span>
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out text-yellow"></i>
                <span>Logout</span>
            </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
        </li>
    </ul>
</section>