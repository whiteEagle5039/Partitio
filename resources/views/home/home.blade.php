@extends("base")
@section('title', 'Partitio | HOME')
@section('container')
    <!-- Hero Section -->
    <div class="bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4 py-16">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
            Share Your Music with the World
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">
            Upload, discover, and learn music in a vibrant community
            </p>
            <div class="flex justify-center space-x-4">
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">
                Get Started
            </button>
            <button class="border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-white px-6 py-3 rounded-lg">
                Learn More
            </button>
            </div>
        </div>
        </div>
    </div>
    <!-- Featured Content -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Popular Scores -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <div class="flex items-center space-x-2 mb-4">
            <i data-lucide="music" class="h-5 w-5 text-blue-600"></i>
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Popular Scores</h2>
            </div>
            <div class="space-y-4">
            <div class="flex items-center space-x-4 p-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md cursor-pointer">
                <div class="h-12 w-12 bg-gray-100 dark:bg-gray-700 rounded-md flex items-center justify-center">
                <i data-lucide="file-music" class="h-6 w-6"></i>
                </div>
                <div>
                <h3 class="font-medium text-gray-900 dark:text-white">Moonlight Sonata</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">1.2k downloads</p>
                </div>
            </div>
            <!-- More scores... -->
            </div>
        </div>

        <!-- Featured Communities -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <div class="flex items-center space-x-2 mb-4">
            <i data-lucide="users" class="h-5 w-5 text-blue-600"></i>
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Featured Communities</h2>
            </div>
            <div class="space-y-4">
            <div class="flex items-center space-x-4 p-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md cursor-pointer">
                <div class="h-12 w-12 bg-gray-100 dark:bg-gray-700 rounded-md flex items-center justify-center">
                <i data-lucide="users" class="h-6 w-6"></i>
                </div>
                <div>
                <h3 class="font-medium text-gray-900 dark:text-white">Classical Piano</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">1.5k members</p>
                </div>
            </div>
            <!-- More communities... -->
            </div>
        </div>

        <!-- Featured Courses -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <div class="flex items-center space-x-2 mb-4">
            <i data-lucide="book-open" class="h-5 w-5 text-blue-600"></i>
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Featured Courses</h2>
            </div>
            <div class="space-y-4">
            <div class="flex items-center space-x-4 p-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md cursor-pointer">
                <div class="h-12 w-12 bg-gray-100 dark:bg-gray-700 rounded-md flex items-center justify-center">
                <i data-lucide="book-open" class="h-6 w-6"></i>
                </div>
                <div>
                <h3 class="font-medium text-gray-900 dark:text-white">Music Theory 101</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">4h • Beginner</p>
                </div>
            </div>
            <!-- More courses... -->
            </div>
        </div>
        </div>
    </div>
@endsection