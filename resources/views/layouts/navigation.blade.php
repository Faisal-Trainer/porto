<nav x-data="{ open: false }" class="navigation">
    <!-- Primary Navigation Menu -->
    <div class="grid grid-cols-6 h-auto px-2 sm:px-4 lg:px-6">

        {{-- LOGO --}}
        <div class="flex items-center">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block" />
            </a>
        </div>

        {{-- NAVIGATION --}}
        <div class="col-span-4 flex gap-1 md:gap-2 lg:gap-2.5 justify-evenly px-2 sm:px-4 lg:px-6">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <span class="block lg:hidden">
                    <i class="fi {{ request()->routeIs('dashboard') ? 'fi-sr-home' : 'fi-rr-home' }} text-xl"></i>
                </span>
                <p class="hidden lg:block text-base">
                    WELCOME
                </p>
            </a>

            <a href="{{ route('index') }}" class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}">
                <span class="block lg:hidden">
                    <i class="fi {{ request()->routeIs('index') ? 'fi-sr-user' : 'fi-rr-user' }} text-xl"></i>
                </span>
                <p class="hidden lg:block text-base">
                    ABOUT
                </p>
            </a>

            <a href="{{ route('menu') }}" class="nav-link {{ request()->routeIs('menu') ? 'active' : '' }}">
                <span class="block lg:hidden">
                    <i
                        class="fi {{ request()->routeIs('menu') ? 'fi-sr-holding-hand-dinner' : 'fi-rr-holding-hand-dinner' }} text-xl"></i>
                </span>
                <p class="hidden lg:block text-base">
                    MENU
                </p>
            </a>

            <a href="{{ route('location') }}" class="nav-link {{ request()->routeIs('location') ? 'active' : '' }}">
                <span class="block lg:hidden">
                    <i class="fi {{ request()->routeIs('location') ? 'fi-sr-marker' : 'fi-rr-marker' }} text-xl"></i>
                </span>
                <p class="hidden lg:block text-base">
                    LOKASI OUTLET
                </p>
            </a>

            <a href="{{ route('reservation') }}"
                class="nav-link {{ request()->routeIs('reservation') ? 'active' : '' }}">
                <span class="block lg:hidden">
                    <i
                        class="fi {{ request()->routeIs('reservation') ? 'fi-sr-phone-call' : 'fi-rr-phone-call' }} text-xl"></i>
                </span>
                <p class="hidden lg:block text-base">
                    CONTACT & RESERVATION
                </p>
            </a>
        </div>

        {{-- LOG OUT --}}

        <div class="flex justify-end items-center gap-5">

            {{-- SOCIAL MEDIA --}}
            <div class="gap-2 lg:gap-4 flex text-sm lg:text-xl">
                <a href="#">contact</a>
            </div>

            {{-- ACCOUNT --}}
            <div class="hidden">
                @guest
                    <a href="{{ route('register') }}" class="btn btn-outline-primary">
                        {{ __('Register') }}
                    </a>
                @else
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="btn btn-primary" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>
