@extends('layout.layout')

@section('title', 'Users Management | SpiderWEB')

@include('templates.header')

<section class="w-[80%] h-full flex flex-col bg-gray-50 p-6 gap-6">

    <!-- Header -->
    <div class="w-full flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-green-700">User Management</h1>
            <p class="text-sm text-gray-500">Manage all platform users</p>
        </div>

        <button 
            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition"
        >
            + Add User
        </button>
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
                    <th class="p-3 border">ID</th>
                    <th class="p-3 border">Name</th>
                    <th class="p-3 border">Email</th>
                    <th class="p-3 border">Role</th>
                    <th class="p-3 border">Status</th>
                    <th class="p-3 border">Actions</th>
                </tr>
            </thead>

            <tbody class="text-sm">
                <tr class="hover:bg-green-50">
                    <td class="p-3 border">1</td>
                    <td class="p-3 border">Houssam</td>
                    <td class="p-3 border">houssam@mail.com</td>
                    <td class="p-3 border">Student</td>
                    <td class="p-3 border">
                        <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">
                            Active
                        </span>
                    </td>
                    <td class="p-3 border flex gap-3">
                        <button class="text-green-700 hover:underline">View</button>
                        <button class="text-green-700 hover:underline">Edit</button>
                        <button class="text-red-600 hover:underline">Delete</button>
                    </td>
                </tr>

                <!-- More users -->
            </tbody>
        </table>

    </div>

</section>


