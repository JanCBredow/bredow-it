<x-guest-layout>

    @livewire('landing-header')

    <div class="bg-gray-900">
        <div class="bg-white py-15">

            <main>

                <!-- Hero section -->
                <div class="relative isolate overflow-hidden bg-gray-900 pb-16 sm:pb-20">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2830&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                                <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-200 ring-1 ring-white/10 hover:ring-white/20">
                                    Ein Rückblick auf lisa-system - covid-test-software <a href="https://lisa.jan-bredow.de" class="font-semibold text-white"><span class="absolute inset-0" aria-hidden="true"></span>Besuchen <span aria-hidden="true">&rarr;</span></a>
                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Bredow-IT</h1>
                                <br />
                                <h2 class="text-2xl font-bold tracking-tight text-white sm:text-4xl">Managed-Hosting, Softwareentwicklung, Beratung.</h2>
                                <p class="mt-6 text-lg leading-8 text-gray-300">Skalieren Sie ihre digitale Infrastruktur aufs nächste Level, während Sie sich auf Ihre Kernaktivitäten konzentrieren.</p>
                                <div class="mt-10 flex items-center justify-center gap-x-6">
                                    <a href="{{route('bookings.create')}}" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Jetzt beraten lassen</a>
                                    <a href="https://lisa.jan-bredow.de" class="text-sm font-semibold leading-6 text-white">Live demo <span aria-hidden="true">→</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                </div>

                <!-- Pricing section -->

                <div class="bg-white py-24 sm:py-32">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-4xl text-center">
                            <h2 class="text-base font-semibold leading-7 text-indigo-600">Produkte im Vergleich</h2>
                            <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">IT für Ihr Business: Angebote im direkten Vergleich</p>
                        </div>
                        <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-600">Strategische IT-Entscheidungen für Ihr Unternehmen: Angebote im direkten Vergleich. Hervorgehobene Unterscheidungen und effiziente technologische Lösungen.</p>

                        <!-- mobile -->
                        <div class="mx-auto mt-12 max-w-md space-y-8 sm:mt-16 lg:hidden">

                            <section class="p-8">
                                <h3 id="tier-basic" class="text-sm font-semibold leading-6 text-gray-900">Starter</h3>
                                <p class="mt-2 flex items-baseline gap-x-1 text-gray-900">
                                    <span class="text-4xl font-bold">9</span>
                                    <span class="text-sm font-semibold">/monat</span>
                                </p>
                                <a href="{{ route('bookings.create') }}" aria-describedby="tier-basic" class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300">Termin vereinbaren</a>
                                <ul role="list" class="mt-10 space-y-4 text-sm leading-6 text-gray-900">
                                    <li>
                                        <ul role="list" class="space-y-4">
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Domain </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> IPv4 & IPv6 Adresse </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul role="list" class="space-y-4">
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Leistungsstarke VM </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul role="list" class="space-y-4">
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> 24/7 digitaler Kundensupport </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </section>

                            <section class="p-8 rounded-xl bg-gray-400/5 ring-1 ring-inset ring-gray-200">
                                <h3 id="tier-essential" class="text-sm font-semibold leading-6 text-gray-900">Premium</h3>
                                <p class="mt-2 flex items-baseline gap-x-1 text-gray-900">
                                    <span class="text-4xl font-bold">29</span>
                                    <span class="text-sm font-semibold">/monat</span>
                                </p>
                                <a href="{{ route('bookings.create') }}" aria-describedby="tier-essential" class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-600 text-white hover:bg-indigo-500">Termin vereinbaren</a>
                                <ul role="list" class="mt-10 space-y-4 text-sm leading-6 text-gray-900">
                                    <li>
                                        <ul role="list" class="space-y-4">
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Domain </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> IPv4 & IPv6 Adresse </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Importing and exporting </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span>
                  Team members
                  <span class="text-sm leading-6 text-gray-500">(Up to 20 users)</span>
                </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul role="list" class="space-y-4">
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Leistungsstarke VM </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Basic reports </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul role="list" class="space-y-4">
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> 24/7 digitaler Kundensupport </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Quarterly product workshops </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Priority phone support </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </section>

                            <section class="p-8">
                                <h3 id="tier-premium" class="text-sm font-semibold leading-6 text-gray-900">Enterprise</h3>
                                <p class="mt-2 flex items-baseline gap-x-1 text-gray-900">
                                    <span class="text-4xl font-bold">59</span>
                                    <span class="text-sm font-semibold">/monat</span>
                                </p>
                                <a href="{{ route('bookings.create') }}" aria-describedby="tier-premium" class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300">Termin vereinbaren</a>
                                <ul role="list" class="mt-10 space-y-4 text-sm leading-6 text-gray-900">
                                    <li>
                                        <ul role="list" class="space-y-4">
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Domain </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> IPv4 & IPv6 Adresse </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Importing and exporting </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span>
                  Team members
                  <span class="text-sm leading-6 text-gray-500">(Up to 50 users)</span>
                </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul role="list" class="space-y-4">
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Leistungsstarke VM </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Basic reports </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Professional reports </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Custom report builder </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul role="list" class="space-y-4">
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> 24/7 digitaler Kundensupport </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Quarterly product workshops </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> Priority phone support </span>
                                            </li>
                                            <li class="flex gap-x-3">
                                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                                </svg>
                                                <span> 1:1 onboarding tour </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </section>

                        </div>

                        <!-- desktop -->
                        <div class="isolate mt-20 hidden lg:block">
                            <div class="relative -mx-8">
                                <div class="absolute inset-x-4 inset-y-0 -z-10 flex">
                                    <div class="flex w-1/4 px-4" style="margin-left: 50%" aria-hidden="true">
                                        <div class="w-full rounded-t-xl border-x border-t border-gray-900/10 bg-gray-400/5"></div>
                                    </div>
                                </div>
                                <table class="w-full table-fixed border-separate border-spacing-x-8 text-left">
                                    <caption class="sr-only">
                                        Servicevergleich
                                    </caption>
                                    <colgroup>
                                        <col class="w-1/4">
                                        <col class="w-1/4">
                                        <col class="w-1/4">
                                        <col class="w-1/4">
                                    </colgroup>



                                    <thead>
                                    <tr>
                                        <td></td>
                                        <th scope="col" class="px-6 pt-6 xl:px-8 xl:pt-8">
                                            <div class="text-sm font-semibold leading-7 text-gray-900">Starter</div>
                                        </th>
                                        <th scope="col" class="px-6 pt-6 xl:px-8 xl:pt-8">
                                            <div class="text-sm font-semibold leading-7 text-gray-900">Premium</div>
                                        </th>
                                        <th scope="col" class="px-6 pt-6 xl:px-8 xl:pt-8">
                                            <div class="text-sm font-semibold leading-7 text-gray-900">Enterprise</div>
                                        </th>
                                    </tr>
                                    </thead>



                                    <tbody>
                                    <tr>
                                        <th scope="row"><span class="sr-only">Preise</span></th>
                                        <td class="px-6 pt-2 xl:px-8">
                                            <div class="flex items-baseline gap-x-1 text-gray-900">
                                                <span class="text-4xl font-bold">Ab 25 EUR</span>
                                                <span class="text-sm font-semibold leading-6">/monat</span>
                                            </div>
                                            <a href="{{ route('bookings.create') }}" class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300">Termin vereinbaren</a>
                                        </td>
                                        <td class="px-6 pt-2 xl:px-8">
                                            <div class="flex items-baseline gap-x-1 text-gray-900">
                                                <span class="text-4xl font-bold">Ab 50 EUR</span>
                                                <span class="text-sm font-semibold leading-6">/monat</span>
                                            </div>
                                            <a href="{{ route('bookings.create') }}" class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 bg-indigo-600 text-white hover:bg-indigo-500">Termin vereinbaren</a>
                                        </td>
                                        <td class="px-6 pt-2 xl:px-8">
                                            <div class="flex items-baseline gap-x-1 text-gray-900">
                                                <span class="text-4xl font-bold">Individuell</span>
                                            </div>
                                            <a href="{{ route('bookings.create') }}" class="mt-8 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300">Termin vereinbaren</a>
                                        </td>
                                    </tr>



                                    <tr class="pt-24 sm:pt-8">
                                        <th scope="colgroup" colspan="4" class="pb-4 text-xl font-semibold leading-6 text-gray-900 pt-8">
                                            Dienstleistung
                                            <div class="absolute inset-x-8 mt-4 h-px bg-gray-900/10"></div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="py-4 text-sm font-normal leading-6 text-gray-900">
                                            Domain
                                            <div class="absolute inset-x-8 mt-4 h-px bg-gray-900/5"></div>
                                        </th>

                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Included in Basic</span>
                                        </td>

                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>

                                        </td>

                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Included in Premium</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="py-4 text-sm font-normal leading-6 text-gray-900">
                                            IPv4 & IPv6 Adresse
                                            <div class="absolute inset-x-8 mt-4 h-px bg-gray-900/5"></div>
                                        </th>
                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Included in Basic</span>
                                        </td>
                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>

                                        </td>
                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Included in Premium</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="py-4 text-sm font-normal leading-6 text-gray-900">
                                            Leistungsstarke VM
                                            <div class="absolute inset-x-8 mt-4 h-px bg-gray-900/5"></div>
                                        </th>
                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Included in Basic</span>
                                        </td>
                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>

                                        </td>
                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Included in Premium</span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <th scope="row" class="py-4 text-sm font-normal leading-6 text-gray-900">
                                            Dedizierter Server
                                            <div class="absolute inset-x-8 mt-4 h-px bg-gray-900/5"></div>
                                        </th>

                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                                            </svg>
                                        </td>


                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                                            </svg>
                                        </td>


                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row" class="py-4 text-sm font-normal leading-6 text-gray-900">
                                            Support per E-Mail, Ticket
                                            <div class="absolute inset-x-8 mt-4 h-px bg-gray-900/5"></div>
                                        </th>
                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Included in Basic</span>
                                        </td>
                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>

                                        </td>
                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Included in Premium</span>
                                        </td>
                                    </tr>


                                    <tr class="pt-24 sm:pt-8">
                                        <th scope="colgroup" colspan="4" class="pb-4 text-xl font-semibold leading-6 text-gray-900 pt-8">
                                            Support
                                            <div class="absolute inset-x-8 mt-4 h-px bg-gray-900/10"></div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="py-4 text-sm font-normal leading-6 text-gray-900">
                                            Priorisierter Support
                                            <div class="absolute inset-x-8 mt-4 h-px bg-gray-900/5"></div>
                                        </th>

                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Nicht in Starter enthalten</span>
                                        </td>

                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>

                                        </td>

                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Included in Premium</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="py-4 text-sm font-normal leading-6 text-gray-900">
                                            Echtzeitsupport
                                            <div class="absolute inset-x-8 mt-4 h-px bg-gray-900/5"></div>
                                        </th>

                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Nicht in Starter enthalten</span>
                                        </td>

                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Nicht in Premium enthalten</span>
                                        </td>

                                        <td class="px-6 py-4 xl:px-8">
                                            <svg class="mx-auto h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Included in Premium</span>
                                        </td>
                                    </tr>


                                    <tr class="pt-24 sm:pt-8">
                                        <th scope="colgroup" colspan="4" class="pb-4 text-xl font-semibold leading-6 text-gray-900 pt-8">
                                            Hardware
                                            <div class="absolute inset-x-8 mt-4 h-px bg-gray-900/10"></div>
                                        </th>
                                    </tr>


                                    <tr>

                                        <th scope="row" class="py-4 text-sm font-normal leading-6 text-gray-900">
                                            CPU
                                            <div class="absolute inset-x-8 mt-4 h-px bg-gray-900/5"></div>
                                        </th>
                                        <td class="px-6 py-4 xl:px-8">
                                            <div class="text-center text-sm leading-6 text-gray-500">Bis zu 4 Kerne</div>
                                        </td>
                                        <td class="px-6 py-4 xl:px-8">
                                            <div class="text-center text-sm leading-6 text-gray-500">bis 32 Kerne</div>
                                        </td>
                                        <td class="px-6 py-4 xl:px-8">
                                            <div class="text-center text-sm leading-6 text-gray-500">Bis zu 128 Kerne</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="py-4 text-sm font-normal leading-6 text-gray-900">
                                            Arbeitsspeicher
                                            <div class="absolute inset-x-8 mt-4 h-px bg-gray-900/5"></div>
                                        </th>
                                        <td class="px-6 py-4 xl:px-8">
                                            <div class="text-center text-sm leading-6 text-gray-500">bis zu 8GB</div>
                                        </td>
                                        <td class="px-6 py-4 xl:px-8">
                                            <div class="text-center text-sm leading-6 text-gray-500">bis zu 128GB</div>
                                        </td>
                                        <td class="px-6 py-4 xl:px-8">
                                            <div class="text-center text-sm leading-6 text-gray-500">Bis zu 2048GB</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="py-4 text-sm font-normal leading-6 text-gray-900">
                                            Internet
                                            <div class="absolute inset-x-8 mt-4 h-px bg-gray-900/5"></div>
                                        </th>
                                        <td class="px-6 py-4 xl:px-8">
                                            <div class="text-center text-sm leading-6 text-gray-500">1GB/s (Fair use)</div>
                                        </td>
                                        <td class="px-6 py-4 xl:px-8">
                                            <div class="text-center text-sm leading-6 text-gray-500">100GB/s (Fair use)</div>
                                        </td>
                                        <td class="px-6 py-4 xl:px-8">
                                            <div class="text-center text-sm leading-6 text-gray-500">1TB/s (Fair use)</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="py-4 text-sm font-normal leading-6 text-gray-900">
                                            Speicher
                                            <div class="absolute inset-x-8 mt-4 h-px bg-gray-900/5"></div>
                                        </th>
                                        <td class="px-6 py-4 xl:px-8">
                                            <div class="text-center text-sm leading-6 text-gray-500">Bis zu 100GB SSD</div>
                                        </td>
                                        <td class="px-6 py-4 xl:px-8">
                                            <div class="text-center text-sm leading-6 text-gray-500">Bis zu 1TB SSD</div>
                                        </td>
                                        <td class="px-6 py-4 xl:px-8">
                                            <div class="text-center text-sm leading-6 text-gray-500">Bis zu 20TB SSD</div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Feature section -->
                <div class="mt-8 sm:mt-12 mb-4 sm:mb-4 py-32 sm:py-12">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl sm:text-center">
                            <h2 class="text-base font-semibold leading-7 text-indigo-600">Alles, was Sie brauchen</h2>
                            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Keinen Server? Kein Problem.</p>
                            <p class="mt-6 text-lg leading-8 text-gray-600">Provisionierung von Servern oder das hosten Ihrer Webanwendung in der Cloud - Ich administriere Sie!</p>
                        </div>
                    </div>
                    <div class="relative overflow-hidden pt-16">
                        <div class="mx-auto max-w-7xl px-6 lg:px-8">
                            <img src="/img/lisa-app-screenshot.png" alt="App screenshot" class="mb-[-12%] rounded-xl shadow-2xl ring-1 ring-gray-900/10" width="2432" height="1442">
                            <div class="relative" aria-hidden="true">
                                <div class="absolute -inset-x-20 bottom-0 bg-gradient-to-t from-white pt-[7%]"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto mt-16 max-w-7xl px-6 sm:mt-20 md:mt-24 lg:px-8 py-8 sm:py-24">
                        <dl class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 text-base leading-7 text-gray-600 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16">
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                                    </svg>
                                    CI/CD
                                </dt>
                                <dd class="inline">Automatisierte Entwicklung, Tests und Bereitstellung für effiziente Softwarebereitstellung.</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                                    </svg>
                                    Domains und SSL Zertifikat
                                </dt>
                                <dd class="inline">Ihre Wunsch-Domain mit professionellem SSL-Zertifikat</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" stroke="currentColor" class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                    </svg>
                                    Einfache Zahlung
                                </dt>
                                <dd class="inline">Täglich Kündbar. Monats,- Jahresrechnung? Lastschrift? Alles kein Problem</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 2.5c-1.31 0-2.526.386-3.546 1.051a.75.75 0 01-.82-1.256A8 8 0 0118 9a22.47 22.47 0 01-1.228 7.351.75.75 0 11-1.417-.49A20.97 20.97 0 0016.5 9 6.5 6.5 0 0010 2.5zM4.333 4.416a.75.75 0 01.218 1.038A6.466 6.466 0 003.5 9a7.966 7.966 0 01-1.293 4.362.75.75 0 01-1.257-.819A6.466 6.466 0 002 9c0-1.61.476-3.11 1.295-4.365a.75.75 0 011.038-.219zM10 6.12a3 3 0 00-3.001 3.041 11.455 11.455 0 01-2.697 7.24.75.75 0 01-1.148-.965A9.957 9.957 0 005.5 9c0-.028.002-.055.004-.082a4.5 4.5 0 018.996.084V9.15l-.005.297a.75.75 0 11-1.5-.034c.003-.11.004-.219.005-.328a3 3 0 00-3-2.965zm0 2.13a.75.75 0 01.75.75c0 3.51-1.187 6.745-3.181 9.323a.75.75 0 11-1.186-.918A13.687 13.687 0 009.25 9a.75.75 0 01.75-.75zm3.529 3.698a.75.75 0 01.584.885 18.883 18.883 0 01-2.257 5.84.75.75 0 11-1.29-.764 17.386 17.386 0 002.078-5.377.75.75 0 01.885-.584z" clip-rule="evenodd" />
                                    </svg>
                                    Fortschrittlichste Sicherheit
                                </dt>
                                <dd class="inline">Volle Transparenz über Ihre Daten, gesichert in High-End Datacentern in Deutschland</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                                    </svg>
                                    24/7 Support
                                </dt>
                                <dd class="inline">Erreichen Sie mich jederzeit per E-Mail oder Ticket oder benutzen Sie die Notfall-Hotline</dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                                        <path fill-rule="evenodd" d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z" clip-rule="evenodd" />
                                    </svg>
                                    Tägliche Backups
                                </dt>
                                <dd class="inline">Damit geht auch garantiert nichts verloren</dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <!-- Header for testimonials-->
                <div class="bg-white px-6 lg:px-8 pt-8 sm:pt-24 py-8 sm:py-4">
                    <div class="mx-auto max-w-2xl text-center">
                        <p class="text-base font-semibold leading-7 text-indigo-600">Was meine Kunden sagen...</p>
                        <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 text-center sm:text-6xl">Kundenrezensionen</h2>
                    </div>
                </div>

                <!-- Testimonials -->

                <div class="bg-white isolate overflow-hidden px-6 lg:px-8">
                    <div class="relative mx-auto max-w-2xl lg:max-w-4xl py-12 sm:py-16">
                        <h2 class="sr-only">Customer Reviews</h2>

                        <div class="-my-10">
                            <div class="flex space-x-4 text-sm text-gray-500">
                                <div class="flex-none py-10">
                                    <img src="{{ asset('img/sam-oakwood.png') }}" alt="" class="h-10 w-10 rounded-full bg-gray-100">
                                </div>
                                <div class="flex-1 py-10">
                                    <h3 class="font-medium text-gray-900">Samuel Benedikt Alexander Eichelmann</h3>
                                    <p><time datetime="2021-07-16">Juli, 2023</time></p>

                                    <div class="mt-4 flex items-center">
                                        <!-- Active: "text-yellow-400", Default: "text-gray-300" -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="sr-only">5 von 5 Sternen</p>

                                    <div class="prose prose-sm mt-4 max-w-none text-gray-500">
                                        <p>Ich hatte das Privileg, mit Jan Bredow an meinem Website-Projekt zusammenzuarbeiten, und ich bin wirklich beeindruckt. Jans Hingabe und Fachwissen kommen während des gesamten Prozesses zum Vorschein. Seine sorgfältige Aufmerksamkeit für Details und seine Fähigkeit, meine Bedürfnisse zu erfassen, führten zu einer funktionalen und optisch ansprechenden Website. Die benutzerfreundliche Oberfläche und das responsive Design betonen seine technischen Fähigkeiten. Jans Engagement, sich über Branchentrends auf dem Laufenden zu halten, gewährleistet eine moderne und sichere Website. Ich empfehle Herrn Bredow wärmstens für jedes Website-Projekt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-4 text-sm text-gray-500">
                                <div class="flex-none py-10">
                                    <img src="{{ asset('img/ak.jpg') }}" alt="" class="h-10 w-10 rounded-full bg-gray-100">
                                </div>
                                <div class="flex-1 py-10 border-t border-gray-200">
                                    <h3 class="font-medium text-gray-900">Ann-Kathrin Viktoria Vorwerg</h3>
                                    <p><time datetime="2021-07-12">August, 2023</time></p>

                                    <div class="mt-4 flex items-center">
                                        <!-- Active: "text-yellow-400", Default: "text-gray-300" -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="sr-only">5 von 5 Sternen</p>

                                    <div class="prose prose-sm mt-4 max-w-none text-gray-500">
                                        <p>Fantastisch! Hat mein Notebook gerettet, alle hatten die Hoffnung aufgegeben, Jan nicht. Er hat es geschafft, läuft für kleines Geld wie mein großer Computer. Nur zu Empfehlen!</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- FAQ section  WIP, temporary placeholder-->
                <div class="bg-white">
                    <div class="mx-auto max-w-7xl px-6 py-24 sm:pt-32 lg:px-8 lg:py-40">
                        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                            <div class="lg:col-span-5">
                                <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Häufig gestellte Fragen</h2>
                                <p class="mt-4 text-base leading-7 text-gray-600">Sollte ich Ihre Fragen hier nicht beantworten können, zögern Sie nicht, unser <a href="{{ route('contact') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Supportteam</a> zu kontaktieren.</p>
                            </div>
                            <div class="mt-10 lg:col-span-7 lg:mt-0">
                                <dl class="space-y-10">

                                    <div>
                                        <dt class="text-base font-semibold leading-7 text-gray-900">Welche Arten von Hosting-Diensten bieten Sie an?</dt>
                                        <dd class="mt-2 text-base leading-7 text-gray-600">Wir bieten Shared Hosting, VPS (Virtual Private Server) Hosting, Dedicated Server Hosting und Cloud Hosting an.</dd>
                                    </div>

                                    <div>
                                        <dt class="text-base font-semibold leading-7 text-gray-900">Was ist Managed Hosting und welche Vorteile bietet es?</dt>
                                        <dd class="mt-2 text-base leading-7 text-gray-600">Managed Hosting bedeutet, dass wir uns um die technische Wartung, Sicherheit und Updates Ihrer Website oder Anwendung kümmern. Dadurch können Sie sich auf Ihr Unternehmen konzentrieren, während wir den technischen Teil übernehmen.</dd>
                                    </div>

                                    <div>
                                        <dt class="text-base font-semibold leading-7 text-gray-900">Unterstützen Sie die Suchmaschinenoptimierung (SEO) für gehostete Websites?</dt>
                                        <dd class="mt-2 text-base leading-7 text-gray-600">Ja, wir bieten Tools und Ressourcen an, die Ihnen bei der Verbesserung Ihrer SEO-Bemühungen helfen können, wie z. B. schnelle Ladezeiten und SSL-Zertifikate.</dd>
                                    </div>

                                    <div>
                                        <dt class="text-base font-semibold leading-7 text-gray-900">Welche Programmiersprachen und Entwicklungsframeworks werden von Ihrem Hosting unterstützt?</dt>
                                        <dd class="mt-2 text-base leading-7 text-gray-600">Wir unterstützen eine Vielzahl von Programmiersprachen und Frameworks, darunter PHP, Python, Java und mehr. Bitte kontaktieren Sie mich für spezifische Anforderungen.</dd>
                                    </div>

                                    <div>
                                        <dt class="text-base font-semibold leading-7 text-gray-900">Bieten Sie SSL-Zertifikate für die Sicherheit meiner Website an?</dt>
                                        <dd class="mt-2 text-base leading-7 text-gray-600">Ja, wir bieten kostenlose und kostenpflichtige SSL-Zertifikate an, um die Sicherheit Ihrer Website zu gewährleisten.</dd>
                                    </div>

                                    <div>
                                        <dt class="text-base font-semibold leading-7 text-gray-900">Kann ich meine Website von einem anderen Hosting-Anbieter zu Ihnen umziehen?</dt>
                                        <dd class="mt-2 text-base leading-7 text-gray-600">Ja, wir bieten einen Umzugsservice an, um Ihre Website nahtlos von einem anderen Anbieter zu uns zu transferieren.</dd>
                                    </div>

                                    <div>
                                        <dt class="text-base font-semibold leading-7 text-gray-900">Kann ich meine E-Mails über Ihre Hosting-Services verwalten?</dt>
                                        <dd class="mt-2 text-base leading-7 text-gray-600">Ja, unsere Hosting-Services umfassen auch E-Mail-Hosting mit verschiedenen Optionen für E-Mail-Konten und Weiterleitungen.</dd>
                                    </div>

                                    <div>
                                        <dt class="text-base font-semibold leading-7 text-gray-900">Bieten Sie Backup-Lösungen für meine gehostete Website an?</dt>
                                        <dd class="mt-2 text-base leading-7 text-gray-600">Ja, wir bieten tägliche Backup-Lösungen an, um sicherzustellen, dass Ihre Daten geschützt sind und im Falle eines Problems wiederhergestellt werden können.</dd>
                                    </div>

                                    <div>
                                        <dt class="text-base font-semibold leading-7 text-gray-900">Welche Sicherheitsmaßnahmen haben Sie implementiert, um meine Website zu schützen?</dt>
                                        <dd class="mt-2 text-base leading-7 text-gray-600">Wir verwenden Firewall-Schutz, DDoS-Abwehr, regelmäßige Sicherheitsupdates und Überwachung, um die Sicherheit Ihrer gehosteten Website zu gewährleisten.</dd>
                                    </div>

                                </dl>
                            </div>
                        </div>
                    </div>
                </div>


            </main>

        </div>
    </div>

    @livewire('footer')

</x-guest-layout>
