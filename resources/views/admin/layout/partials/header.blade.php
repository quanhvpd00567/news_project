<header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <span class="logo-lg"><b>Cheerfarm</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          @if(\Auth::check())
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              {{\Auth::user()->full_name}}
            </a>
          </li>
          <li>
            <a href="{{route('admin.logout')}}">
              <i class="fa fa-sign-out">Sign out</i>
            </a>
          </li>
          @endif
        </ul>
      </div>
    </nav>
  </header>
