<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <div class="app-brand demo">

        <a href="{{ url('/admin/dashboard') }}" class="app-brand-link">

            <span class="app-brand-logo demo">
            </span>

            <span class="app-brand-text demo menu-text fw-bolder ms-2 mt-3 "
      style="font-size: 24px;"><i class="menu-icon tf-icons bx bx-layer"></i>NexusAI</span>
        </a>

        <a href="javascript:void(0);"
           class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">

            <i class="bx bx-chevron-left bx-sm align-middle"></i>

        </a>

    
</span>

        </a>

        <a href="javascript:void(0);"
           class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">

            <i class="bx bx-chevron-left bx-sm align-middle"></i>

        </a>

    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1"
    style="padding-bottom: 80px !important;">

        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }} mt-5">

            <a href="{{ url('/admin/dashboard') }}" class="menu-link">

                <i class="menu-icon tf-icons bx bx-home-circle"></i>

                <div data-i18n="Analytics">
                    Dashboard
                </div>

            </a>

        </li>


        <!-- Layouts -->
        

            
            


                <li class="menu-item {{ request()->routeIs('admin.hero*') ? 'active' : '' }}">

                 <a href="{{ route('admin.hero') }}" class="menu-link">

                    <i class="menu-icon tf-icons bx bx-home"></i>

                    <div data-i18n="Hero">
                       Hero
                    </div>

                </a>

        </li>

<li class="menu-item {{ request()->routeIs('admin.social*') ? 'active' : '' }}">

    <a
        href="{{ route('admin.social') }}"
        class="menu-link"
    >

        <i class="menu-icon tf-icons bx bx-bar-chart-alt-2"></i>

        <div data-i18n="Social">
            Social
        </div>

    </a>

</li>

<li class="menu-item {{ request()->routeIs('admin.feature*') ? 'active' : '' }}">

    <a
        href="{{ route('admin.feature') }}"
        class="menu-link"
    >

        <i class="menu-icon tf-icons bx bx-grid-alt"></i>

        <div data-i18n="Features">
            Features
        </div>

    </a>

</li>

<li class="menu-item {{ request()->routeIs('admin.work*') ? 'active' : '' }}">

    <a
        href="{{ route('admin.work') }}"
        class="menu-link"
    >

        <i class="menu-icon tf-icons bx bx-list-ol"></i>

        <div data-i18n="Work Section">
            Work Section
        </div>

    </a>

</li>


<li class="menu-item {{ request()->routeIs('admin.integration*') ? 'active' : '' }}">

    <a
        href="{{ route('admin.integration') }}"
        class="menu-link"
    >

        <i class="menu-icon tf-icons bx bx-git-branch"></i>

        <div data-i18n="Integration">
            Integration
        </div>

    </a>

</li>



<li class="menu-item {{ request()->routeIs('admin.price*') ? 'active' : '' }}">

    <a href="{{ route('admin.price') }}" class="menu-link">

        <i class="menu-icon tf-icons bx bx-dollar"></i>

        <div data-i18n="Pricing">
            Pricing
        </div>

    </a>

</li>



<li class="menu-item {{ request()->routeIs('admin.testimonial*') ? 'active' : '' }}">

    <a href="{{ route('admin.testimonial') }}" class="menu-link">

        <i class="menu-icon tf-icons bx bx-message-rounded-detail"></i>

        <div data-i18n="Testimonial">
            Testimonial
        </div>

    </a>

</li>

<li class="menu-item {{ request()->routeIs('admin.faq*') ? 'active' : '' }}">

    <a href="{{ route('admin.faq') }}" class="menu-link">

        <i class="menu-icon tf-icons bx bx-help-circle"></i>

        <div data-i18n="FAQ">
            FAQ
        </div>

    </a>

</li>

            

        </li>


        <!-- Pages -->


        <!-- Account Settings -->



        <!-- Authentications -->



        <!-- Misc -->


    </ul>


        </ul>

           <!-- Logout Button -->
    <div class="sidebar-logout">

        <form action="{{ route('logout') }}" method="POST">

            @csrf

            <button type="submit" class="logout-button">

                <i class="bx bx-log-out"></i>

                <span>
                    Log Out
                </span>

            </button>

        </form>

    </div>

</aside>

<style>
.sidebar-logout {
    position: absolute;
    bottom: 20px;
    left: 0;
    width: 100%;
    padding: 0 20px;
    z-index: 10;
}

.sidebar-logout form {
    margin: 0;
    padding: 0;
}

.logout-button {
    width: 100%;
    height: 45px;

    display: flex;
    align-items: center;

    border: none;
    border-radius: 8px;

    background: transparent;
    color: #697a8d;

    font-size: 15px;
    font-weight: 500;

    cursor: pointer;
    padding: 0 15px;

    transition: all 0.3s ease;
}

.logout-button i {
    font-size: 21px;
    margin-right: 12px;
}

.logout-button:hover {
    background: #f1f1ff;
    color: #696cff;
}
</style>