<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="images/icon/xss_filter_rectangle.png" alt="Anti-XSS Filter" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{ route('home') }}">
                        <i class="fas fa-tachometer-alt"></i>Inici
                    </a>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="{{ route('contact') }}">
                        <i class="fas fa-tachometer-alt"></i>Contacte
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
