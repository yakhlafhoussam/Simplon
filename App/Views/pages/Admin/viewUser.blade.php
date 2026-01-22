@extends('layout.layout')

@section('title', 'View User | SpiderWEB')

@include('templates.Admin.header')

<section class="w-[80%] h-full flex flex-col bg-gray-50 p-6 gap-6">

    <!-- Header -->
    <div class="w-full flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-green-700">User Profile</h1>
            <p class="text-sm text-gray-500">Detailed information about the user</p>
        </div>

        <div class="flex gap-3">
            <button class="px-4 py-2 rounded border text-gray-700 hover:bg-gray-100">
                Back
            </button>
            <button class="px-4 py-2 rounded bg-green-600 text-white hover:bg-green-700">
                Edit User
            </button>
        </div>
    </div>

    <!-- User Basic Info -->
    <div class="bg-white rounded-lg shadow p-6 grid grid-cols-2 gap-6">

        <div>
            <p class="text-sm text-gray-500">First Name</p>
            <p class="font-medium text-gray-800">Houssam</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Last Name</p>
            <p class="font-medium text-gray-800">Yakhlaf</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Email</p>
            <p class="font-medium text-gray-800">houssam@mail.com</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Role</p>
            <span class="inline-block px-3 py-1 text-sm rounded bg-green-100 text-green-700">
                Student
            </span>
        </div>

        <div>
            <p class="text-sm text-gray-500">Created Date</p>
            <p class="font-medium text-gray-800">2025-01-10 14:32</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Class</p>
            <p class="font-medium text-gray-800">Class A (2024 / 2025)</p>
        </div>

    </div>

    <!-- Class & Teacher Info -->
    <div class="bg-white rounded-lg shadow p-6">

        <h2 class="text-lg font-semibold text-green-700 mb-4">Class Information</h2>

        <div class="grid grid-cols-3 gap-6 text-sm">

            <div>
                <p class="text-gray-500">Class Name</p>
                <p class="font-medium">Class A</p>
            </div>

            <div>
                <p class="text-gray-500">School Year</p>
                <p class="font-medium">2024 / 2025</p>
            </div>

            <div>
                <p class="text-gray-500">Main Teacher</p>
                <p class="font-medium">Mr. Ahmed</p>
            </div>

        </div>

    </div>

    <!-- Sprints of the Class -->
    <div class="bg-white rounded-lg shadow p-6">

        <h2 class="text-lg font-semibold text-green-700 mb-4">Sprints</h2>

        <table class="w-full border-collapse text-sm">
            <thead>
                <tr class="bg-green-100 text-left">
                    <th class="p-2 border">Sprint</th>
                    <th class="p-2 border">Start Date</th>
                    <th class="p-2 border">End Date</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-green-50">
                    <td class="p-2 border">Sprint 1</td>
                    <td class="p-2 border">2025-01-01</td>
                    <td class="p-2 border">2025-01-15</td>
                </tr>
            </tbody>
        </table>

    </div>

    <!-- Evaluations -->
    <div class="bg-white rounded-lg shadow p-6">

        <h2 class="text-lg font-semibold text-green-700 mb-4">Evaluations</h2>

        <table class="w-full border-collapse text-sm">
            <thead>
                <tr class="bg-green-100 text-left">
                    <th class="p-2 border">Brief</th>
                    <th class="p-2 border">Sprint</th>
                    <th class="p-2 border">Level</th>
                    <th class="p-2 border">Review</th>
                    <th class="p-2 border">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-green-50">
                    <td class="p-2 border">Brief PHP</td>
                    <td class="p-2 border">Sprint 1</td>
                    <td class="p-2 border">
                        <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">
                            TRANSPOSER
                        </span>
                    </td>
                    <td class="p-2 border">
                        <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">
                            Excellent
                        </span>
                    </td>
                    <td class="p-2 border">2025-01-20</td>
                </tr>
            </tbody>
        </table>

    </div>

    <!-- Livrables -->
    <div class="bg-white rounded-lg shadow p-6">

        <h2 class="text-lg font-semibold text-green-700 mb-4">Livrables</h2>

        <table class="w-full border-collapse text-sm">
            <thead>
                <tr class="bg-green-100 text-left">
                    <th class="p-2 border">Brief</th>
                    <th class="p-2 border">URL</th>
                    <th class="p-2 border">Submitted At</th>
                    <th class="p-2 border">Comment</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-green-50">
                    <td class="p-2 border">Brief PHP</td>
                    <td class="p-2 border">
                        <a href="#" class="text-green-700 hover:underline">View File</a>
                    </td>
                    <td class="p-2 border">2025-01-18</td>
                    <td class="p-2 border">Good work</td>
                </tr>
            </tbody>
        </table>

    </div>

</section>
