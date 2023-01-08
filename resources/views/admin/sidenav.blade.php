        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="index.html" class="app-brand-link">
                <span class="app-brand-logo demo">
                    <img src="admin/assets/img/lg.png"> 
                </span>
                <!-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span> -->
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item active">
                <a href="index.html" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
                </li>

                <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Menu Management</span>
                </li>
                <!-- Menu -->
                <li class="menu-item">
                <a href="{{url('view_Category')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Analytics">Manage Category</div>
                </a>
                </li>

                <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Manage Menu</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                    <a href="{{url('/view_Menu')}}" class="menu-link">
                        <div data-i18n="Account">Add Menu</div>
                    </a>
                    </li>
                    <li class="menu-item">
                    <a href="{{url('/show_Menu')}}" class="menu-link">
                        <div data-i18n="Notifications">Show Menu</div>
                    </a>
                    </li>
                </ul>
                </li>

                <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Supplier Management</span>
                </li>
                <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Manage Suppliers</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                    <a href="{{url('/view_Menu')}}" class="menu-link">
                        <div data-i18n="Account">Add Suppliers</div>
                    </a>
                    </li>
                    <li class="menu-item">
                    <a href="{{url('/show_Menu')}}" class="menu-link">
                        <div data-i18n="Notifications">Show Suppliers</div>
                    </a>
                    </li>
                </ul>
                </li>

                <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                    <div data-i18n="Authentications">Authentications</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Login</div>
                    </a>
                    </li>
                    <li class="menu-item">
                    <a href="auth-register-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Register</div>
                    </a>
                    </li>
                    <li class="menu-item">
                    <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Forgot Password</div>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                    <div data-i18n="Misc">Misc</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Error">Error</div>
                    </a>
                    </li>
                    <li class="menu-item">
                    <a href="pages-misc-under-maintenance.html" class="menu-link">
                        <div data-i18n="Under Maintenance">Under Maintenance</div>
                    </a>
                    </li>
                </ul>
                </li>
                
            </ul>
        </aside>