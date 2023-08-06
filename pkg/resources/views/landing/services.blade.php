<x-guest-layout>
    @livewire('header')

    <div class="mt-28">
        <main>
            <!-- Pricing section -->
            <div class="
                bg-white relative isolate
                mt-6 pb-14
                lg:px-8 sm:mb-2">
                <div class="absolute inset-x-0 -top-3 -z-10 transform-gpu overflow-hidden px-36 blur-3xl" aria-hidden="true">
                    <div class="mx-auto aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
                <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                    <h2 class="text-base font-semibold leading-7 text-indigo-600">Preise</h2>
                    <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Der richtige Preis für Sie</p>
                </div>
                <p class="mx-auto mt-3 max-w-2xl text-center text-lg leading-8 text-gray-600">Wählen Sie zwischen 2 Paketen, oder kontaktieren Sie mich für ein individuelles Angebot</p>
                <div class="mx-auto mt-16 grid max-w-lg grid-cols-1 items-center gap-y-6 sm:mt-20 sm:gap-y-0 lg:max-w-4xl lg:grid-cols-2">
                    <div class="rounded-3xl p-8 ring-1 ring-gray-900/10 sm:p-10 bg-white/60 sm:mx-8 lg:mx-0 rounded-t-3xl sm:rounded-b-none lg:rounded-tr-none lg:rounded-bl-3xl">
                        <h3 id="tier-hobby" class="text-base font-semibold leading-7 text-indigo-600">Startpaket</h3>
                        <p class="mt-4 flex items-baseline gap-x-2">
                            <span class="text-5xl font-bold tracking-tight text-gray-900">ab 55€</span>
                            <span class="text-base text-gray-500">/monat</span>
                        </p>
                        <p class="mt-6 text-base leading-7 text-gray-600">Wir orchestrieren Ihre digitale Infrastruktur, während Sie sich aufs Geschäft konzentrieren</p>
                        <ul role="list" class="mt-8 space-y-3 text-sm leading-6 sm:mt-10 text-gray-600">
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Domain, VM & IPv4,- IPv6
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                24/7 Kundensupport
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                99,9% garantierte uptime
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Schutz vor DDoS und sonstigen Attacken
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Geteilter Server mit isolierten Diensten
                            </li>
                        </ul>
                        <a href="{{route('bookings.create')}}" aria-describedby="tier-hobby" class="mt-8 block rounded-md py-2.5 px-3.5 text-center text-sm font-semibold focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 sm:mt-10 text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300 focus-visible:outline-indigo-600">Erstgespräch vereinbaren</a>
                    </div>
                    <div class="rounded-3xl p-8 ring-1 ring-gray-900/10 sm:p-10 relative bg-gray-900 shadow-2xl">
                        <h3 id="tier-enterprise" class="text-base font-semibold leading-7 text-indigo-400">Managed-Hosting</h3>
                        <p class="mt-4 flex items-baseline gap-x-2">
                            <span class="text-5xl font-bold tracking-tight text-white">Ab 299€</span>
                            <span class="text-base text-gray-400">/monat</span>
                        </p>
                        <p class="mt-6 text-base leading-7 text-gray-300">Eine wirklich Leistungsstarke und skalierbare Plattform für Ihr Unternehmen, egal was Sie machen</p>
                        <ul role="list" class="mt-8 space-y-3 text-sm leading-6 sm:mt-10 text-gray-300">
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                AMD EPYC / Intel Plattform
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Bis zu 2TB RAM
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Ungebrenzte Netzwerknutzung
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Live Monitoring
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                </svg>
                                Priorisierter Support
                            </li>
                        </ul>
                        <a href="{{route('bookings.create')}}" aria-describedby="tier-enterprise" class="mt-8 block rounded-md py-2.5 px-3.5 text-center text-sm font-semibold focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 sm:mt-10 bg-indigo-500 text-white shadow-sm hover:bg-indigo-400 focus-visible:outline-indigo-500">Erstgespräch vereinbaren</a>
                    </div>
                </div>
            </div>

            <!-- Testimonial section -->
            <div class="
                bg-gray-900 mx-auto max-w-7xl
                px-2 lg:px-8
                pt-8 pb-4
                ">

                <div class="mx-auto grid max-w-2xl grid-cols-1 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="flex flex-col pb-10 sm:pb-16 lg:pb-0 lg:pr-8 xl:pr-20">
                        <img class="h-12 self-start" src="https://tailwindui.com/img/logos/tuple-logo-white.svg" alt="">
                        <figure class="mt-10 flex flex-auto flex-col justify-between">
                            <blockquote class="text-lg leading-8 text-white">
                                <p>"Herr Bredow is ein äußerst kompetenter und freundlicher Entwickler und Systemadministrator. Meine Webservice-Einrichtung (Mail und Cloudsysteme) habe ich von ihm einrichten lassen. Mit dem Resultat bin ich sehr zufrieden."</p>
                            </blockquote>
                            <figcaption class="mt-10 flex items-center gap-x-6">
                                <img class="h-14 w-14 rounded-full bg-gray-800" src="/img/sam-oakwood.png" alt="">
                                <div class="text-base">
                                    <div class="font-semibold text-white">Samuel Benedikt Alexander Eichelmann</div>
                                    <div class="mt-1 text-gray-400">CEO von sam-oakwood.com</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="flex flex-col border-t border-white/10 pt-10 sm:pt-16 lg:border-l lg:border-t-0 lg:pl-8 lg:pt-0 xl:pl-20">
                        <img class="h-12 self-start" src="https://tailwindui.com/img/logos/reform-logo-white.svg" alt="">
                        <figure class="mt-10 flex flex-auto flex-col justify-between">
                            <blockquote class="text-lg leading-8 text-white">
                                <p>“Hat es geschafft alle meine Daten von einem Todgeglaubten Notebook zu retten. Alles in ruhe und verständlich erklärt, Der Wahnsinn! Vielen Dank!”</p>
                            </blockquote>
                            <figcaption class="mt-10 flex items-center gap-x-6">
                                <img class="h-14 w-14 rounded-full bg-gray-800" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div class="text-base">
                                    <div class="font-semibold text-white">Jamal Younis Meski</div>
                                    <div class="mt-1 text-gray-400">aus Wetzlar</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </div>

            <!-- FAQ section -->
            <div class="
                bg-gray-900 max-w-7xl mx-auto
                pt-8
                px-6
                lg:px-8">
                <h2 class="text-2xl font-bold leading-10 tracking-tight text-white">Häufig gestellte Fragen</h2>
                <p class="mt-6 max-w-2xl text-base leading-7 text-gray-300">Haben Sie ein besonderes Anliegen? <a href="mailto://support@bredow.systems" class="font-semibold text-indigo-400 hover:text-indigo-300">Kontaktieren Sie unser Support-Team</a></p>
                <div class="mt-8">
                    <dl class="sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-16 sm:space-y-0 lg:grid-cols-3 lg:gap-x-10">
                        <div>
                            <dt class="text-base font-semibold leading-7 text-white">Wie geht es weiter?</dt>
                            <dd class="mt-2 text-base leading-7 text-gray-300">Sobald wir Ihren Auftrag erhalten haben, erhalten Sie einen Termin für das Erstgespräch, in welchem wir gemeinsam Ihre Probleme beleuchten und dann entwerden wir eine Strategie</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold leading-7 text-white">Ich habe kein passendes Angebot auf Ihrer Webseite entdeckt</dt>
                            <dd class="mt-2 text-base leading-7 text-gray-300">Buchen Sie das Erstgespräch und wir finden garantiert eine Maßgeschneiderte Lösung für Ihr Problem</dd>
                        </div>
                        <div>
                            <dt class="text-base font-semibold leading-7 text-white">Ist die Erstberatung kostenlos?</dt>
                            <dd class="mt-2 text-base leading-7 text-gray-300">Ja. Das Erstgespräch ist komplett kostenfrei.</dd>
                        </div>

                        <!-- More questions... -->

                    </dl>
                </div>
            </div>
        </main>
    </div>

    @livewire('footer')
</x-guest-layout>
