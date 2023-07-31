<!doctype html>
<html>

<head>
    <style>
        * {
            scroll-behavior: smooth;
        }
    </style>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
<div class="lg:border-t lg:border-b lg:border-gray-200">
    <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" aria-label="Progress">
        <ol role="list"
            class="rounded-md overflow-hidden lg:flex lg:border-l lg:border-r lg:border-gray-200 lg:rounded-none">
            <li class="relative overflow-hidden lg:flex-1">
                <div class="border border-gray-200 overflow-hidden lg:border-0">
                    <a href="#" aria-current="step">
                        <span
                            class="absolute top-0 left-0 w-1 h-full bg-indigo-600 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto"
                            aria-hidden="true"></span>
                        <span class="px-6 py-5 flex items-start text-sm font-medium lg:pl-9">
                     <span class="flex-shrink-0">
                     <span class="w-10 h-10 flex items-center justify-center border-2 border-indigo-600 rounded-full">
                     <span class="text-indigo-600">01</span>
                     </span>
                     </span>
                     <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                     <span class="text-xs font-semibold text-indigo-600 tracking-wide uppercase">Buchungsdetails</span>
                     <span class="text-sm font-medium text-gray-500">Wir benötigen Ihre Buchungspräferenzen.</span>
                     </span>
                     </span>
                    </a>
                </div>
            </li>
            <li class="relative overflow-hidden lg:flex-1">
                <div class="border border-gray-200 overflow-hidden border-t-0 rounded-b-md lg:border-0">
                    <a href="#" class="group">
                        <span
                            class="absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-gray-200 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto"
                            aria-hidden="true"></span>
                        <span class="px-6 py-5 flex items-start text-sm font-medium lg:pl-9">
                     <span class="flex-shrink-0">
                     <span class="w-10 h-10 flex items-center justify-center border-2 border-gray-300 rounded-full">
                     <span class="text-gray-500">02</span>
                     </span>
                     </span>
                     <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                     <span class="text-xs font-semibold text-gray-500 tracking-wide uppercase">Bezahlen</span>
                     <span class="text-sm font-medium text-gray-500">Schnell und einfach, digital.</span>
                     </span>
                     </span>
                    </a>
                    <div class="hidden absolute top-0 left-0 w-3 inset-0 lg:block" aria-hidden="true">
                        <svg class="h-full w-full text-gray-300" viewBox="0 0 12 82" fill="none"
                             preserveAspectRatio="none">
                            <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor"
                                  vector-effect="non-scaling-stroke"/>
                        </svg>
                    </div>
                </div>
            </li>
            <li class="relative overflow-hidden lg:flex-1">
                <div class="border border-gray-200 overflow-hidden border-t-0 rounded-b-md lg:border-0">
                    <a href="#" class="group">
                        <span
                            class="absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-gray-200 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto"
                            aria-hidden="true"></span>
                        <span class="px-6 py-5 flex items-start text-sm font-medium lg:pl-9">
                     <span class="flex-shrink-0">
                     <span class="w-10 h-10 flex items-center justify-center border-2 border-gray-300 rounded-full">
                     <span class="text-gray-500">03</span>
                     </span>
                     </span>
                     <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                     <span class="text-xs font-semibold text-gray-500 tracking-wide uppercase">Bestätigung</span>
                     <span class="text-sm font-medium text-gray-500">Alle wichtigen Buchungsdetails.</span>
                     </span>
                     </span>
                    </a>
                    <div class="hidden absolute top-0 left-0 w-3 inset-0 lg:block" aria-hidden="true">
                        <svg class="h-full w-full text-gray-300" viewBox="0 0 12 82" fill="none"
                             preserveAspectRatio="none">
                            <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor"
                                  vector-effect="non-scaling-stroke"/>
                        </svg>
                    </div>
                </div>
            </li>
        </ol>
    </nav>
</div>
<form class="p-10 py-12">
    <div class="space-y-6">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Service</h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Wählen Sie zwischen unseren Services.
                    </p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form class="space-y-6" action="#" method="POST">
                        <fieldset>
                            <section class="relative" aria-labelledby="pricing-heading">
                                <div
                                    class="max-w-2xl mx-auto px-4 space-y-12 sm:px-6 lg:max-w-7xl lg:space-y-0 lg:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
                                    <label
                                        class="relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm cursor-pointer flex flex-col">
                                        <div class="flex-1">
                                            <h3 class="text-xl font-semibold text-gray-900">Schnelltest</h3>
                                            <p class="mt-4 flex items-baseline text-gray-900">
                                                <span class="text-5xl font-extrabold tracking-tight">0€</span>
                                            </p>
                                            <p class="mt-6 text-gray-500">Appropriately aggregate customer directed
                                                niche markets rather than alternative "outside the box" thinking.
                                                Appropriately deliver robust models vis-a-vis an expanded.</p>
                                        </div>
                                        <div class="flex justify-center mt-6">
                                            <input id="service_type" name="service_type" value="Schnelltest" checked
                                                   type="radio"
                                                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                        </div>
                                    </label>
                                    <label
                                        class="relative p-8 bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col cursor-pointer">
                                        <div class="flex-1">
                                            <h3 class="text-xl font-semibold text-gray-900" id="service-1-label">
                                                Labortest</h3>
                                            <p class="mt-4 flex items-baseline text-gray-900">
                                                <span class="text-5xl font-extrabold tracking-tight">69,88€</span>
                                            </p>
                                            <p class="mt-6 text-gray-500" id="service-1-description">Appropriately
                                                aggregate customer directed niche markets rather than alternative
                                                "outside the box" thinking. Appropriately deliver robust models
                                                vis-a-vis an expanded.</p>
                                        </div>
                                        <div class="flex justify-center mt-6">
                                            <input id="service_type" name="service_type" value="Labortest" type="radio"
                                                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                   aria-labelledby="service-1-label"
                                                   aria-describedby="service-1-description">
                                        </div>
                                    </label>
                                </div>
                            </section>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Wir sollten uns treffen</h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Aber: Bro-Fist only!
                    </p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                        <fieldset>
                            <div class="bg-white rounded-t-md -space-y-px">
                                <label class="rounded-t-md relative border p-4 flex cursor-pointer focus:outline-none">
                                    <input type="radio" name="location" value="standort1"
                                           class="h-4 w-4 mt-0.5 cursor-pointer text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                           aria-labelledby="privacy-setting-0-label"
                                           aria-describedby="privacy-setting-0-description">
                                    <div class="ml-3 flex flex-col">
                           <span id="privacy-setting-0-label" class="block text-sm font-medium">
                           Standort 1
                           </span>
                                        <span id="privacy-setting-0-description" class="block text-sm">
                           Musterstraße 1, 12345 Musterstadt
                           </span>
                                    </div>
                                </label>
                                <div class="bg-white -space-y-px">
                                    <label class="relative border p-4 flex cursor-pointer focus:outline-none">
                                        <input type="radio" name="location" value="standort2"
                                               class="h-4 w-4 mt-0.5 cursor-pointer text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                               aria-labelledby="privacy-setting-0-label"
                                               aria-describedby="privacy-setting-0-description">
                                        <div class="ml-3 flex flex-col">
                              <span id="privacy-setting-0-label" class="block text-sm font-medium">
                              Standort 2
                              </span>
                                            <span id="privacy-setting-0-description" class="block text-sm">
                              Musterstraße 1, 12345 Musterstadt
                              </span>
                                        </div>
                                    </label>
                                    <div class="bg-white rounded-b-md -space-y-px">
                                        <label
                                            class="rounded-b-md relative border p-4 flex cursor-pointer focus:outline-none">
                                            <input type="radio" name="location" value="standort3"
                                                   class="h-4 w-4 mt-0.5 cursor-pointer text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                                   aria-labelledby="privacy-setting-0-label"
                                                   aria-describedby="privacy-setting-0-description">
                                            <div class="ml-3 flex flex-col">
                                 <span id="privacy-setting-0-label" class="block text-sm font-medium">
                                 Standort 3
                                 </span>
                                                <span id="privacy-setting-0-description" class="block text-sm">
                                 Musterstraße 1, 12345 Musterstadt
                                 </span>
                                            </div>
                                        </label>
                                    </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Zeitpunkt</h3>
                    <p class="mt-1 text-sm text-gray-500">
                        "Da muss ich erstmal im Kalender nachsehen..."
                    </p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form class="space-y-6" action="#" method="POST">
                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700">Datum</label>
                            <input type="date" name="date" id="date"
                                   class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <fieldset>
                            <legend class="sr-only">
                                Pricing plans
                            </legend>
                            <div class="relative bg-white rounded-md -space-y-px">
                                <label
                                    class="relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-2 focus:outline-none">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Business"
                                               class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                               aria-labelledby="pricing-plans-1-label"
                                               aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1">
                                        <span id="pricing-plans-1-label" class="ml-3 font-medium">16:30</span>
                                    </div>
                                    <p id="pricing-plans-1-description-1"
                                       class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">(2 offene Termine)</p>
                                </label>

                                <label
                                    class="relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-2 focus:outline-none">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Business"
                                               class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                               aria-labelledby="pricing-plans-1-label"
                                               aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1">
                                        <span id="pricing-plans-1-label" class="ml-3 font-medium">16:45</span>
                                    </div>
                                    <p id="pricing-plans-1-description-1"
                                       class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">(1 offener Termin)</p>
                                </label>
                            </div>
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Persönliche Informationen</h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Wir benötigen noch ein paar Informationen über Sie
                    </p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form class="md:grid md:grid-cols-2 md:gap-4" action="#" method="POST">
                        <div>
                            <label for="gender" class="block text-sm font-medium text-gray-700">Geschlecht</label>
                            <select id="gender" name="gender"
                                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option selected>Bitte wählen sie Ihr Geschlecht...</option>
                                <option value="">Männlich</option>
                                <option value="">Weiblich</option>
                                <option value="">Divers</option>
                            </select>
                        </div>
                        <div class="mt-1">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1">
                                <input type="email" name="email" id="email"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                       placeholder="you@example.com">
                            </div>
                        </div>

                        <div class="mt-1">
                            <label for="phone-number"
                                   class="block text-sm font-medium text-gray-700">Telefonnummer</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center">
                                    <select id="phone-code" name="phone-code" autocomplete="phone-code"
                                            class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-3 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                        <option>+49</option>
                                    </select>
                                </div>
                                <input type="text" name="phone-number" id="phone-number"
                                       class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-16 sm:text-sm border-gray-300 rounded-md"
                                       placeholder="0123 456789">
                            </div>
                        </div>
                        <div class="mt-1">
                            <label for="birthday" class="block text-sm font-medium text-gray-700">Geburtstag</label>
                            <div class="mt-1">
                                <input type="date" name="birthday" id="birthday"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>

                        <div class="mt-1">
                            <label for="name" class="block text-sm font-medium text-gray-700">Vorname</label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                       placeholder="Max">
                            </div>
                        </div>
                        <div class="mt-1">
                            <label for="surename" class="block text-sm font-medium text-gray-700">Nachname</label>
                            <div class="mt-1">
                                <input type="text" name="surename" id="surename"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                       placeholder="Mustermann">
                            </div>
                        </div>

                        <div class="mt-1">
                            <label for="plz" class="block text-sm font-medium text-gray-700">Postleitzahl</label>
                            <div class="mt-1">
                                <input type="number" name="plz" id="plz"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                       placeholder="Max">
                            </div>
                        </div>
                        <div class="mt-1">
                            <label for="city" class="block text-sm font-medium text-gray-700">Stadt</label>
                            <div class="mt-1">
                                <input type="text" name="city" id="city"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                       placeholder="Mustermann">
                            </div>
                        </div>

                        <div class="mt-1">
                            <label for="street" class="block text-sm font-medium text-gray-700">Straße</label>
                            <div class="mt-1">
                                <input type="text" name="street" id="street"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                       placeholder="Musterstraße">
                            </div>
                        </div>
                        <div class="mt-1">
                            <label for="housenr" class="block text-sm font-medium text-gray-700">Hausnummer</label>
                            <div class="mt-1">
                                <input type="number" name="housenr" id="housenr"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                       placeholder="1">
                            </div>
                        </div>

                        <div class="mt-1 col-span-2">
                            <label for="persouuid"
                                   class="block text-sm font-medium text-gray-700">Personalausweisnummer</label>
                            <div class="mt-1">
                                <input type="number" name="persouuid" id="persouuid"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                       placeholder="123456789">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <button type="button"
                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Abbrechen
            </button>
            <button type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Weiter
            </button>
        </div>
    </div>
</form>


</body>
<script src="/js/app.js"></script>

</html>
