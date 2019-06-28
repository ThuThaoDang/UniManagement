<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <h1>Great Meal</h1>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <li class="has-sub{{ Request::is('dashboard*') ? ' active' : '' }}">
                    <a class="js-arrow" href="">
                        <a class="js-arrow" href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="{{ Request::is('department*') ? 'active' : '' }}">
                    <a href="{{ route('department.index') }}">
                        <i class="fas fa-play-circle"></i>Departments</a>
                </li>
                <li class="{{ Request::is('instructor*') ? 'active' : '' }}">
                    <a href="{{ route('instructor.index') }}">
                        <i class="fas fa-th-list"></i>Instructors</a>
                </li>
                <li class="{{ Request::is('course*') ? 'active' : '' }}">
                    <a href="{{ route('course.index') }}">
                        <i class="fas fa-th"></i>Courses</a>
                </li>
                <li class="{{ Request::is('student*') ? 'active' : '' }}">
                    <a href="{{ route('student.index') }}">
                        <i class="fa fa-check-square"></i>Students</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
