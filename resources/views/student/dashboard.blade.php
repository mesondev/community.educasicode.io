@extends('layouts.app')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- Card 1 -->
    <div class="bg-white p-6 rounded-2xl shadow-md">

        <h2 class="text-lg font-semibold text-gray-700">
            My Courses
        </h2>

        <p class="text-4xl font-bold text-indigo-600 mt-4">
            12
        </p>

    </div>

    <!-- Card 2 -->
    <div class="bg-white p-6 rounded-2xl shadow-md">

        <h2 class="text-lg font-semibold text-gray-700">
            Completed
        </h2>

        <p class="text-4xl font-bold text-green-500 mt-4">
            8
        </p>

    </div>

    <!-- Card 3 -->
    <div class="bg-white p-6 rounded-2xl shadow-md">

        <h2 class="text-lg font-semibold text-gray-700">
            Certificates
        </h2>

        <p class="text-4xl font-bold text-yellow-500 mt-4">
            5
        </p>

    </div>

</div>

<div class="bg-white p-6 rounded-2xl shadow-md mt-6">

    <h1 class="text-3xl font-bold text-indigo-600">
        Student Dashboard
    </h1>

    <p class="text-gray-500 mt-2">
        Welcome back, {{ auth()->user()->name }} 👋
    </p>

</div>

@endsection