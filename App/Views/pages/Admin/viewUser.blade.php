@extends('layout.layout')

@section('title', 'View User | SpiderWEB')

@include('templates.Admin.header')

<section class="w-[85%] flex flex-col bg-gray-50 p-6 gap-6 overflow-auto">

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
        </div>
    </div>

    <!-- User Basic Info -->
    <div class="bg-white rounded-lg shadow p-6 grid grid-cols-2 gap-6">

        <div>
            <p class="text-sm text-gray-500">First Name</p>
            <p class="font-medium text-gray-800">{{ $users[0]['first_name'] }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Last Name</p>
            <p class="font-medium text-gray-800">{{ $users[0]['last_name'] }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Email</p>
            <p class="font-medium text-gray-800">{{ $users[0]['email'] }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Role</p>
            @if ($users[0]['role'] == 'admin')
                <span class="inline-flex items-center px-2 py-1 rounded-full text-sm font-medium bg-red-500 text-white">
                    <i class="fas fa-user-tie mr-1 text-sm"></i><span>{{ ucfirst($users[0]['role']) }}</span>
                </span>
            @else
                @if ($users[0]['role'] == 'teacher')
                    <span
                        class="inline-flex items-center px-2 py-1 rounded-full text-sm font-medium bg-yellow-500 text-white">
                        <i
                            class="fas fa-person-chalkboard mr-1 text-sm"></i><span>{{ ucfirst($users[0]['role']) }}</span>
                    </span>
                @else
                    <span
                        class="inline-flex items-center px-2 py-1 rounded-full text-sm font-medium bg-blue-500 text-white">
                        <i class="fas fa-children mr-1 text-sm"></i><span>{{ ucfirst($users[0]['role']) }}</span>
                    </span>
                @endif
            @endif
        </div>

        <div>
            <p class="text-sm text-gray-500">Created Date</p>
            <p class="font-medium text-gray-800">{{ $users[0]['created_date'] }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Class</p>
            <p class="font-medium text-gray-800">
                @if ($users[0]['class_name'] == '')
                    There is no class for this user
                @else
                    {{ $users[0]['class_name'] . ' ' . $users[0]['school_year'] }}
                @endif
            </p>
        </div>

    </div>

    <!-- Class & Teacher Info -->

    @if ($users[0]['class_name'] != '')
        <div class="bg-white rounded-lg shadow p-6">

            <h2 class="text-lg font-semibold text-green-700 mb-4">Class Information</h2>

            <div class="grid grid-cols-3 gap-6 text-sm">

                <div>
                    <p class="text-gray-500">Class Name</p>
                    <p class="font-medium">{{ $users[0]['class_name'] }}</p>
                </div>

                <div>
                    <p class="text-gray-500">School Year</p>
                    <p class="font-medium">{{ $users[0]['school_year'] }}</p>
                </div>

                <div>
                    <p class="text-gray-500">Main Teacher</p>
                    <p class="font-medium">{{ $users[0]['teacher_first_name'] . ' ' . $users[0]['teacher_last_name'] }}
                    </p>
                </div>

            </div>

        </div>

    <!-- Student Progress -->
    <div class="bg-white rounded-lg shadow p-6">

        <h2 class="text-lg font-semibold text-green-700 mb-6">Student Progress</h2>

        <!-- Global Progress -->
        <div class="mb-6">
            <p class="text-sm text-gray-500 mb-1">Global Progress</p>
            <div class="w-full bg-gray-200 rounded-full h-4">
                <div class="bg-green-600 h-4 rounded-full" style="width: 70%;"></div>
            </div>
            <p class="text-sm text-gray-600 mt-1">70% completed</p>
        </div>

        <!-- Progress by Sprint -->
        <div>
            <h3 class="text-md font-medium text-gray-700 mb-3">Progress by Sprint</h3>

            <div class="space-y-4">

                <!-- Sprint 1 -->
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span>Sprint 1</span>
                        <span class="text-gray-600">80%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-green-500 h-3 rounded-full" style="width: 80%;"></div>
                    </div>
                </div>

                <!-- Sprint 2 -->
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span>Sprint 2</span>
                        <span class="text-gray-600">55%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-green-500 h-3 rounded-full" style="width: 55%;"></div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Competence Levels -->
        <div class="mt-8">
            <h3 class="text-md font-medium text-gray-700 mb-3">Competence Levels</h3>

            <table class="w-full text-sm border-collapse">
                <thead>
                    <tr class="bg-green-100 text-left">
                        <th class="p-2 border">Competence</th>
                        <th class="p-2 border">Level</th>
                        <th class="p-2 border">Review</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-green-50">
                        <td class="p-2 border">PHP Basics</td>
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
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <!-- Class Progress (Teacher View) -->
    <div class="bg-white rounded-lg shadow p-6">

        <h2 class="text-lg font-semibold text-green-700 mb-6">Class Progress</h2>

        <!-- Global Class Progress -->
        <div class="mb-6">
            <p class="text-sm text-gray-500 mb-1">Global Class Progress</p>
            <div class="w-full bg-gray-200 rounded-full h-4">
                <div class="bg-green-600 h-4 rounded-full" style="width: 65%;"></div>
            </div>
            <p class="text-sm text-gray-600 mt-1">65% of objectives achieved</p>
        </div>

        <!-- Progress by Sprint -->
        <div class="mb-8">
            <h3 class="text-md font-medium text-gray-700 mb-3">Progress by Sprint</h3>

            <div class="space-y-4">

                <!-- Sprint 1 -->
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span>Sprint 1</span>
                        <span class="text-gray-600">75%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-green-500 h-3 rounded-full" style="width: 75%;"></div>
                    </div>
                </div>

                <!-- Sprint 2 -->
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span>Sprint 2</span>
                        <span class="text-gray-600">50%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-green-500 h-3 rounded-full" style="width: 50%;"></div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Students Summary -->
        <div>
            <h3 class="text-md font-medium text-gray-700 mb-3">Students Summary</h3>

            <table class="w-full text-sm border-collapse">
                <thead>
                    <tr class="bg-green-100 text-left">
                        <th class="p-2 border">Student</th>
                        <th class="p-2 border">Average Level</th>
                        <th class="p-2 border">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-green-50">
                        <td class="p-2 border">Houssam</td>
                        <td class="p-2 border">
                            <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">
                                S_ADAPTER
                            </span>
                        </td>
                        <td class="p-2 border">
                            <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">
                                Good
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    @endif


</section>
