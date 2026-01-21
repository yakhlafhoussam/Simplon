@extends('layout.layout')

@section('title', 'Class Management | SpiderWEB')

@include('templates.Admin.header')

<section class="w-[85%] h-full flex flex-col bg-gray-50 p-6 gap-6">

    <!-- Header -->
    <div class="w-full flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-green-700">Class Management</h1>
            <p class="text-sm text-gray-500">Manage all training classes</p>
        </div>

        <button 
            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition"
        >
            + Add Class
        </button>
    </div>

    <!-- Search -->
    <div class="w-full flex gap-4">
        <input 
            type="text" 
            placeholder="Search by class name..." 
            class="flex-1 border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"
        >
    </div>

    <!-- Classes Table -->
    <div class="w-full bg-white rounded-lg shadow overflow-hidden flex-1">

        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-green-100 text-left text-sm">
                    <th class="p-3 border">ID</th>
                    <th class="p-3 border">Class Name</th>
                    <th class="p-3 border">Year</th>
                    <th class="p-3 border">Students</th>
                    <th class="p-3 border">Trainer</th>
                    <th class="p-3 border">Status</th>
                    <th class="p-3 border">Actions</th>
                </tr>
            </thead>

            <tbody class="text-sm">

                <tr class="hover:bg-green-50">
                    <td class="p-3 border">1</td>
                    <td class="p-3 border">Class A</td>
                    <td class="p-3 border">2025</td>
                    <td class="p-3 border">24</td>
                    <td class="p-3 border">Mr. Ahmed</td>
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

                <!-- More classes -->
            </tbody>
        </table>

    </div>

</section>



