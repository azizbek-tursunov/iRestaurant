<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="/images/icons/sitelogo1.png" alt="IMG-LOGO">
                    </a>
                </div>

                <!-- Menu -->
                <div class="wrap_menu  p-l-45 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="{{ route('home') }}">{{ __('layout.home') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('menu') }}">{{ __('layout.menu') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('reservation') }}">{{ __('layout.reservation') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('gallery') }}">{{ __('layout.gallery') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('about') }}">{{ __('layout.about') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('blog.index') }}">{{ __('layout.blog') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('contact') }}">{{ __('layout.contact') }}</a>
                            </li>
                        </ul>
                    </nav>
                </div>

{{--                TODO: Add global varriables --}}
                <!-- Social -->
                <div class="social flex-w flex-l-m p-r-20">
                    <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram    m-l-21" aria-hidden="true"></i></a>

                    <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
                </div>
            </div>
        </div>
    </div>
</header>
