<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/loginPage/svg/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8;background: white; padding: 0.2rem;">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                {{--                    <div class="image">--}}
                {{--                        <img src="" class="img-circle elevation-2" alt="User Image">--}}
                {{--                    </div>--}}
                <div class="info">
                    <a href="#" class="d-block">{{auth()->user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/admin" class="nav-link {{ isAcvtive('admin.') }}">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                داشبورد
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview {{ isAcvtive(['admin.users.index','admin.users.create','admin.users.edit'], 'menu-open') }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user-circle-o"></i>
                            <p>
                                کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/users/" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست کاربران</p>
                                </a>
                            </li>
                        </ul>
                    <li class="nav-item has-treeview {{ isAcvtive(['admin.permissions.index','admin.permissions.create','admin.permissions.edit'], 'menu-open') }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-lock" aria-hidden="true"></i>
                            <p>
                                بخش اجازه دسترسی
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.permissions.index') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>همه دسترسی ها</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.roles.index') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>همه مقام ها</p>
                                </a>
                            </li>
                        </ul>


                    <li class="nav-item has-treeview {{ isAcvtive(['admin.permissions.index','admin.permissions.create','admin.permissions.edit'], 'menu-open') }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-book   " aria-hidden="true"></i>
                            <p>
                                درخواست ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.permissions.index') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon text-info"></i>
                                    <p>همه درخواست ها</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.roles.index') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon text-warning"></i>
                                    <p>درخواست های در انتظار</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.roles.index') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon text-success"></i>
                                    <p>درخواست های ثبت شده</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.roles.index') }}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon text-danger"></i>
                                    <p>درخواست های رد شده</p>
                                </a>
                            </li>
                        </ul>

{{--                    <li class="nav-item has-treeview {{ isAcvtive(['admin.permissions.index','admin.permissions.create','admin.permissions.edit'], 'menu-open') }}">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon fa fa-shopping-bag" aria-hidden="true"></i>--}}
{{--                            <p>--}}
{{--                                کالاها--}}
{{--                                <i class="right fa fa-angle-left"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{ route('admin.permissions.index') }}" class="nav-link">--}}
{{--                                    <i class="fa fa-circle-o nav-icon text-info"></i>--}}
{{--                                    <p>لیست کالاها</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{ route('admin.roles.index') }}" class="nav-link">--}}
{{--                                    <i class="fa fa-circle-o nav-icon text-warning"></i>--}}
{{--                                    <p>ثبت کالای جدید</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{ route('admin.roles.index') }}" class="nav-link">--}}
{{--                                    <i class="fa fa-percent nav-icon text-success"></i>--}}
{{--                                    <p>کد تخفیف</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
