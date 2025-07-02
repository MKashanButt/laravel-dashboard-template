<nav x-data="{ open: false }"
    class="w-64 h-auto bg-blue-900/90 text-white text-xs overflow-y-auto mt-2 mb-2 ml-2 rounded-md backdrop-blur-xs shadow-md">
    <!-- Logo -->
    <div class="h-16 flex items-center px-4 border-b-2 border-white">
        <a href="{{ route('dashboard') }}" class="flex items-center">
            <x-application-logo class="block h-9 w-auto fill-current fill-white" />
        </a>
    </div>

    <!-- Navigation Links -->
    <div class="mt-4 flex flex-col gap-6">
        <!-- Main Section -->
        <div class="px-4 space-y-1">
            <x-nav-heading>
                {{ __('Main') }}
            </x-nav-heading>
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="block py-2">
                {{ __('Dashboard') }}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 inline-block mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
                </svg>
            </x-nav-link>
        </div>
    </div>
</nav>
