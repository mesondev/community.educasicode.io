@extends('layouts.app')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white p-6 rounded-2xl shadow-md">

        <h2 class="text-lg font-semibold text-gray-700">
            Total Courses
        </h2>

        <p class="text-4xl font-bold text-indigo-600 mt-4">
            20
        </p>

    </div>

    <div class="bg-white p-6 rounded-2xl shadow-md">

        <h2 class="text-lg font-semibold text-gray-700">
            Students
        </h2>

        <p class="text-4xl font-bold text-green-500 mt-4">
            350
        </p>

    </div>

    <div class="bg-white p-6 rounded-2xl shadow-md">

        <h2 class="text-lg font-semibold text-gray-700">
            Revenue
        </h2>

        <p class="text-4xl font-bold text-yellow-500 mt-4">
            $4.2K
        </p>

    </div>

</div>

<div class="bg-white p-6 rounded-2xl shadow-md mt-6">

    <h1 class="text-3xl font-bold text-indigo-600">
        Instructor Dashboard
    </h1>

    <p class="text-gray-500 mt-2">
        Manage your courses and students efficiently.
    </p>

</div>

@endsection