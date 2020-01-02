<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('imgs/me.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Trang Tran</p>
          <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>

        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="{{route('list_role')}}"><i class="fa fa-circle-o text-red"></i> <span>Roles</span></a></li>
        <li><a href="{{ route('list_album') }}"><i class="fa fa-circle-o text-yellow"></i> <span>Albums</span></a></li>
        <li><a href="{{ route('list_image') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Images</span></a></li>
        <li><a href="{{ route('list_category') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Categories</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>