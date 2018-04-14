<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel" style="height: 60px">
            <div class="pull-left image">
                <img src="{{ asset('fotoStaf/'. Auth::user()->foto) }}" style=" height:45px; width:auto important;"
                     class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->nama}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="{{ route('pelanggan.pencarian') }}" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search by name">
                <span class="input-group-btn">
                    <a href="{{ route('pelanggan.pencarian') }}">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
                        </a>
            </span>
            </div>
        </form>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="">
                <a href="/">
                    <i class="treeview glyphicon glyphicon-home"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview {{ set_active(['pelanggan.create', 'pelanggan.index']) }}">
                <a href="">
                    <i class="fa fa-users"></i> <span>Pelanggan</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ set_active('pelanggan.index') }}"><a href="{{ route('pelanggan.index') }}"><i
                                    class="fa fa-circle-o"></i>List Pelanggan</a></li>
                    <li class="{{ set_active('pelanggan.create') }}"><a href="{{ route('pelanggan.create') }}"><i
                                    class="fa fa-circle-o"></i>Tambah Pelanggan</a></li>
                </ul>
            </li>
            @if(Auth::user()->role == 0)

                <li class="{{ set_active(['pembagian.index']) }}">
                    <a href="{{ route('pembagian.index') }}">
                        <i class="fa fa-spinner"></i> <span>Pembagian Tugas</span>
                    </a>
                </li>
            @endif
            <li class="{{ set_active(['pembayaran.index']) }}">
                <a href="{{ route('pembayaran.index') }}">
                    <i class="fa fa-tag"></i> <span>Pembayaran</span>
                </a>
            </li>
            <li class="treeview {{ set_active(['rekap.index2', 'rekap.index','rekap.pendapatan']) }}">
                <a href="">
                    <i class="fa fa-file"></i> <span>Rekapan</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ set_active('rekap.index') }}"><a href="{{ route('rekap.index') }}">
                            <i class="fa fa-circle-o"></i>Rekap Pembayaran Details</a></li>
                    <li class="{{ set_active('rekap.index2') }}"><a href="{{ route('rekap.index2') }}">
                            <i class="fa fa-circle-o"></i>Rekap Pembayaran</a></li>
                    <li class="{{ set_active('rekap.pendapatan') }}"><a href="{{ route('rekap.pendapatan') }}">
                            <i class="fa fa-circle-o"></i>Rekap Pendapatan</a></li>
                </ul>
            </li>
            <li class="treeview {{ set_active(['staf.index', 'staf.create']) }}">
                <a href="">
                    <i class="fa fa-user"></i> <span>Staf</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ set_active('staf.index') }}"><a href="{{ route('staf.index') }}"><i
                                    class="fa fa-circle-o"></i>List Staf</a></li>
                    @if(Auth::user()->role == 0)
                        <li class="{{ set_active('staf.create') }}"><a href="{{ route('staf.create') }}"><i
                                        class="fa fa-circle-o"></i>Tambah Staf</a></li>
                    @endif
                </ul>
            </li>
        </ul>
    </section>
</aside>