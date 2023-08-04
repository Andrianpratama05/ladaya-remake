<nav class="bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('images/logoladaya.png') }}" alt="Logo" class="h-8 w-auto">
                    <span class="ml-2 text-xl font-semibold text-gray-800 dark:text-white">Ladaya</span>
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-800 dark:text-white hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                    aria-expanded="false" id="mobile-menu-button">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <nav class="hidden md:flex space-x-10">
                <x-nav-link title="Home" :route="route('home')" />
                <x-nav-link title="Pesan" :route="route('pesan')" />
                <x-nav-link title="Halaman" :route="route('page')" />
                <x-nav-link title="Galeri" :route="route('gallery')" />
            </nav>
        </div>
    </div>

    <div class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <div>
                <x-nav-link title="Home" :route="route('home')" />
            </div>
            <div>
                <x-nav-link title="Pesan" :route="route('pesan')" />
            </div>
            <div>
                <x-nav-link title="Halaman" :route="route('page')" />
            </div>
            <div>
                <x-nav-link title="Galeri" :route="route('gallery')" />
            </div>
        </div>
    </div>
</nav>
