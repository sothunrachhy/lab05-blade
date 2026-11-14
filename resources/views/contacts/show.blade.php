@extends('layouts.main')
@section('content')
<main class="py-10">
    <div class="mx-auto w-full max-w-6xl px-4 sm:px-6">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-12">
            <div class="min-w-0 md:col-span-12">
                <div class="overflow-hidden rounded-lg border border-gray-300 bg-white shadow-sm">
                    <div class="border-b border-gray-200 bg-gray-50 px-5 py-4">
                        <strong>
                            Contact Details
                        </strong>
                    </div>
                    <div class="p-5">
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-12">
                            <div class="min-w-0 md:col-span-12">
                                <div class="mb-2 grid grid-cols-1 gap-4 md:grid-cols-12">
                                    <span class="md:col-span-3 block py-2 font-medium text-gray-800">
                                        Full Name
                                    </span>
                                    <div class="min-w-0 md:col-span-9">
                                        <p class="py-2 text-gray-600">
                                            {{ $data['name'] }}
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-2 grid grid-cols-1 gap-4 md:grid-cols-12">
                                    <span class="md:col-span-3 block py-2 font-medium text-gray-800">
                                        Gender
                                    </span>
                                    <div class="min-w-0 md:col-span-9">
                                        <p class="py-2 text-gray-600">
                                            {{ $data['gender'] }}
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-2 grid grid-cols-1 gap-4 md:grid-cols-12">
                                    <span class="md:col-span-3 block py-2 font-medium text-gray-800">
                                        Email
                                    </span>
                                    <div class="min-w-0 md:col-span-9">
                                        <p class="py-2 text-gray-600">
                                            {{ $data['email'] }}
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-2 grid grid-cols-1 gap-4 md:grid-cols-12">
                                    <span class="md:col-span-3 block py-2 font-medium text-gray-800">
                                        Phone
                                    </span>
                                    <div class="min-w-0 md:col-span-9">
                                        <p class="py-2 text-gray-600">
                                            {{ $data['phone'] }}
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-2 grid grid-cols-1 gap-4 md:grid-cols-12">
                                    <span class="md:col-span-3 block py-2 font-medium text-gray-800">
                                        Company
                                    </span>
                                    <div class="min-w-0 md:col-span-9">
                                        <p class="py-2 text-gray-600">
                                            {{ $data['company'] }}
                                        </p>
                                    </div>
                                </div>
                                <hr class="my-5 border-gray-200"/>
                                <div class="mb-2 grid grid-cols-1 gap-4 md:grid-cols-12">
                                    <div class="min-w-0 md:col-span-9 md:col-start-4">
                                        <a class="inline-flex items-center justify-center gap-1 rounded-md border px-3 py-2 text-sm font-medium transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 border-cyan-700 bg-cyan-700 text-white hover:bg-cyan-800" href="#">
                                            Edit
                                        </a>
                                        <a class="inline-flex items-center justify-center gap-1 rounded-md border px-3 py-2 text-sm font-medium transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 border-red-600 text-red-600 hover:bg-red-600 hover:text-white" data-delete-contact="" data-details-delete="" href="#">
                                            Delete
                                        </a>
                                        <a class="inline-flex items-center justify-center gap-1 rounded-md border px-3 py-2 text-sm font-medium transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 border-gray-500 text-gray-600 hover:bg-gray-600 hover:text-white" href="{{ route('contacts.index') }}">
                                            Cancel
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
