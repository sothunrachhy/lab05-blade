<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <title>
        All Contacts | Contact App
    </title>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer:wght@100..900&amp;display=swap" rel="stylesheet"/>
    <!-- Style -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white font-sans text-base leading-normal text-gray-900 antialiased">
    <!-- navbar -->
    <nav class="border-b border-gray-200 bg-gray-50">
        <div class="mx-auto w-full max-w-6xl px-4 sm:px-6 flex flex-wrap items-center gap-x-6 py-3">
            <a class="shrink-0 text-xl text-gray-900 uppercase" href="{{ route('contacts.index') }}">
                <strong>
                    <svg aria-hidden="true" class="inline-block size-4 shrink-0 align-middle" fill="currentColor" focusable="false" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z">
                        </path>
                    </svg>
                    Contact
                </strong>
                App
            </a>
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="ml-auto inline-flex items-center rounded-md border border-gray-300 p-2 text-gray-700 lg:hidden" data-nav-toggle="" type="button">
                <svg aria-hidden="true" class="size-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <div class="hidden w-full flex-col gap-4 pt-4 lg:flex lg:w-auto lg:flex-1 lg:flex-row lg:items-center lg:pt-0" id="navbarSupportedContent">
                <ul class="flex flex-col gap-2 lg:flex-row lg:items-center lg:mr-auto mb-2 lg:mb-0">
                    <li class="">
                        <a class="inline-flex items-center gap-1 rounded-md px-3 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-950" href="#">
                            Company
                        </a>
                    </li>
                    <li class="">
                        <a aria-current="page" class="inline-flex items-center gap-1 rounded-md px-3 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-950 font-semibold text-gray-950" href="#">
                            Contact
                        </a>
                    </li>
                </ul>
                <div class="flex">
                    <ul class="flex flex-col gap-2 lg:flex-row lg:items-center lg:ml-auto">
                        <li class="">
                            <a class="inline-flex items-center justify-center gap-1 rounded-md border px-3 py-2 text-sm font-medium transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white" href="#">
                                <svg aria-hidden="true" class="inline-block size-4 shrink-0 align-middle" fill="currentColor" focusable="false" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" fill-rule="evenodd">
                                    </path>
                                    <path d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" fill-rule="evenodd">
                                    </path>
                                </svg>
                                Login
                            </a>
                        </li>
                        <li class="">
                            <a class="inline-flex items-center justify-center gap-1 rounded-md border px-3 py-2 text-sm font-medium transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white" href="#">
                                <svg aria-hidden="true" class="inline-block size-4 shrink-0 align-middle" fill="currentColor" focusable="false" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6">
                                    </path>
                                    <path d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" fill-rule="evenodd">
                                    </path>
                                </svg>
                                Register
                            </a>
                        </li>
                        <li class="relative">
                            <button aria-controls="account-menu" aria-expanded="false" class="inline-flex items-center gap-1 rounded-md px-3 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-950" data-dropdown-toggle="" role="button" type="button">
                                John Doe
                                <svg aria-hidden="true" class="size-3" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="m4 6 4 4 4-4z">
                                    </path>
                                </svg>
                            </button>
                            <ul class="absolute left-0 z-20 lg:left-auto lg:right-0 mt-2 w-44 rounded-md border border-gray-200 bg-white p-1 shadow-lg" hidden="" id="account-menu">
                                <li>
                                    <a class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100" href="profile.html">
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a class="block rounded px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100" href="#">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- content -->
    @yield('content')
</body>
</html>
