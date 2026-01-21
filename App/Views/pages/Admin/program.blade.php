@extends('layout.layout')

@section('title', 'Program Management | SpiderWEB')

@include('templates.Admin.header')

<section class="w-[85%] h-full flex flex-col bg-gray-50 p-6 gap-6">

    <!-- Header -->
    <div class="w-full">
        <h1 class="text-2xl font-bold text-green-700">Sprints & Competences Management</h1>
        <p class="text-sm text-gray-500">
            Manage training sprints and evaluation competences
        </p>
    </div>

    <!-- Two Columns Layout -->
    <div class="w-full grid grid-cols-2 gap-6 flex-1">

        <!-- Sprints Management -->
        <div class="bg-white rounded-lg shadow flex flex-col">

            <!-- Header -->
            <div class="p-4 border-b flex justify-between items-center">
                <h2 class="text-lg font-semibold text-green-700">Sprints</h2>
                <button 
                    class="bg-green-600 text-white px-3 py-1.5 rounded hover:bg-green-700 transition text-sm"
                >
                    + Add Sprint
                </button>
            </div>

            <!-- Search -->
            <div class="p-4">
                <input 
                    type="text" 
                    placeholder="Search sprint..." 
                    class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"
                >
            </div>

            <!-- Sprints Table -->
            <div class="flex-1 overflow-auto">
                <table class="w-full border-collapse text-sm">
                    <thead>
                        <tr class="bg-green-100 text-left">
                            <th class="p-2 border">ID</th>
                            <th class="p-2 border">Sprint Name</th>
                            <th class="p-2 border">Start</th>
                            <th class="p-2 border">End</th>
                            <th class="p-2 border">Status</th>
                            <th class="p-2 border">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-green-50">
                            <td class="p-2 border">1</td>
                            <td class="p-2 border">Sprint 1</td>
                            <td class="p-2 border">01/01/2025</td>
                            <td class="p-2 border">15/01/2025</td>
                            <td class="p-2 border">
                                <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">
                                    Active
                                </span>
                            </td>
                            <td class="p-2 border flex gap-2">
                                <button class="text-green-700 hover:underline">View</button>
                                <button class="text-green-700 hover:underline">Edit</button>
                                <button class="text-red-600 hover:underline">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <!-- Competences Management -->
        <div class="bg-white rounded-lg shadow flex flex-col">

            <!-- Header -->
            <div class="p-4 border-b flex justify-between items-center">
                <h2 class="text-lg font-semibold text-green-700">Competences</h2>
                <button 
                    class="bg-green-600 text-white px-3 py-1.5 rounded hover:bg-green-700 transition text-sm"
                >
                    + Add Competence
                </button>
            </div>

            <!-- Search -->
            <div class="p-4">
                <input 
                    type="text" 
                    placeholder="Search competence..." 
                    class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-400"
                >
            </div>

            <!-- Competences Table -->
            <div class="flex-1 overflow-auto">
                <table class="w-full border-collapse text-sm">
                    <thead>
                        <tr class="bg-green-100 text-left">
                            <th class="p-2 border">ID</th>
                            <th class="p-2 border">Competence Name</th>
                            <th class="p-2 border">Domain</th>
                            <th class="p-2 border">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-green-50">
                            <td class="p-2 border">1</td>
                            <td class="p-2 border">PHP Basics</td>
                            <td class="p-2 border">Backend</td>
                            <td class="p-2 border flex gap-2">
                                <button class="text-green-700 hover:underline">Edit</button>
                                <button class="text-red-600 hover:underline">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</section>
