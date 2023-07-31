<div>
    <header class="relative">
        <div class="bg-gray-900 py-6">
            <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                <div class="flex items-center flex-1">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="/">
                            <img class="h-8 w-auto sm:h-10" src="/img/icon_transparent.png"
                                 style="filter: brightness(10);" alt="">
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button onclick="$('#mobile').toggle();" type="button"
                                    class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white"
                                    aria-expanded="false">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="hidden space-x-8 md:flex md:ml-10">
                        <a href="/services" class="text-base font-medium text-white hover:text-gray-300">Services</a>

                        <a href="/about" class="text-base font-medium text-white hover:text-gray-300">Company</a>

                        <a href="/support" class="text-base font-medium text-white hover:text-gray-300">Support</a>

                        <a href="/legal" class="text-base font-medium text-white hover:text-gray-300">Legal</a>

                        <a href="/pricing" class="text-base font-medium text-white hover:text-gray-300">Pricing</a>

                        <a href="/" class="" Test></a>

                    </div>

                </div>
                <div class="hidden md:flex md:items-center md:space-x-6">

                    @guest
                        <a href="/login" class="text-base font-medium text-white hover:text-gray-300">
                            Login
                        </a>

                        <a href="/contact"
                           class="hover:no-underline hover:text-white inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700">
                            Contact
                        </a>
                    @else
                        <a
                            class="hover:no-underline hover:text-white inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white">

                            <div class="relative inline-block text-left">
                                <div>
                                    <button onclick="$('#dropdown').toggle();" type="button"
                                            class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500"
                                            id="menu-button" aria-expanded="true" aria-haspopup="true">
                                        {{ \Auth::user()->name }}
                                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>

                                <div id="dropdown"
                                     class="hidden origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none"
                                     role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                    <div class="px-4 py-2" role="none">
                                        <p class="text-sm" role="none">
                                            Signed in as
                                        </p>
                                        <p class="text-sm font-medium text-gray-900 truncate" role="none">
                                            {{ \Auth::user()->email }}
                                        </p>
                                    </div>
                                    <div role="none">
                                        <a href="/user/profile" class="text-gray-700 block px-4 py-2 text-sm -mt-6"
                                           role="menuitem" tabindex="-1" id="menu-item-0">Settings</a>
                                        <a href="/tickets" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                           tabindex="-1" id="menu-item-1">Tickets</a>
                                    </div>
                                    <div class="py-1" role="none">
                                        <form method="POST" action="https://lisa.systems/logout" role="none">
                                            @csrf
                                            <button type="submit"
                                                    class="text-gray-700 block w-full text-left px-4 py-2 text-sm"
                                                    role="menuitem" tabindex="-1" id="menu-item-3">
                                                Sign out
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </a>
                    @endguest
                </div>
            </nav>
        </div>
        <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top hidden md:hidden" id="mobile">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="/img/icon_transparent.png" style="filter: brightness(0);"
                             alt="">
                    </div>
                    <div class="-mr-2">
                        <button onclick="$('#mobile').toggle();" type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600">

                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="pt-5 pb-6">
                    <div class="px-2 space-y-1">
                        <a href="/services"
                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Services</a>

                        <a href="/about"
                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Company</a>

                        <a href="/support"
                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Support</a>

                        <a href="/legal"
                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Legal</a>

                        <a href="/pricing"
                           class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Pricing</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

</div>
