<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item"> <a class="nav-link " href="{{route('admin.dashboard')}}"> <i class="bi bi-grid"></i> <span>Dashboard</span> </a></li>
        <li class="nav-item">
            <a class="nav-link collapsed " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-menu-button-wide"></i><span>Banner</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{route('banner.list')}}"> <i class="bi bi-circle"></i><span>Banner list</span> </a></li>
                <li> <a href="{{route('banner.create')}}"> <i class="bi bi-circle "></i><span>Create</span> </a></li>
{{--                <li> <a href="components-badges.html"> <i class="bi bi-circle"></i><span>Badges</span> </a></li>--}}
{{--                <li> <a href="components-breadcrumbs.html"> <i class="bi bi-circle"></i><span>Breadcrumbs</span> </a></li>--}}
{{--                <li> <a href="components-buttons.html"> <i class="bi bi-circle"></i><span>Buttons</span> </a></li>--}}
{{--                <li> <a href="components-cards.html"> <i class="bi bi-circle"></i><span>Cards</span> </a></li>--}}
{{--                <li> <a href="components-carousel.html"> <i class="bi bi-circle"></i><span>Carousel</span> </a></li>--}}
{{--                <li> <a href="components-list-group.html"> <i class="bi bi-circle"></i><span>List group</span> </a></li>--}}
{{--                <li> <a href="components-modal.html"> <i class="bi bi-circle"></i><span>Modal</span> </a></li>--}}
{{--                <li> <a href="components-tabs.html"> <i class="bi bi-circle"></i><span>Tabs</span> </a></li>--}}
{{--                <li> <a href="components-pagination.html"> <i class="bi bi-circle"></i><span>Pagination</span> </a></li>--}}
{{--                <li> <a href="components-progress.html"> <i class="bi bi-circle"></i><span>Progress</span> </a></li>--}}
{{--                <li> <a href="components-spinners.html"> <i class="bi bi-circle"></i><span>Spinners</span> </a></li>--}}
{{--                <li> <a href="components-tooltips.html"> <i class="bi bi-circle"></i><span>Tooltips</span> </a></li>--}}
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed " data-bs-target="#components-nav-c" data-bs-toggle="collapse"  href="#"> <i class="bi bi-menu-button-wide"></i><span>Conatct</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="components-nav-c" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{route('conatct.list')}}"> <i class="bi bi-circle"></i><span>Conatct list</span> </a></li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-journal-text"></i><span>Home page setting</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{route('homepage.index')}}"> <i class="bi bi-circle"></i><span>Setting</span> </a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Our Suecssfully Story</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{route('story.list')}}"> <i class="bi bi-circle"></i><span>Story list</span> </a></li>
                <li> <a href="{{route('story.create')}}"> <i class="bi bi-circle"></i><span>Create new Story</span> </a></li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="charts-chartjs.html"> <i class="bi bi-circle"></i><span>Chart.js</span> </a></li>
                <li> <a href="charts-apexcharts.html"> <i class="bi bi-circle"></i><span>ApexCharts</span> </a></li>
                <li> <a href="charts-echarts.html"> <i class="bi bi-circle"></i><span>ECharts</span> </a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="icons-bootstrap.html"> <i class="bi bi-circle"></i><span>Bootstrap Icons</span> </a></li>
                <li> <a href="icons-remix.html"> <i class="bi bi-circle"></i><span>Remix Icons</span> </a></li>
                <li> <a href="icons-boxicons.html"> <i class="bi bi-circle"></i><span>Boxicons</span> </a></li>
            </ul>
        </li>
        <li class="nav-heading">Pages</li>
        <li class="nav-item"> <a class="nav-link collapsed" href="users-profile.html"> <i class="bi bi-person"></i> <span>Profile</span> </a></li>
        <li class="nav-item"> <a class="nav-link collapsed" href="pages-faq.html"> <i class="bi bi-question-circle"></i> <span>F.A.Q</span> </a></li>
        <li class="nav-item"> <a class="nav-link collapsed" href="pages-contact.html"> <i class="bi bi-envelope"></i> <span>Contact</span> </a></li>
        <li class="nav-item"> <a class="nav-link collapsed" href="pages-register.html"> <i class="bi bi-card-list"></i> <span>Register</span> </a></li>
        <li class="nav-item"> <a class="nav-link collapsed" href="pages-login.html"> <i class="bi bi-box-arrow-in-right"></i> <span>Login</span> </a></li>
        <li class="nav-item"> <a class="nav-link collapsed" href="pages-error-404.html"> <i class="bi bi-dash-circle"></i> <span>Error 404</span> </a></li>
        <li class="nav-item"> <a class="nav-link collapsed" href="pages-blank.html"> <i class="bi bi-file-earmark"></i> <span>Blank</span> </a></li>
    </ul>
</aside>
