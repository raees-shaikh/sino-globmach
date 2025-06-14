<header class="topbar ">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" style="line-height: 0px;">
            <a class="navbar-brand" href="{{ url('/') }}">
                <b>
                    <img src="{{ asset('frontend/images/icon.png') }}" width="60" height="55" alt="homepage"
                        class="dark-logo pb-1" />
                    <img src="{{ asset('frontend/images/icon.png') }}" width="60" height="55" alt="homepage"
                        class="light-logo single-icon  " />

                </b>
                <span style="">
                    {{-- <img src="{{ asset('images/saturn-blue-links-logo-dark.png') }}" style="widht:80%;height:auto"
                        alt="homepage" />
                    <img src="{{asset('img/riskwala-logo.png')}}" width="160" height="50" class="light-logo"
                    alt="homepage" /> --}}
                    <img src="{{ asset('frontend/images/icon.png') }}" width="60" height="55" alt="homepage"
                        class="dark-logo" />
                    <img src="{{ asset('frontend/images/image-new.png') }}" width="150" height="65"
                        class="light-logo px-0 mx-0 pb-1" alt="homepage" /> </span>
            </a>

            <a class="navbar-brand " href="javascript:void(0)">

                <span>
                </span>
            </a>
        </div>
        </div>
        <div class="navbar-collapse ">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item ">
                    <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark bg-mobi"
                        href="javascript:void(0)">
                        <i class="ti-menu"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                        href="javascript:void(0)">
                        <i class="icon-menu"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown u-pro">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="hidden-md-down d-block">Admin &nbsp;
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right animated flipInY">
                        {{-- <a href="{{route('changepassword')}}" class="dropdown-item">
                        <i class="fa fa-unlock-alt"></i>
                        Change Password --}}
                        <a href="{{ url('logout') }}" class="dropdown-item">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                        <a href="{{ route('changePassword') }}" class="dropdown-item">
                            <i class="fa fa-sign-out"></i> Change Password
                        </a>
                        {{-- <a href="{{route('changePassword')}}" class="dropdown-item">
                        <i class="fa fa-sign-out"></i> Change Password --}}
                        </a>
                        {{-- </a> --}}
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar ">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav ">
            <ul id="sidebarnav">

                <li>
                    <a href="/" class="waves-effect waves-dark" aria-expanded="false">
                        <i class="fa fa-bar-chart "></i>
                        <span class="hide-menu ">
                            Statistics
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('cms.offer.index') }}" class="waves-effect waves-dark" aria-expanded="false">
                        <i class="fa fa-bookmark-o "></i>
                        <span class="hide-menu ">
                            Offers
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('cms.categories.index') }}" class="waves-effect waves-dark" aria-expanded="false">
                        <i class="fa fa-th-large "></i>
                        <span class="hide-menu ">
                            Categories
                        </span>
                    </a>
                </li>

                {{-- <li>
                    <a href="{{ route('cms.subCategoryOne.index') }}" class="waves-effect waves-dark"
                        aria-expanded="false">
                        <i class="fa fa-list-alt "></i>
                        <span class="hide-menu ">
                            Sub Categories One
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cms.subCategoryTwo.index') }}" class="waves-effect waves-dark "
                        aria-expanded="false">
                        <i class="fa fa-list-alt "></i>
                        <span class="hide-menu  ">
                            Sub Categories Two
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cms.subCategoryThree.index') }}" class="waves-effect waves-dark"
                        aria-expanded="false">
                        <i class="fa fa-list-alt "></i>
                        <span class="hide-menu  ">
                            Sub Categories Three
                        </span>
                    </a>
                </li> --}}

                {{-- <li>
                    <a href="{{ url('product-categories') }}" class="waves-effect waves-dark " aria-expanded="false">
                        <i class="fa fa-th-list"></i>
                        <span class="hide-menu ">
                            Product Categories
                        </span>
                    </a>
                </li> --}}

                {{-- <li>
                    <a href="{{ url('products') }}" class="waves-effect waves-dark" aria-expanded="false">
                        <i class="fa fa-product-hunt"></i>
                        <span class="hide-menu">
                            Products
                        </span>
                    </a>
                </li> --}}



                <li>
                    <a href="{{ route('cms.exhibition.index') }}" class="waves-effect waves-dark"
                        aria-expanded="false">
                        <i class="fa fa-image "></i>
                        <span class="hide-menu ">
                            Exhibitions
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('cms.data.index') }}" class="waves-effect waves-dark"
                        aria-expanded="false">
                        <i class="fa fa-database "></i>
                        <span class="hide-menu ">
                            Data
                        </span>
                    </a>
                </li>

                {{-- <li>
                    <a href="/" class="waves-effect waves-dark" aria-expanded="false">
                        <i class="fa fa-usd"></i>
                        <span class="hide-menu">
                            Subscriptions
                        </span>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
