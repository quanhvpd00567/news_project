<?php

    $action = app('request')->route()->getAction();
    $prefixUrl = $action['prefix'];
    $asUrl = $action['as'];
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">DASHBOARD</li>
            <li class="@if($prefixUrl == '/admin') active @endif ">
                <a href="{{route('admin.home.page')}}">
                    <i class="fa fa-circle-o text-yellow"></i>
                    <span>Trang chủ</span>
                </a>
            </li>
            <li class="treeview @if($prefixUrl == 'admin/products' || $prefixUrl == 'admin/albums' || $prefixUrl == 'admin/categories') active @endif ">
                <a href="#">
                    <i class="fa fa-circle-o text-red"></i>
                    <span>Sản phẩm</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@if('admin.product.list' == $asUrl) active @endif">
                        <a href="{{route('admin.product.list')}}">
                            <i class="fa fa-list"></i>
                            Danh sách sản phẩm
                        </a>
                    </li>
                    <li class="@if('admin.product.new' == $asUrl) active @endif">
                        <a href="{{route('admin.product.new')}}">
                            <i class="fa fa-plus"></i>
                            Thêm mới sản phẩm
                        </a>
                    </li>
                    <li class="@if('admin.category.list' == $asUrl) active @endif">
                        <a href="{{route('admin.category.list')}}">
                            <i class="fa fa-list"></i>
                            Danh sách loại sản phẩm
                        </a>
                    </li>
                    <li class="@if('admin.category.new' == $asUrl) active @endif">
                        <a href="{{route('admin.category.new')}}">
                            <i class="fa fa-plus"></i>
                            Thêm mới loại sản phẩm
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview @if($prefixUrl == 'admin/manufacturers') active @endif">
                <a href="#">
                    <i class="fa fa-circle-o text-green"></i>
                    <span>Sản xuất</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@if('admin.manufacturer.list' == $asUrl) active @endif">
                        <a href="{{route('admin.manufacturer.list')}}">
                            <i class="fa fa-list"></i>
                            Danh sách
                        </a>
                    </li>
                    <li class="@if('admin.manufacturer.new' == $asUrl) active @endif">
                        <a href="{{route('admin.manufacturer.new')}}">
                            <i class="fa fa-plus"></i>
                            Thêm mới
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview @if($prefixUrl == 'admin/introduces') active @endif">
                <a href="#">
                    <i class="fa fa-info-circle text-blue"></i>
                    <span>Giới thiệu</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@if('admin.introduce.list' == $asUrl) active @endif">
                        <a href="{{route('admin.introduce.list')}}">
                            <i class="fa fa-list"></i>
                            Danh sách
                        </a>
                    </li>
                    <li class="@if('admin.introduce.new' == $asUrl) active @endif">
                        <a href="{{route('admin.introduce.new')}}">
                            <i class="fa fa-plus"></i>
                            Thêm mới
                        </a>
                    </li>
                </ul>
            </li>

            <li class="@if($prefixUrl == 'admin/gallery') active @endif">
                <a href="{{route('admin.gallery.new')}}">
                    <i class="fa fa-image text-red"></i>
                    <span>Gallery</span>
                </a>
            </li>
            @if(false)
                <li class="treeview @if($prefixUrl == 'admin/menu') active @endif">
                <a href="#">
                    <i class="fa fa-info-circle text-blue"></i>
                    <span>Menu</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@if('admin.menu.new' == $asUrl) active @endif">
                        <a href="{{route('admin.menu.list')}}">
                            <i class="fa fa-circle-o"></i>
                            Danh sách menu
                        </a>
                    </li>
                    <li class="@if('admin.menu.new' == $asUrl) active @endif">
                        <a href="{{route('admin.menu.new')}}">
                            <i class="fa fa-circle-o"></i>
                            Thêm mới menu
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            <li class="treeview @if($prefixUrl == 'admin/setting') active @endif">
                <a href="#">
                    <i class="fa fa-cog text-blue"></i>
                    <span>Cài đặt</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@if('admin.setting.website' == $asUrl) active @endif">
                        <a href="{{route('admin.setting.website')}}">
                            <i class="fa fa-chrome"></i>
                            Cài đặt website
                        </a>
                    </li>
                    <li class="@if('admin.setting.office' == $asUrl) active @endif">
                        <a href="{{route('admin.setting.office')}}">
                            <i class="fa fa-briefcase"></i>
                            Cài đặt văn phòng
                        </a>
                    </li>
                    <li class="@if('admin.setting.mail' == $asUrl) active @endif">
                        <a href="{{route('admin.setting.mail')}}">
                            <i class="fa fa-envelope"></i>
                            Cài đặt email
                        </a>
                    </li>
                    <li class="@if('admin.setting.banner' == $asUrl) active @endif">
                        <a href="{{route('admin.setting.banner')}}">
                            <i class="fa fa-photo"></i>
                            Cài đặt banner
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
