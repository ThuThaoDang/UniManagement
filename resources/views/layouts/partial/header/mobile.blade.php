<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <h1><a href="{{ route('home') }}"></a></h1>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                {{-- <li class="has-sub">
                    <li class="has-sub{{ Request::is('admin/dashboard*') ? ' active' : '' }}">
                    <a class="js-arrow" href="">
                        <a class="js-arrow" href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li> --}}
                <li class="{{ Request::is('department*') ? 'active' : '' }}">
                    <a href="{{ route('department.index') }}">
                        <i class="fas fa-building"></i>Departments</a>
                </li>
                <li class="{{ Request::is('instructor*') ? 'active' : '' }}">
                    <a href="{{ route('instructor.index') }}">
                        <i class="fas fa-user"></i>Instructors</a>
                </li>
                <li class="{{ Request::is('course*') ? 'active' : '' }}">
                    <a href="{{ route('course.index') }}">
                        <i class="fas fa-book"></i>Courses</a>
                </li>
                <li class="{{ Request::is('student*') ? 'active' : '' }}">
                    <a href="{{ route('student.index') }}">
                        <i class="fa fa-users"></i>Students</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
