@extends('layouts.main')
@section('content')
<main class="py-10">
    <div class="mx-auto w-full max-w-6xl px-4 sm:px-6">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-12">
            <div class="min-w-0 md:col-span-12">
                <div class="overflow-hidden rounded-lg border border-gray-300 bg-white shadow-sm">
                    <div class="border-b border-gray-200 bg-gray-50 px-5 py-4">
                        <strong>
                            Add New Contact
                        </strong>
                    </div>
                    <form class="p-5" id="contact-form">
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-12">
                            <div class="min-w-0 md:col-span-12">
                                <div class="mb-4 grid grid-cols-1 gap-4 md:grid-cols-12">
                                    <label class="md:col-span-3 block py-2 font-medium text-gray-800" for="fullname">
                                        Name
                                    </label>
                                    <div class="min-w-0 md:col-span-9">
                                        <input aria-required="true" autocomplete="name" class="block min-w-0 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-base text-gray-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200" id="fullname" name="fullname" required="" type="text"/>
                                    </div>
                                </div>
                                <div class="mb-4 grid grid-cols-1 gap-4 md:grid-cols-12">
                                    <label class="md:col-span-3 block py-2 font-medium text-gray-800" for="gender">
                                        Gender
                                    </label>
                                    <div class="min-w-0 md:col-span-9">
                                        <select class="block min-w-0 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-base text-gray-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200" id="gender" name="gender">
                                            <option value="">
                                                Select Gender
                                            </option>
                                            <option value="1">
                                                Female
                                            </option>
                                            <option value="2">
                                                Male
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4 grid grid-cols-1 gap-4 md:grid-cols-12">
                                    <label class="md:col-span-3 block py-2 font-medium text-gray-800" for="email">
                                        Email
                                    </label>
                                    <div class="min-w-0 md:col-span-9">
                                        <input autocomplete="email" class="block min-w-0 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-base text-gray-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200" id="email" name="email" type="email"/>
                                    </div>
                                </div>
                                <div class="mb-4 grid grid-cols-1 gap-4 md:grid-cols-12">
                                    <label class="md:col-span-3 block py-2 font-medium text-gray-800" for="phone">
                                        Phone
                                    </label>
                                    <div class="min-w-0 md:col-span-9">
                                        <input autocomplete="tel" class="block min-w-0 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-base text-gray-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200" id="phone" name="phone" type="tel"/>
                                    </div>
                                </div>
                                <div class="mb-4 grid grid-cols-1 gap-4 md:grid-cols-12">
                                    <label class="md:col-span-3 block py-2 font-medium text-gray-800" for="address">
                                        Address
                                    </label>
                                    <div class="min-w-0 md:col-span-9">
                                        <textarea autocomplete="street-address" class="block min-w-0 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-base text-gray-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200" id="address" name="address" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="mb-4 grid grid-cols-1 gap-4 md:grid-cols-12">
                                    <label class="md:col-span-3 block py-2 font-medium text-gray-800" for="company_id">
                                        Company
                                    </label>
                                    <div class="min-w-0 md:col-span-9">
                                        <select class="block min-w-0 w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-base text-gray-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200" id="company_id" name="company_id">
                                            <option value="">
                                                Select Company
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
                                </div>
                                <hr class="my-5 border-gray-200"/>
                                <div class="mb-4 grid grid-cols-1 gap-4 md:grid-cols-12">
                                    <div class="min-w-0 md:col-span-9 md:col-start-4">
                                        <button class="inline-flex items-center justify-center gap-1 rounded-md border px-3 py-2 text-sm font-medium transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 border-blue-600 bg-blue-600 text-white hover:bg-blue-700" type="#">
                                            Save
                                        </button>
                                        <a class="inline-flex items-center justify-center gap-1 rounded-md border px-3 py-2 text-sm font-medium transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 border-gray-500 text-gray-600 hover:bg-gray-600 hover:text-white" href="{{ route('contacts.index') }}">
                                            Cancel
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 rounded-md bg-blue-50 p-3 text-sm text-blue-800" hidden="" id="form-status" role="status">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
