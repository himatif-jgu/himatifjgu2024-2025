<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme no-print">
    <div class="app-brand demo ">
        <a href="" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{asset('assets/img/logo-himatif.png')}}" height="44">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Menu</span>
        </li>
        <li class="menu-item  {{ Request::is('home') ? 'active' : '' }}">
            <a href="home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">home</div>
            </a>
        </li>
        <li class="menu-item  {{ Request::is('posts*') ? 'active' : '' }}">
            <a href="{{ route('posts') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-copy-alt"></i>
                <div data-i18n="Dashboards">Posts</div>
            </a>
        </li>
        <li class="menu-item  {{ Request::is('alumni*') ? 'active' : '' }}">
            <a href="{{ route('alumni') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-graduation'></i>
                <div data-i18n="Dashboards">Alumni</div>
            </a>
        </li>
        <li class="menu-item  {{ Request::is('gallery*') ? 'active' : '' }}">
            <a href="{{ route('gallery') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-images'></i>
                <div data-i18n="Dashboards">Gallery</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Config</span>
        </li>    
        <li class="menu-item {{ Route::currentRouteName()=='account' ? 'active' : '' }}">
            <a href="{{ route('account') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-user-account'></i>
                <div data-i18n="Dashboards">Account</div>
            </a>
        </li>
    </ul>



</aside>
<!-- / Menu -->
