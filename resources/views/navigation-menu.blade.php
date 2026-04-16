<nav class="fixed z-50 w-full transition-all">
    <div id="navbar"
        class="flex justify-between m-2.5 md:m-5 p-2.5 md:p-5 rounded-2xl lg:rounded-4xl bg-white/50 backdrop-blur-md shadow-xl">
        <!-- Logo -->
        <div class="flex h-15 md:h-20 text-(--color-primary-950)">
            <a href="{{ route('home') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-full" version="1.0" viewBox="0 0 1500 1377"
                    fill="currentColor">
                    <path
                        d="M517.2 3.2C509.5 16 288 406.3 288 407.2c0 .6 51.8 92.6 115.1 204.5L518.2 815h462.5l115.6-203.3C1160 499.8 1212 407.8 1212 407.2c0-.6-50.9-90.8-113.1-200.3C1036.7 97.3 985 5.9 983.9 3.8L982 0H519.2l-2 3.2zm424.3 17.6c-1.8 1.6-349.9 114.2-350.6 113.5-1.5-1.6-52.6-113.2-52.1-113.8.3-.3 91.2-.5 202.1-.5 110.8 0 201.1.4 200.6.8zm61.8 202.6c18.6 103.4 33.5 188.1 33.3 188.3-.5.5-424.6-260-424.6-260.7 0-.8 356.5-116.7 357.1-116.1.3.3 15.7 85.2 34.2 188.5zM549 92.9l24.1 52.4-7.3 7.3c-13.9 13.9-239.3 229.3-239.5 229-.3-.3 190.9-338.1 194.4-343.5l1.6-2.4 1.2 2.4c.7 1.3 12.2 26 25.5 54.8zm541.7 142.5c49.7 87.9 90.2 160 90.1 160.2-.6.6-120 26.5-120.4 26.1-.3-.3-60.5-336.7-62-346.7-.5-3.1-.4-3.3.7-1.5.7 1.1 41.9 73.9 91.6 161.9zm-296.9 52.5C902 354.4 999.3 414.2 1010 420.8c10.7 6.5 19.5 12.3 19.7 12.8.1.5-85.6 49.6-190.5 109.2C734.3 602.3 637 657.6 623 665.5c-14 8-25.8 14.5-26.2 14.5-.5 0-.8-115.4-.8-256.5s.3-256.5.6-256.5 89 54.4 197.2 120.9zm-219 258.8-.3 124.7-124.3-129.1c-68.4-71-124.5-129.4-124.5-129.7-.1-.3 55.8-54.4 124.3-120.2l124.5-119.8.3 124.7c.1 68.6.1 180.8 0 249.4zm605.4-125.5c-1.7 2.9-46.1 81.3-98.7 174.3-52.6 92.9-96 169.4-96.5 169.9-.5.4-.4-.9 0-3 5.7-24.9 75.1-319.9 75.4-320.1.5-.5 118.7-26.1 120.9-26.2 1.6-.1 1.5.5-1.1 5.1zM998 618c-20.9 89.2-38.1 162.5-38.4 162.7-.2.2-77.8-18.8-172.5-42.4-105.2-26.1-171.7-43.1-171.2-43.6 1.3-1.3 419.4-239.7 419.8-239.4.1.2-16.8 73.4-37.7 162.7zm-541-38c60.1 62.4 110.6 114.9 112.2 116.6l2.9 3.1-24.3 40.6c-13.3 22.4-24.5 40.3-24.9 39.9-1.1-1.1-179.9-317.3-179.9-318 0-.4 1.1.5 2.4 1.8 1.3 1.4 51.5 53.6 111.6 116zm302 172.2 164.5 41.3-95.7.3c-52.6.1-138.8.1-191.6 0l-95.9-.3 23.4-38.5c12.8-21.2 24.3-40 25.3-41.8 1.4-2.3 2.6-3.2 3.8-2.8.9.2 75.7 19.1 166.2 41.8zM172 878.1c-16.8 2.4-46 3.4-101.1 3.4H12.2l-.6 5c-.3 2.7-.9 6.6-1.2 8.7l-.6 3.6 11.1.4c10.2.3 11.2.5 13.6 2.8 1.5 1.6 2.8 4.5 3.5 7.9 1.2 6.7 1.3 168.3.1 182.3-1.1 11.7-3.6 17.7-9.3 21.8-3.5 2.6-11.9 5.9-18.9 7.4-2.4.5-2.6 1.1-3.7 9.3-.5 4.9-.9 8.9-.8 9 .1.1 6.2-.8 13.6-1.9 14.4-2.2 39.8-2.8 74-1.8l16.4.5 1.8-8.5c.9-4.7 1.7-9.1 1.8-9.8 0-1.1-3.1-1.2-15.7-.6-22.3.9-26.6-.6-29.4-10.6-1.3-4.8-1.3-45.8-.1-70l.7-12.5 8.5-1.3c5.9-.9 18.1-1.2 39.6-1l31.2.3 2.7-11.8c1.5-6.5 2.4-12.1 2.1-12.4-.4-.4-7.7.2-16.4 1.3-11.7 1.4-22.1 1.9-40.9 1.9-13.8 0-25.4-.3-25.8-.7-.8-.7 2.2-83.6 3.2-90 .7-4.7 3.3-7.5 7.7-8.4 1.9-.3 15.1-.4 29.3-.2 28.4.5 33.7 1.4 38.5 6.5 4 4.4 4.8 8.4 4.8 24.5v14.9l8.8-.7c4.8-.3 9-.9 9.3-1.3.3-.3 1.2-6.9 1.8-14.6 1.2-13.3 4.9-39.3 6.9-48 1-4.5.6-6.6-1.1-6.4-.7.1-3.7.5-6.7 1zM297.7 880.4c-6.5 1.9-12.2 3.7-12.7 4.2s-18.3 46.6-39.6 102.4c-21.2 55.8-39.7 103.9-41 106.7-5.8 13.3-13.5 20.9-23.4 23.3l-4.8 1.2-1.2 7.1c-.6 4-1.4 8-1.6 9-.5 1.6.8 1.7 24.3 1.1 22.3-.6 53.1.4 68.9 2.2l5.1.6 1.2-7.6c.6-4.2 1.1-8.3 1.1-9 0-1-3.9-1.4-16.8-1.8-14.1-.5-17.7-.9-21.5-2.6-8.3-3.7-10.5-10.7-7.2-23.1 1.3-5.1 16-47 16.7-47.7.2-.1 4.4-.8 9.3-1.6 5.9-.8 20.6-1.3 42.4-1.3h33.3l6.4 21c10.7 34.9 11.8 40.9 8.8 46.6-2.2 4.4-8.5 6.8-22.4 8.7l-11.7 1.6-.7 8c-.4 4.3-.3 8.3.2 8.8.4.4 7.5 0 15.7-.9 11.1-1.2 24.3-1.7 50.5-1.7l35.5-.1 1.2-7c1.6-9.7 1.7-9.3-2.4-10-18.4-3-25.7-7.4-31.7-19.3-5.5-11-44.4-139.2-63.2-208.5-2.8-10.4-4.1-13.7-5.3-13.6-.9 0-6.9 1.5-13.4 3.3zm11.1 91.8c8.6 28.5 15.4 52 15.1 52.3-2.3 2.2-70.9 3.5-70.9 1.3 0-.6 7.9-23.5 17.6-50.7 9.7-27.3 18.1-50.9 18.6-52.4 2.4-6.6 3.8-3.1 19.6 49.5zM659 878c-23.7 3.3-42.2 11.9-56.5 26.4-14.4 14.6-20 27.4-20 46.1 0 8 .5 12.4 1.8 16.2 4.2 12.1 16.2 25.9 31.1 35.7 7.7 5.1 14.8 9.1 49.6 28.1 6.9 3.7 15.2 8.6 18.5 10.8 8 5.4 17.4 15.1 20.5 21.2 2.2 4.4 2.5 6.3 2.5 15.5 0 9.9-.2 11-3.3 17.2-9.3 18.8-34.7 28.6-64.8 24.9-18.4-2.3-25.6-6.2-31.2-17.1-4.1-8-5.9-18-6.8-36.8l-.7-14.4-8.1.7c-4.5.4-8.4.9-8.7 1.1-.3.2-.9 9.5-1.2 20.6-.3 11.2-1.3 26.3-2.2 33.7-.9 7.4-1.4 14.5-1 15.8 1.5 6.2 31.4 14.7 55.8 15.9 37.7 1.9 71-10.2 89.7-32.7 9.5-11.4 14.7-24.4 15.7-39.4 1.1-17.1-3.1-27.7-16.1-41-9-9.2-18.4-15.7-38.6-26.5-31.7-17-38-20.6-46.5-26.4-18.9-12.8-25.9-22.7-25.9-36.7 0-6.7.5-8.6 3.2-14.2 7.9-16 24.5-24.1 48.7-24 26.2.1 38.3 5.7 43.2 19.8 1.4 4 1.8 8.3 1.8 21.8 0 19.4-.7 18.3 10.5 17l6.5-.8 1.7-17c1-9.4 2.7-23.3 4-31 1.2-7.7 2.2-15.6 2.2-17.5.1-3.5.1-3.5-7.9-6.2-16.9-5.6-51.2-9.1-67.5-6.8zM1180.7 880.4c-6.5 1.9-12.2 3.7-12.7 4.2-.4.5-18.3 46.6-39.5 102.4-21.3 55.8-39.8 103.9-41.1 106.7-5.8 13.3-13.5 20.9-23.4 23.3l-4.8 1.2-1.2 7.1c-.6 4-1.4 8-1.6 9-.5 1.6.8 1.7 24.3 1.1 22.3-.6 53.1.4 68.9 2.2l5.1.6 1.2-7.6c.6-4.2 1.1-8.3 1.1-9 0-1-3.9-1.4-16.8-1.8-14.1-.5-17.7-.9-21.5-2.6-8.3-3.7-10.5-10.7-7.2-23.1 1.3-5.1 16-47 16.7-47.7.2-.1 4.4-.8 9.3-1.6 5.9-.8 20.6-1.3 42.4-1.3h33.3l6.4 21c10.7 34.8 11.8 40.9 8.8 46.6-2.2 4.4-8.5 6.8-22.4 8.7l-11.7 1.6-.7 8c-.4 4.3-.3 8.3.2 8.8.4.4 7.5 0 15.7-.9 11.1-1.2 24.3-1.7 50.5-1.7l35.5-.1 1.2-7c1.6-9.7 1.7-9.3-2.4-10-18.4-3-25.7-7.4-31.7-19.3-5.6-11.1-44-137.8-63.2-208.5-2.8-10.4-4.1-13.7-5.3-13.6-.9 0-6.9 1.5-13.4 3.3zm11.1 91.8c8.6 28.5 15.4 52 15.1 52.3-2.3 2.2-70.9 3.5-70.9 1.3 0-.6 7.9-23.5 17.6-50.7 9.7-27.3 18.1-50.9 18.6-52.4 2.4-6.6 3.8-3.1 19.6 49.5zM516.5 880.3c-3.9.6-22.8 1-42.3 1-35 0-35.2 0-35.7 2.1-1.4 6.3-2.6 14.9-2.1 15.3.3.3 5.5.5 11.5.4 12.7-.2 16 .9 18.2 6.1 1.2 2.7 1.4 19.5 1.4 98.8v95.5l-3 6c-3.7 7.5-9.2 11.4-20 14.3-4.3 1.2-7.9 2.3-8.1 2.5-.6.5-2.7 16.8-2.3 17.1.2.2 6-.6 12.9-1.7 11.1-1.9 16.6-2.1 48.6-2l36.2.1 1.6-8.1c.9-4.5 1.6-8.8 1.6-9.5 0-1-2.7-1.1-12.8-.6-11.7.6-13.2.5-17.5-1.4-8.2-3.6-8.2-3.7-8.1-46.7.1-36.4 1.3-77.3 3.9-129.6 1.4-29.2 2.3-33.5 8.1-37.6 2.9-2.1 10.5-4.6 17.7-5.8 2-.3 3.7-1.1 3.8-1.8 0-.7.4-4.5.8-8.5l.7-7.2-4.1.1c-2.2.1-7.1.6-11 1.2zM869 880.3c-3.6.6-21.1 1.1-39.6 1.1h-33.1l-1.2 7.5c-.6 4.2-1.1 8.1-1.1 8.8 0 .8 3.5 1.2 11 1.5 10.2.3 11.1.5 13.5 2.8 1.8 1.8 2.8 4.4 3.5 8.5 1.1 6.7 1.2 111.8.2 160.5-.7 29.4-.8 30.7-3.1 35.3-3.6 7.3-11.6 12.1-25.2 15.1-2.5.5-2.7 1.1-3.7 8.8-.6 4.6-.9 8.4-.7 8.6.2.2 3.6-.1 7.7-.7 14.1-2.1 46.1-3.4 66-2.7 22.3.7 19.9 1.7 21.7-8.8 1.9-10.5 2.8-9.7-10.6-9.1-10.2.6-12.3.4-15.2-1.2-8.5-4.5-9.3-9.8-8.1-56.3.5-19 .9-35.9 1-37.6v-3.1l13.3-1.1c26.6-2.3 53.9-3.3 83.2-3l30 .3v39.5c-.1 34.5-.3 40.3-1.8 45.9-3.1 11.5-8.1 15.4-21.7 16.9l-6.4.7-1.3 6.5c-.7 3.6-1.5 7.4-1.7 8.5-.5 2-.1 2 46.8 2l47.4.1 1.1-7.1c.7-3.8 1.4-8 1.7-9.1.6-2.2.4-2.2-12.8-2-21.3.2-22.1-.9-22.6-29.4-.5-26.8 2.1-113.3 4.8-161.3 1.2-22.3 3.5-25.9 18.5-29.2l7.3-1.7.7-7.9c.4-4.4.5-8.3.1-8.6-.3-.3-6.5.1-13.8.8-8.2.9-24.5 1.4-42.6 1.4-28.7-.1-29.3 0-29.7 2-1.3 6.3-2.4 14.9-2 15.3.2.3 4.3.4 9 .3 10.7-.3 15 1 17.3 5.2 1.5 2.9 1.7 7.6 2 45.9l.3 42.6-4.8.6c-16.8 2.3-29 2.8-72.5 3.3l-48.8.5v-5.7c0-13 2.1-60.7 3.1-70 1.8-16.9 4.8-20.9 17.8-23.9 3.5-.8 6.8-2.1 7.2-2.8.5-.7.9-3.2.9-5.4 0-2.3.3-5.6.6-7.3.6-3.1.6-3.1-3.2-3-2.2.1-6.8.6-10.4 1.2zM1398 880.3c-5.1.8-27.3 1.2-73 1.2-.3 0-2.8 17-2.5 17.3.2.3 4.7.4 9.9.3 11-.2 14.6 1.1 16.7 6.1 1.2 2.7 1.4 19.5 1.4 98.8 0 89.6-.1 95.8-1.8 100.7-2.5 7.2-7.7 11.6-16.9 14.4-4 1.2-7.5 2.3-7.7 2.5-.7.6-2.8 17.4-2.2 17.4.3 0 6-.7 12.6-1.5s19.7-1.8 29-2.1c16.2-.6 69.3.7 102.5 2.6 12.7.7 15.7.6 16.6-.5.6-.8 1.6-6.5 2.3-12.7.7-6.2 3.2-23.2 5.6-37.8 2.4-14.6 4.1-26.8 3.7-27.2-.4-.4-3.8-.3-7.7.2-3.8.5-7.8.9-8.7 1-1 0-1.8.8-1.8 1.8 0 3.9-6.1 26.6-8.8 32.5-4.9 10.7-11.5 16.5-22.7 19.6-7.2 2-32.8 3.2-43.8 2.1-12.1-1.2-15.4-2.9-18.6-9.3-2-4.1-2.4-6.6-2.8-19.5-1.3-35 3.6-160.3 6.8-176.9 1.5-7.5 6.2-11.6 16.3-13.8 8.4-1.9 7.8-1 9-13.3l.5-5.2-3.7.1c-2 .1-6.6.6-10.2 1.2zM10.3 1169.2c-5 1.7-8.8 6.2-8.8 10.8 0 4.2 2.1 7.2 7 9.9 2.8 1.5 57.5 1.6 741.5 1.6s738.7-.1 741.5-1.6c4.9-2.7 7-5.7 7-9.9 0-4.8-4.1-9.5-9.4-11-5.1-1.4-1474.4-1.2-1478.8.2zM1 1231v11h34v135h29v-135h16c15.7 0 16 0 16.4-2.3.8-3.3 2.6-16.4 2.6-18.1 0-1.4-5.3-1.6-49-1.6H1v11zM241 1298.4v78.6h29v-63.1l7.1.3 7.2.3 13.6 31.2 13.6 31.3h15.3c8.3 0 15.2-.2 15.2-.5 0-.2-7.2-15.4-16-33.7-8.8-18.2-16-33.5-16-33.9 0-.4 1.9-1.8 4.3-3.2 16.2-9.5 23.9-30.2 19.2-52-3.5-16.5-13.2-26-32-31.3-4.8-1.4-11.6-1.8-33.2-2.1l-27.3-.5v78.6zm49.5-56c10.5 3.2 15.1 11.8 14.3 26.5-1 17.2-7.1 23-25 23.9l-9.8.5V1241h7.8c4.4 0 10 .7 12.7 1.4zM510.6 1220.8c-.2.4-9 35-19.6 77-10.5 41.9-19.3 76.9-19.6 77.7-.5 1.3 1.5 1.5 13.8 1.5h14.5l3.8-18.5 3.8-18.5h20.3c20.3 0 20.4 0 20.9 2.2.3 1.3 1.9 8.8 3.5 16.8 1.7 8 3.3 15.3 3.6 16.2.5 1.6 2.1 1.8 15.1 1.8 11.2 0 14.4-.3 14.1-1.3-.3-.6-9.2-36-19.9-78.4l-19.4-77.3h-17.2c-9.4 0-17.4.3-17.7.8zM536 1281c3.9 19 7.3 35.3 7.6 36.2.5 1.7-.7 1.8-15.5 1.8-8.9 0-16.1-.4-16.1-.9s3.4-17.2 7.5-37.2c4.1-20 7.5-36.9 7.6-37.4.2-3.3 2.6 6.9 8.9 37.5zM726 1298.5v78.5h29v-157h-29v78.5zM910 1298.5v78.5h25v-42.4c0-38.3-1.6-75.3-3.6-83.1-.4-1.6-.3-1.7.5-.5.8 1.3 39.1 124.2 39.1 125.5 0 .3 8.3.5 18.5.5h18.5v-157h-25.2l.5 54.7c.3 34.4.9 57.7 1.6 62.7.7 4.3 1.1 8.2.9 8.7-.2.5-9.1-27.6-19.8-62.4l-19.5-63.2-18.3-.3-18.2-.2v78.5zM1163 1298.5v78.5h78v-21h-49v-48h40v-21h-40v-46l23.2-.2 23.3-.3 1.1-8.5c.7-4.7 1.3-9.3 1.3-10.3.1-1.6-2.4-1.7-38.9-1.7h-39v78.5zM1390 1298.4v78.6h28v-63h14.6l13.4 30.7c7.3 17 13.6 31.1 14 31.6.4.4 7.4.6 15.7.5l15.1-.3-16.4-33.9c-9-18.7-16.3-34-16.1-34.1.1-.1 2.8-1.8 5.9-3.8 14.2-9 20.6-24.9 18.6-46.1-1.4-14.5-8.9-25.9-20.9-31.8-11.2-5.4-15.3-6-44.6-6.5l-27.3-.5v78.6zm52.5-54.7c8.1 4.2 10.8 9.9 10.9 22.9 0 8.2-.2 9.7-2.9 15-4.2 8.2-9.2 10.7-22.7 11.2l-9.8.4v-52.5l10.3.5c7.6.4 11.2 1 14.2 2.5z" />
                </svg>
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="gap-1.5 flex-row justify-center hidden lg:flex">
            <div class="navbar-menu">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('home') }}
                </x-nav-link>
                <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">
                    {{ __('about') }}
                </x-nav-link>
                <x-nav-link href="{{ route('service') }}" :active="request()->routeIs('service')">
                    {{ __('service') }}
                </x-nav-link>
                <x-nav-link href="{{ route('portfolio') }}" :active="request()->routeIs('portfolio')">
                    {{ __('portofolio') }}
                </x-nav-link>
                <x-nav-link href="{{ route('blog.index') }}" :active="request()->routeIs('blog.index')">
                    {{ __('blog') }}
                </x-nav-link>
            </div>
        </div>

        @auth
            <div class="hidden lg:flex lg:items-center">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-hidden focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <x-dropdown class="w-48">
                        <x-slot name="trigger">
                            @auth
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-hidden focus:border-gray-300 transition">
                                        <img class="size-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center navbar-menu">
                                            {{ Auth::user()->name }}

                                            <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            @endauth
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-(--color-primary-500) bg-(--color-primary-300)">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        @endauth
        @guest
            <div class="navbar-action flex justify-center items-center">
                <x-button-primary-purple href="{{ route('contact.create') }}">Contact</x-button-primary-purple>
            </div>
        @endguest

        <!-- Hamburger -->
        <div id="hamburger" class="flex items-center justify-end lg:hidden">
            <input type="checkbox" id="checkbox">
            <label for="checkbox" class="toggle">
                <div class="bars" id="bar1"></div>
                <div class="bars" id="bar2"></div>
                <div class="bars" id="bar3"></div>
            </label>
        </div>

        <!-- Responsive Navigation Menu -->
        <div id="mobile-menu"
            class="absolute top-full left-0 w-full bg-white/30 backdrop-blur-md hidden lg:hidden rounded-b-2xl overflow-hidden transition">
            <div id="dropdownMenu"
                class="flex flex-col justify-around text-2xl md:text-3xl transition-all duration-500">
                @auth
                    <div class="flex items-center px-4">
                        @auth
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <div class="shrink-0 me-3">
                                    <img class="size-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}" />
                                </div>
                            @endif
                        @endauth
                        <div>
                            <div class="font-medium text-base text-(--color-primary-950)">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-(--color-primary-700)">{{ Auth::user()->email }}</div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-around text-2xl md:text-3xl transition-all duration-500">
                        <!-- Account Management -->
                        <a href="{{ route('profile.show') }}" @class([
                            'bar-HP',
                            'text-purple-600 font-semibold' => request()->routeIs('profile.show'),
                        ])>
                            {{ __('profile') }}
                        </a>
                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-responsive-nav-link href="{{ route('api-tokens.index') }}"
                                :active="request()->routeIs('api-tokens.index')">
                                {{ __('API Tokens') }}
                            </x-responsive-nav-link>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data
                            class="flex flex-col justify-around text-2xl md:text-3xl transition-all duration-500">
                            @csrf
                            <a class="bar-HP" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>

                        <!-- Team Management -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="border-t border-gray-200"></div>

                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Team') }}
                            </div>

                            <!-- Team Settings -->
                            <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                                :active="request()->routeIs('teams.show')">
                                {{ __('Team Settings') }}
                            </x-responsive-nav-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-responsive-nav-link href="{{ route('teams.create') }}"
                                    :active="request()->routeIs('teams.create')">
                                    {{ __('Create New Team') }}
                                </x-responsive-nav-link>
                            @endcan

                            <!-- Team Switcher -->
                            @if (Auth::user()->allTeams()->count() > 1)
                                <div class="border-t border-gray-200"></div>

                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Switch Teams') }}
                                </div>

                                @foreach (Auth::user()->allTeams() as $team)
                                    <x-switchable-team :team="$team" component="responsive-nav-link" />
                                @endforeach
                            @endif
                        @endif
                    </div>
                @endauth
                <a href="{{ route('home') }}" @class([
                    'bar-HP',
                    'text-purple-600 font-semibold' => request()->routeIs('home'),
                ])>
                    {{ __('home') }}
                </a>
                <a href="{{ route('about') }}" @class([
                    'bar-HP',
                    'text-purple-600 font-semibold' => request()->routeIs('about'),
                ])>
                    {{ __('about') }}
                </a>
                <a href="{{ route('service') }}" @class([
                    'bar-HP',
                    'text-purple-600 font-semibold' => request()->routeIs('service'),
                ])>
                    {{ __('service') }}
                </a>
                <a href="{{ route('portfolio') }}" @class([
                    'bar-HP',
                    'text-purple-600 font-semibold' => request()->routeIs('portfolio'),
                ])>
                    {{ __('portfolio') }}
                </a>
                <a href="{{ route('blog.index') }}" @class([
                    'bar-HP',
                    'text-purple-600 font-semibold' => request()->routeIs('blog.index'),
                ])>
                    {{ __('blog') }}
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    const checkbox = document.getElementById("checkbox");
    const mobileMenu = document.getElementById("mobile-menu");
    const navbar = document.getElementById("navbar");

    checkbox.addEventListener("change", () => {
        mobileMenu.classList.toggle("hidden");

        if (!mobileMenu.classList.contains("hidden")) {
            navbar.classList.remove("rounded-2xl");
            navbar.classList.add("rounded-t-2xl");
        } else {
            navbar.classList.remove("rounded-t-2xl");
            navbar.classList.add("rounded-2xl");
        }
    });
</script>