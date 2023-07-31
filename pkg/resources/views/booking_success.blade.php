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
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
</head>
<body class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
<div class="lg:border-t lg:border-b lg:border-gray-200">
    <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" aria-label="Progress">
        <ol role="list" class="rounded-md overflow-hidden lg:flex lg:border-l lg:border-r lg:border-gray-200 lg:rounded-none">
            <li class="relative overflow-hidden lg:flex-1">
                <div class="border border-gray-200 overflow-hidden border-b-0 rounded-t-md lg:border-0">
                    <a href="#" class="group">
                        <span class="absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-gray-200 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto" aria-hidden="true"></span>
                        <span class="px-6 py-5 flex items-start text-sm font-medium">
                  <span class="flex-shrink-0">
                    <span class="w-10 h-10 flex items-center justify-center bg-indigo-600 rounded-full">
                      <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </span>
                  <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                  <span class="text-xs font-semibold tracking-wide uppercase">Buchungsdetails</span>
                  <span class="text-sm font-medium text-gray-500">Wir benötigen Ihre Buchungspräferenzen.</span>
                  </span>
                </span>
                    </a>
                </div>
            </li>
            <li class="relative overflow-hidden lg:flex-1">
                <div class="border border-gray-200 overflow-hidden border-b-0 rounded-t-md lg:border-0">
                    <a href="#" class="group">
                        <span class="absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-gray-200 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto" aria-hidden="true"></span>
                        <span class="px-6 py-5 flex items-start text-sm font-medium">
                  <span class="flex-shrink-0">
                    <span class="w-10 h-10 flex items-center justify-center bg-indigo-600 rounded-full">
                      <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </span>
                  <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                  <span class="text-xs font-semibold tracking-wide uppercase">Bezahlen</span>
                  <span class="text-sm font-medium text-gray-500">Schnell und einfach, digital.</span>
                  </span>
                </span>
                    </a>
                    <div class="hidden absolute top-0 left-0 w-3 inset-0 lg:block" aria-hidden="true">
                        <svg class="h-full w-full text-gray-300" viewBox="0 0 12 82" fill="none" preserveAspectRatio="none">
                            <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor" vector-effect="non-scaling-stroke" />
                        </svg>
                    </div>
                </div>
            </li>
            <li class="relative overflow-hidden lg:flex-1">
                <div class="border border-gray-200 overflow-hidden lg:border-0">
                    <a href="#" aria-current="step">
                        <span class="absolute top-0 left-0 w-1 h-full bg-indigo-600 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto" aria-hidden="true"></span>
                        <span class="px-6 py-5 flex items-start text-sm font-medium lg:pl-9">
              <span class="flex-shrink-0">
              <span class="w-10 h-10 flex items-center justify-center border-2 border-indigo-600 rounded-full">
              <span class="text-indigo-600">03</span>
              </span>
              </span>
              <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
              <span class="text-xs font-semibold text-indigo-600 tracking-wide uppercase">Bestätigung</span>
              <span class="text-sm font-medium text-gray-500">Alle wichtigen Buchungsdetails.</span>
              </span>
              </span>
                    </a>
                    <div class="hidden absolute top-0 left-0 w-3 inset-0 lg:block" aria-hidden="true">
                        <svg class="h-full w-full text-gray-300" viewBox="0 0 12 82" fill="none" preserveAspectRatio="none">
                            <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor" vector-effect="non-scaling-stroke" />
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
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Details</h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Ihre Buchung ist bei uns eingegangen
                    </p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                        <div class="md:grid md:grid-cols-3">
                            <div>
                                <img class="w-full p-4" src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=Ichhabdeinonkelgeficktundzwarganztiefundanal">
                                <p class="text-gray-600">Diesen QR-Code braucht unser Team vor Ort, um Sie zu identifizieren.</p>
                            </div>
                            <div class="mt-5 md:col-span-2">
                                <dl class="sm:divide-y sm:divide-gray-200">
                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                        <dt class="text-sm font-medium text-gray-500">Standort</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">Musterstraße 1, 12345 Musterstadt</dd>
                                    </div>
                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                        <dt class="text-sm font-medium text-gray-500">Datum und Uhrzeit</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">23.01.2022 um 16:30</dd>
                                    </div>
                                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                        <dt class="text-sm font-medium text-gray-500">Bezahlungsmethode</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">Bar <span class="text-gray-400">(13,37€)</span></dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                QR-Code Herunterladen
            </button>
        </div>
    </div>
</form>
</body>
<script src="/js/app.js"></script>
</html>
