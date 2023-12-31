<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('adminbackend/assets/images/arrow.svg') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin Panel</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.dashboard')}}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-menu'></i></div>
                <div class="menu-title">Menu</div>
            </a>
            <ul>
                <li>
                    <!-- Brand -->
                    <a href="javascript:;" class="has-arrow">
                        <div class="menu-title">Brand</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('all.brand') }}">All Brand</a></li>
                        <li> <a href="{{ route('add.brand') }}">Add Brand</a></li>
                    </ul>
                </li>
                <li>
                    <!-- Category -->
                    <a href="javascript:;" class="has-arrow">
                        <div class="menu-title">Category</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('all.category') }}">All Category</a></li>
                        <li> <a href="{{ route('add.category') }}">Add Category</a></li>
                    </ul>
                </li>
                <li>
                    <!-- SubCategory -->
                    <a href="javascript:;" class="has-arrow">
                        <div class="menu-title">SubCategory</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('all.subcategory') }}">All SubCategory</a></li>
                        <li> <a href="{{ route('add.subcategory') }}">Add SubCategory</a></li>
                    </ul>
                </li>
                <li>
                    <!-- Product Manage -->
                    <a href="javascript:;" class="has-arrow">
                        <div class="menu-title">Product Manage</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('all.product') }}">All Product</a></li>
                        <li> <a href="{{ route('add.product') }}">Add Product</a></li>
                    </ul>
                </li>
                <li>
                    <!-- Slider Manage -->
                    <a href="javascript:;" class="has-arrow">
                        <div class="menu-title">Slider Manage</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('all.slider') }}">All Slider</a></li>
                        <li> <a href="{{ route('add.slider') }}">Add Slider</a></li>
                    </ul>
                </li>
                <li>
                    <!-- Banner Manage -->
                    <a href="javascript:;" class="has-arrow">
                        <div class="menu-title">Banner Manage</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('all.banner') }}">All Banner</a></li>
                        <li> <a href="{{ route('add.banner') }}">Add Banner</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- Vendor Manage -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bxs-user-circle'></i></div>
                <div class="menu-title">Vendors</div>
            </a>
            <ul>
                <li><a href="{{ route('all.vendor.status') }}">Vendor Status Details</a></li>
                <li><a href="{{ route('add.vendor') }}">Add New Vendor</a></li>
            </ul>
        </li>

        <!-- Users Manage -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-user'></i></div>
                <div class="menu-title">Users</div>
            </a>
            <ul>
                <li><a href="{{ route('all.user.status') }}">User Status Details</a></li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Components</div>
            </a>
            <ul>
                <li> <a href="component-alerts.html"><i class="bx bx-right-arrow-alt"></i>Alerts</a>
                </li>
                <li> <a href="component-accordions.html"><i class="bx bx-right-arrow-alt"></i>Accordions</a>
                </li>
                <li> <a href="component-badges.html"><i class="bx bx-right-arrow-alt"></i>Badges</a>
                </li>
                <li> <a href="component-buttons.html"><i class="bx bx-right-arrow-alt"></i>Buttons</a>
                </li>
                <li> <a href="component-cards.html"><i class="bx bx-right-arrow-alt"></i>Cards</a>
                </li>
                <li> <a href="component-carousels.html"><i class="bx bx-right-arrow-alt"></i>Carousels</a>
                </li>
                <li> <a href="component-list-groups.html"><i class="bx bx-right-arrow-alt"></i>List Groups</a>
                </li>
                <li> <a href="component-media-object.html"><i class="bx bx-right-arrow-alt"></i>Media Objects</a>
                </li>
                <li> <a href="component-modals.html"><i class="bx bx-right-arrow-alt"></i>Modals</a>
                </li>
                <li> <a href="component-navs-tabs.html"><i class="bx bx-right-arrow-alt"></i>Navs & Tabs</a>
                </li>
                <li> <a href="component-navbar.html"><i class="bx bx-right-arrow-alt"></i>Navbar</a>
                </li>
                <li> <a href="component-paginations.html"><i class="bx bx-right-arrow-alt"></i>Pagination</a>
                </li>
                <li> <a href="component-popovers-tooltips.html"><i class="bx bx-right-arrow-alt"></i>Popovers & Tooltips</a>
                </li>
                <li> <a href="component-progress-bars.html"><i class="bx bx-right-arrow-alt"></i>Progress</a>
                </li>
                <li> <a href="component-spinners.html"><i class="bx bx-right-arrow-alt"></i>Spinners</a>
                </li>
                <li> <a href="component-notifications.html"><i class="bx bx-right-arrow-alt"></i>Notifications</a>
                </li>
                <li> <a href="component-avtars-chips.html"><i class="bx bx-right-arrow-alt"></i>Avatrs & Chips</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-repeat"></i>
                </div>
                <div class="menu-title">Content</div>
            </a>
            <ul>
                <li> <a href="content-grid-system.html"><i class="bx bx-right-arrow-alt"></i>Grid System</a>
                </li>
                <li> <a href="content-typography.html"><i class="bx bx-right-arrow-alt"></i>Typography</a>
                </li>
                <li> <a href="content-text-utilities.html"><i class="bx bx-right-arrow-alt"></i>Text Utilities</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"> <i class="bx bx-donate-blood"></i>
                </div>
                <div class="menu-title">Icons</div>
            </a>
            <ul>
                <li> <a href="icons-line-icons.html"><i class="bx bx-right-arrow-alt"></i>Line Icons</a>
                </li>
                <li> <a href="icons-boxicons.html"><i class="bx bx-right-arrow-alt"></i>Boxicons</a>
                </li>
                <li> <a href="icons-feather-icons.html"><i class="bx bx-right-arrow-alt"></i>Feather Icons</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Charts & Maps</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-line-chart"></i>
                </div>
                <div class="menu-title">Charts</div>
            </a>
            <ul>
                <li> <a href="charts-apex-chart.html"><i class="bx bx-right-arrow-alt"></i>Apex</a>
                </li>
                <li> <a href="charts-chartjs.html"><i class="bx bx-right-arrow-alt"></i>Chartjs</a>
                </li>
                <li> <a href="charts-highcharts.html"><i class="bx bx-right-arrow-alt"></i>Highcharts</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
