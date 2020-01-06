<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('imgs/me.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{\Auth::check() ? \Auth::user()->full_name : ''}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENUS</li>
        <li><a href="{{route('list_role')}}"><i class="fa fa-circle-o text-red"></i> <span>Roles</span></a></li>
        <li><a href="{{ route('list_album') }}"><i class="fa fa-circle-o text-yellow"></i> <span>Albums</span></a></li>
          @if(Auth::user()->is_admin())
            <li><a href="{{ route('list_user') }}"><i class="fa fa-circle-o text-white"></i> <span>Users</span></a></li>
          @endif
          <li><a href="{{ route('list_article') }}"><i class="fa fa-circle-o text-fuchsia"></i> <span>Articles</span></a></li>
          <li><a href="{{ route('list_image') }}"><i class="fa fa-circle-o text-green"></i> <span>Images</span></a></li>
        <li><a href="{{ route('list_category') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Categories</span></a></li>
        <li><a href="{{ route('get_setting') }}"><i class="fa fa-circle-o text-blue"></i> <span>Settings</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
