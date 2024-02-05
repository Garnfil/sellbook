<ul class="sidebar-menu">
    <li>
        <a class="sidebar-header {{ preg_match('/admin\/dashboard/', Request::path()) ? 'active' : null }}" href="{{ route('admin.dashboard') }}">
            <i data-feather="home"></i><span>Dashboard</span>
        </a>
    </li>
    <li>
        <a class="sidebar-header {{ preg_match('/admin\/products/', Request::path()) ? 'active' : null }}" href="{{ route('admin.products.index') }}">
            <i data-feather="box"></i><span>Products</span>
        </a>
    </li>
    <li><a class="sidebar-header" href="{{ route('admin.dashboard') }}"><i data-feather="filter"></i><span>Product Categories</span></a></li>
    <li><a class="sidebar-header" href=""><i data-feather="shopping-cart"></i><span>Cart</span></a></li>
    <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Orders</span></a></li>
    <li class=""><a class="sidebar-header " href=""><i data-feather="users"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
        <ul class="sidebar-submenu">
            <li><a class="{{ preg_match('/admin\/customers/', Request::path()) ? 'active' : null }}" href="{{ route('admin.customers.index') }}">
                <i class="fa fa-circle"></i>Customers</a>
            </li>
            <li><a href="#"><i class="fa fa-circle"></i>Vendors</a></li>
            <li><a href="#"><i class="fa fa-circle"></i>Admins</a></li>
        </ul>
    </li>
</ul>
