<header class="fixed top-0 left-0 right-0 z-50">
    <nav x-data="{ mobileMenuOpen: false }" class="bg-[var(--primary)]">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Boton de menu movil -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Boton de hamburguesa del menu moviil en estado inactivo-->
                        <svg :class="{ 'hidden': mobileMenuOpen, 'block': !mobileMenuOpen }" class="block size-6"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Boton de cerrar menu movil  en estad activo-->
                        <svg :class="{ 'block': mobileMenuOpen, 'hidden': !mobileMenuOpen }" class="hidden size-6"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex shrink-0 items-center">
                        <img class="h-10 w-auto" src="{{ asset('images/logos/prolab.png') }}" alt="FarmaPro Logo">
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                                aria-current="page">Inicio</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-[var(--hover-primary)] hover:text-white">¿Qué
                                es FarmaPro</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-[var(--hover-primary)] hover:text-white">Productos</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-[var(--hover-primary)] hover:text-white">Sucursales</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-[var(--hover-primary)] hover:text-white">Contacto</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button"
                        class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </button>

                    <!-- Menu desplegable del inicio de sesion -->
                    <div x-data="{ open: false }" @click.outside="open = false" class="relative ml-3">
                        <div>
                            <button @click="open = !open" type="button"
                                class="relative flex rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="size-8 rounded-full" src="{{ asset('images/pruebas/profile.png') }}"
                                    alt="User profile picture">
                            </button>
                        </div>

                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-hidden"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-0">Mi perfil</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-1">Configuracion</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-2">Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mostrar y ocultar el menu movil dependiendo del estado del menu-->
        <div x-show="mobileMenuOpen" class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                    aria-current="page">Inicio</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">¿Qué
                    es FarmaPro</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Productos</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Sucursales</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contacto</a>
            </div>
        </div>
    </nav>
</header>
