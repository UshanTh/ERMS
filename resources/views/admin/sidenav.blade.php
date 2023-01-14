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
                    <a href="{{url('/admin_view_Menu')}}" class="menu-link">
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
                <span class="menu-header-text">Order Management</span>
                </li>
                <li class="menu-item">
                <a href="{{url('view_Orders')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Analytics">Show Orders</div>
                </a>
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
                        <a href="{{url('/show_suppliers')}}" class="menu-link">
                            <div data-i18n="Account">Add Suppliers</div>
                        </a>
                        </li>
                        <li class="menu-item">
                        <a href="{{url('/show_supplier_details')}}" class="menu-link">
                            <div data-i18n="Notifications">Show Suppliers</div>
                        </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Inventory Management</span>
                </li>
                <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Manage Inventory</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                    <a href="{{url('/show_Add_Inventory')}}" class="menu-link">
                        <div data-i18n="Account">Add Inventory</div>
                    </a>
                    </li>
                    <li class="menu-item">
                    <a href="{{url('/show_Inventory_details')}}" class="menu-link">
                        <div data-i18n="Notifications">Show Inventory</div>
                    </a>
                    </li>
                </ul>
                </li>

                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Staff Management</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="Account Settings">Manage Staff</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                        <a href="{{url('/add_staff_page')}}" class="menu-link">
                            <div data-i18n="Account">Add Staff</div>
                        </a>
                        </li>
                        <li class="menu-item">
                        <a href="{{url('/show_Staff_details')}}" class="menu-link">
                            <div data-i18n="Notifications">Show Staff</div>
                        </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Booking Management</span>
                </li>
                <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Manage Packages</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                    <a href="{{url('/show_Add_Packages')}}" class="menu-link">
                        <div data-i18n="Account">Add Packages</div>
                    </a>
                    </li>
                    <li class="menu-item">
                    <a href="{{url('/show_Package_details')}}" class="menu-link">
                        <div data-i18n="Notifications">Show Packages</div>
                    </a>
                    </li>
                </ul>
                </li>
                    <li class="menu-item">
                        <a href="{{url('view_Category')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Analytics">Manage Booking</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                <span class="menu-header-text">User Management</span>
                </li>
                    <li class="menu-item">
                        <a href="{{url('view_User')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Analytics">Manage Users</div>
                        </a>
                    </li>
            </ul>
        </aside>