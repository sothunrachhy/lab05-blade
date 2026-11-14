@extends('layouts.main')
@section('content')
<main class="py-10">
    <div class="mx-auto w-full max-w-6xl px-4 sm:px-6">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-12">
            <div class="min-w-0 md:col-span-12">
                <div class="overflow-hidden rounded-lg border border-gray-300 bg-white shadow-sm">
                    <div class="border-b border-gray-200 bg-gray-50 px-5 py-4 m-0">
                        <div class="flex items-center justify-between gap-3">
                            <h4 class="text-xl font-semibold">
                                All Contacts
                            </h4>
                            <div class="m-0">
                                <a class="inline-flex items-center justify-center gap-1 rounded-md border px-3 py-2 text-sm font-medium transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 border-green-700 bg-green-700 text-white hover:bg-green-800" href="{{ route('contacts.create') }}">
                                    <svg aria-hidden="true" class="inline-block size-4 shrink-0 align-middle" fill="currentColor" focusable="false" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z">
                                        </path>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4">
                                        </path>
                                    </svg>
                                    Add New
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-12">
                            <div class="min-w-0 md:col-span-6">
                            </div>
                            <div class="min-w-0 md:col-span-6">
                                <div class="grid grid-cols-1 gap-4 md:grid-cols-12">
                                    <div class="min-w-0 md:col-span-6">
                                        <select aria-label="Filter by company" class="block min-w-0 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-base text-gray-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200" id="company-filter">
                                            <option selected="" value="">
                                                All Companies
                                            </option>
                                            <option value="1">
                                                Company One
                                            </option>
                                            <option value="2">
                                                Company Two
                                            </option>
                                            <option value="3">
                                                Company Three
                                            </option>
                                        </select>
                                    </div>
                                    <div class="min-w-0 md:col-span-6">
                                        <div class="flex items-stretch mb-4">
                                            <input aria-label="Search contacts" class="block min-w-0 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-base text-gray-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200" id="contact-search" placeholder="Search..." type="search"/>
                                            <div class="flex shrink-0 gap-1 pl-1">
                                                <button aria-label="Reset filters" class="inline-flex items-center justify-center gap-1 rounded-md border px-3 py-2 text-sm font-medium transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 border-gray-500 text-gray-600 hover:bg-gray-600 hover:text-white" data-reset-filters="" type="button">
                                                    <svg aria-hidden="true" class="inline-block size-4 shrink-0 align-middle" fill="currentColor" focusable="false" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" fill-rule="evenodd">
                                                        </path>
                                                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button aria-label="Search contacts" class="inline-flex items-center justify-center gap-1 rounded-md border px-3 py-2 text-sm font-medium transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 border-gray-500 text-gray-600 hover:bg-gray-600 hover:text-white" data-search="" id="button-addon2" type="button">
                                                    <svg aria-hidden="true" class="inline-block size-4 shrink-0 align-middle" fill="currentColor" focusable="false" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018">
                                                        </path>
                                                        <path d="M13 6.5a6.47 6.47 0 0 1-1.258 3.844q.06.044.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse whitespace-nowrap text-left text-sm [&_tbody_tr:nth-child(odd)]:bg-gray-50 [&_tbody_tr:hover]:bg-gray-100">
                                <thead class="bg-gray-100 text-gray-800">
                                    <tr>
                                        <th class="border-b border-gray-200 px-3 py-3 font-semibold" scope="col">
                                            #
                                        </th>
                                        <th class="border-b border-gray-200 px-3 py-3 font-semibold" scope="col">
                                            Name
                                        </th>
                                        <th class="border-b border-gray-200 px-3 py-3 font-semibold" scope="col">
                                            Gender
                                        </th>
                                        <th class="border-b border-gray-200 px-3 py-3 font-semibold" scope="col">
                                            Email
                                        </th>
                                        <th class="border-b border-gray-200 px-3 py-3 font-semibold" scope="col">
                                            Phone
                                        </th>
                                        <th class="border-b border-gray-200 px-3 py-3 font-semibold" scope="col">
                                            Company
                                        </th>
                                        <th class="border-b border-gray-200 px-3 py-3 font-semibold" scope="col">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key=>$contact)
                                    <tr>
                                        <td class="border-b border-gray-200 px-3 py-3">
                                            {{ $key }}
                                        </td>
                                        <td class="border-b border-gray-200 px-3 py-3">
                                            {{ $contact['name'] }}
                                        </td>
                                        <td class="border-b border-gray-200 px-3 py-3">
                                            {{ $contact['gender'] }}
                                        </td>
                                        <td class="border-b border-gray-200 px-3 py-3">
                                            {{ $contact['email'] }}
                                        </td>
                                        <td class="border-b border-gray-200 px-3 py-3">
                                            {{ $contact['phone'] }}
                                        </td>
                                        <td class="border-b border-gray-200 px-3 py-3">
                                            {{ $contact['company'] }}
                                        </td>
                                        <td class="border-b border-gray-200 px-3 py-3" width="150">
                                            <a aria-label="Show contact" class="inline-flex items-center justify-center gap-1 rounded-md border px-3 py-2 text-sm font-medium transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 !px-2 !py-1.5 border-cyan-700 text-cyan-700 hover:bg-cyan-700 hover:text-white" href="{{ route('contacts.show', ['id' => $key]) }}" title="Show">
                                                <svg aria-hidden="true" class="inline-block size-4 shrink-0 align-middle" fill="currentColor" focusable="false" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0">
                                                    </path>
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a aria-label="Edit contact" class="inline-flex items-center justify-center gap-1 rounded-md border px-3 py-2 text-sm font-medium transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 !px-2 !py-1.5 border-gray-500 text-gray-600 hover:bg-gray-600 hover:text-white" href="#" title="Edit">
                                                <svg aria-hidden="true" class="inline-block size-4 shrink-0 align-middle" fill="currentColor" focusable="false" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                    </path>
                                                    <path d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" fill-rule="evenodd">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a aria-label="Delete contact" class="inline-flex items-center justify-center gap-1 rounded-md border px-3 py-2 text-sm font-medium transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 !px-2 !py-1.5 border-red-600 text-red-600 hover:bg-red-600 hover:text-white" data-delete-contact="" href="#" title="Delete">
                                                <svg aria-hidden="true" class="inline-block size-4 shrink-0 align-middle" fill="currentColor" focusable="false" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16">
                                                    </path>
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708">
                                                    </path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <p class="py-6 text-center text-gray-500" hidden="" id="empty-state">
                            No contacts found.
                        </p>
                        <nav aria-label="Pagination (static example)" class="mt-4">
                            <ul class="flex flex-wrap items-center gap-1 justify-center">
                                <li class="pointer-events-none opacity-50">
                                    <a aria-disabled="true" class="inline-flex rounded-md border border-gray-300 px-3 py-2 text-sm text-blue-600 hover:bg-gray-100 focus-visible:outline-2 focus-visible:outline-blue-600" href="#" tabindex="-1">
                                        Previous
                                    </a>
                                </li>
                                <li class="">
                                    <a class="inline-flex rounded-md border border-gray-300 px-3 py-2 text-sm text-blue-600 hover:bg-gray-100 focus-visible:outline-2 focus-visible:outline-blue-600" href="#">
                                        1
                                    </a>
                                </li>
                                <li class="">
                                    <a class="inline-flex rounded-md border border-gray-300 px-3 py-2 text-sm text-blue-600 hover:bg-gray-100 focus-visible:outline-2 focus-visible:outline-blue-600" href="#">
                                        2
                                    </a>
                                </li>
                                <li class="">
                                    <a class="inline-flex rounded-md border border-gray-300 px-3 py-2 text-sm text-blue-600 hover:bg-gray-100 focus-visible:outline-2 focus-visible:outline-blue-600" href="#">
                                        3
                                    </a>
                                </li>
                                <li class="">
                                    <a class="inline-flex rounded-md border border-gray-300 px-3 py-2 text-sm text-blue-600 hover:bg-gray-100 focus-visible:outline-2 focus-visible:outline-blue-600" href="#">
                                        Next
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
