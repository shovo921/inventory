<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item"> <a class="nav-link " href="{{route('admin.dashboard')}}"> <i class="bi bi-grid"></i> <span>Dashboard</span> </a></li>
        @if( Auth::guard('admin')->check() && in_array(Auth::guard('admin')->user()->role_id, [1, 2]))
        <li class="nav-item">

            <a class="nav-link collapsed " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-menu-button-wide"></i><span>Brand</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">


                <li> <a href="{{route('brand.list')}}"> <i class="bi bi-circle"></i><span>Brand list</span> </a></li>
                <li> <a href="{{route('brand.create')}}"> <i class="bi bi-circle "></i><span>Create</span> </a></li>
            </ul>
        </li>
        @endif

{{--        category--}}
        @if( Auth::guard('admin')->check() && in_array(Auth::guard('admin')->user()->role_id, [1, 2]))
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-bar-chart"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <div id="sidebar-nav2">

                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#tables-nav2" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Primary Category</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                        <ul id="tables-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav2">
                            <li> <a href="{{route('category.list')}}"> <i class="bi bi-circle"></i><span>Category list</span> </a></li>
                            <li> <a href="{{route('category.create')}}"> <i class="bi bi-circle"></i><span>Create new Category</span> </a></li>

                        </ul>

                    </li>
                </div>

                <ul id="sidebar-nav1">

                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#tables-nav1" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Sub Category</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                        <ul id="tables-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav1">
                            <li> <a href="{{route('sub.category.list')}}"> <i class="bi bi-circle"></i><span>Sub category list</span> </a></li>
                            <li> <a href="{{route('sub.category.create')}}"> <i class="bi bi-circle"></i><span>Create sub category</span> </a></li>

                        </ul>

                    </li>
                </ul>
            </ul>
        </li>
        @endif
        @if( Auth::guard('admin')->check() && in_array(Auth::guard('admin')->user()->role_id, [1, 2]))
        <li class="nav-item">
            <a class="nav-link collapsed " data-bs-target="#components-nav-c3" data-bs-toggle="collapse"  href="#"> <i class="bi bi-menu-button-wide"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="components-nav-c3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{route('product.list')}}"> <i class="bi bi-circle"></i><span>product list</span> </a></li>
                <li> <a href="{{route('product.create')}}"> <i class="bi bi-circle"></i><span>product create</span> </a></li>

            </ul>
        </li>
        @endif
        @if( Auth::guard('admin')->check() && in_array(Auth::guard('admin')->user()->role_id, [1, 2]))
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav123" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Recognition</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="tables-nav123" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{route('recognition.list')}}"> <i class="bi bi-circle"></i><span>Recognition list</span> </a></li>
                <li> <a href="{{route('recognition.create')}}"> <i class="bi bi-circle"></i><span>Recognition Apply</span> </a></li>

            </ul>
        </li>
        @endif
        @if( Auth::guard('admin')->check() && in_array(Auth::guard('admin')->user()->role_id, [1, 3]))
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Recognition Manager</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{route('order.list')}}"> <i class="bi bi-circle"></i><span>Order list</span> </a></li>
{{--                <li> <a href="{{route('order.create')}}"> <i class="bi bi-circle"></i><span>Create Order</span> </a></li>--}}

            </ul>
        </li>
        @endif
        @if( Auth::guard('admin')->check() && in_array(Auth::guard('admin')->user()->role_id, [1, 4]))
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-journal-text"></i><span>Stock Manager</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{route('stock.index')}}"> <i class="bi bi-circle"></i><span>Stock list</span> </a></li>
            </ul>
        </li>
        @endif
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Our Suecssfully Story</span><i class="bi bi-chevron-down ms-auto"></i> </a>--}}
{{--            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">--}}
{{--                <li> <a href="{{route('story.list')}}"> <i class="bi bi-circle"></i><span>Story list</span> </a></li>--}}
{{--                <li> <a href="{{route('story.create')}}"> <i class="bi bi-circle"></i><span>Create new Story</span> </a></li>--}}

{{--            </ul>--}}
{{--        </li>--}}
        @if( Auth::guard('admin')->check() && in_array(Auth::guard('admin')->user()->role_id, [1]))
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-gem"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{route('user.list')}}"> <i class="bi bi-circle"></i><span>User list</span> </a></li>
            </ul>
        </li>
        @endif
        <li class="nav-heading">Pages</li>
        <li class="nav-item"> <a class="nav-link collapsed" href="{{route('conatct.list')}}"> <i class="bi bi-envelope"></i> <span>Contact</span> </a></li>
        <li class="nav-item"> <a class="nav-link collapsed" href="{{route('user.profile')}}"> <i class="bi bi-person"></i> <span>Profile</span> </a></li>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <li class="nav-item"><a class="nav-link collapsed" href="{{route('admin.logout')}}"
                   onclick="event.preventDefault();
                                                this.closest('form').submit();"> <i class="bi bi-box-arrow-in-right"></i>
                    <span>Log Out</span> </a></li>

        </form>
{{--        <li class="nav-item"> <a class="nav-link collapsed" href="{{ route('admin.logout') }}"> <i class="bi bi-box-arrow-in-right"></i> <span>Logout</span> </a></li>--}}
{{--        <li class="nav-item"> <a class="nav-link collapsed" href="pages-faq.html"> <i class="bi bi-question-circle"></i> <span>F.A.Q</span> </a></li>--}}
{{--        <li class="nav-item"> <a class="nav-link collapsed" href="pages-register.html"> <i class="bi bi-card-list"></i> <span>Register</span> </a></li>--}}
{{--        <li class="nav-item"> <a class="nav-link collapsed" href="pages-error-404.html"> <i class="bi bi-dash-circle"></i> <span>Error 404</span> </a></li>--}}
{{--        <li class="nav-item"> <a class="nav-link collapsed" href="pages-blank.html"> <i class="bi bi-file-earmark"></i> <span>Blank</span> </a></li>--}}
    </ul>
</aside>
