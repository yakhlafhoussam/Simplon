@extends('layout.layout')

@section('title', 'Users Management | SpiderWEB')

@include('templates.Admin.header')

<section class="w-[85%] h-full flex flex-col bg-gray-50 p-6 gap-6">

    <!-- Header -->
    <div class="w-full flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-green-700">User Management</h1>
            <p class="text-sm text-gray-500">Manage all platform users</p>
        </div>

        <a 
            href="/users/newuser"
            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition"
        >
            + Add User
        </a>
    </div>

    <!-- Search & Filter -->
    <div class="w-full flex gap-4">
        <input 
            type="text" 
            placeholder="Search by name or email..." 
            class="flex-1 border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"
        >

        <select class="border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400">
            <option value="">All Roles</option>
            <option>Student</option>
            <option>Trainer</option>
            <option>Admin</option>
        </select>
    </div>

    <!-- Users Table -->
    <div class="w-full bg-white rounded-lg shadow overflow-hidden flex-1">

        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-green-100 text-left text-sm">
                    <th class="p-3 border"><i class="fas fa-fingerprint text-sm"></i> ID</th>
                    <th class="p-3 border"><i class="fas fa-address-card text-sm"></i> Full Name</th>
                    <th class="p-3 border"><i class="fas fa-envelope text-sm"></i> Email</th>
                    <th class="p-3 border"><i class="fas fa-dice-five text-sm"></i> Role</th>
                    <th class="p-3 border"><i class="fas fa-lock text-sm"></i> Status</th>
                    <th class="p-3 border"><i class="fas fa-circle-exclamation text-sm"></i> Actions</th>
                </tr>
            </thead>

            <tbody class="text-sm">
                <tr class="hover:bg-green-50">
                    <td class="p-3 border">1</td>
                    <td class="p-3 border">Houssam</td>
                    <td class="p-3 border">houssam@mail.com</td>
                    <td class="p-3 border">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-sm font-medium bg-blue-500 text-white">
                            <i class="fas fa-children mr-1 text-sm"></i><span>Student</span>
                        </span>
                    </td>
                    <td class="p-3 border">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-sm font-medium bg-green-500 text-white">
                            <i class="fas fa-circle-check mr-1 text-sm"></i><span>Active</span>
                        </span>
                    </td>
                    <td class="p-4 border flex gap-3">
                        <button class="text-green-700 hover:underline">View</button>
                        <button class="text-green-700 hover:underline">Edit</button>
                        <button class="text-red-600 hover:underline">Lock</button>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</section>


