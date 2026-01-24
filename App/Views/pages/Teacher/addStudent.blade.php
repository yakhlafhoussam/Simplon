@extends('layout.layout')

@section('title', 'Add Student | SpiderWEB')

@include('templates.Admin.header')

<section class="w-[85%] h-full flex justify-center items-center bg-gray-50 py-10">

  <div class="w-[500px] bg-white rounded-xl shadow-md p-8">

    <h2 class="text-2xl font-semibold text-green-700 mb-6 text-center">
      Add Student to Class
    </h2>

    <form method="POST" action="/class/add-student">

      <!-- Hidden Class ID -->
      <input type="hidden" name="class_id" value="<?= $class_id ?>">

      <!-- Select Existing Student -->
      <div class="mb-5">
        <label class="block text-sm font-medium text-gray-700 mb-1">
          Select Student
        </label>
        <select name="student_id" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
          <option value="">-- Choose a student --</option>
          <!-- Loop students here -->
          <option value="1">Houssam Yakhlaf (houssam@mail.com)</option>
          <option value="2">Ali Karim (ali@mail.com)</option>
        </select>
      </div>

      <!-- Buttons -->
      <div class="flex justify-end gap-3">
        <a href="/class/view/<?= $class_id ?>" class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-100">
          Cancel
        </a>
        <button type="submit" class="px-5 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700">
          Add Student
        </button>
      </div>

    </form>

  </div>

</section>
