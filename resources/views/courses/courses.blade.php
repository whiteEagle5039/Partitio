@extends('base')
@section('title', 'Partitio | Courses')
@section('container')
    <!-- Courses Header -->
  <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
    <div class="container mx-auto px-4 py-8">
      <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Music Courses</h1>
      <p class="mt-2 text-gray-600 dark:text-gray-400">Learn from expert musicians and improve your skills</p>
    </div>
  </div>

  <!-- Course Categories -->
  <div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      <button class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow">
        <i data-lucide="book-open" class="h-6 w-6 text-blue-600 dark:text-blue-400 mx-auto mb-2"></i>
        <span class="block text-center text-gray-900 dark:text-white">Theory</span>
      </button>
      <button class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow">
        <i data-lucide="music" class="h-6 w-6 text-blue-600 dark:text-blue-400 mx-auto mb-2"></i>
        <span class="block text-center text-gray-900 dark:text-white">Instruments</span>
      </button>
      <button class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow">
        <i data-lucide="mic-2" class="h-6 w-6 text-blue-600 dark:text-blue-400 mx-auto mb-2"></i>
        <span class="block text-center text-gray-900 dark:text-white">Vocals</span>
      </button>
      <button class="p-4 bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow">
        <i data-lucide="settings" class="h-6 w-6 text-blue-600 dark:text-blue-400 mx-auto mb-2"></i>
        <span class="block text-center text-gray-900 dark:text-white">Production</span>
      </button>
    </div>
  </div>

  <!-- Featured Courses -->
  <div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Featured Courses</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Course Card -->
      <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
        <div class="aspect-w-16 aspect-h-9 bg-gray-100 dark:bg-gray-700">
          <img src="https://picsum.photos/400/225" alt="Course thumbnail" class="object-cover">
        </div>
        <div class="p-4">
          <div class="flex items-center justify-between mb-2">
            <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900 text-blue-700 dark:text-blue-300 text-xs rounded-full">Beginner</span>
            <span class="text-sm text-gray-600 dark:text-gray-400">4h 30m</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Music Theory Fundamentals</h3>
          <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">Learn the basics of music theory and start your musical journey.</p>
          <div class="mt-4 flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <img src="https://picsum.photos/32/32" alt="Instructor" class="h-8 w-8 rounded-full">
              <span class="text-sm text-gray-600 dark:text-gray-400">John Doe</span>
            </div>
            <span class="text-lg font-bold text-gray-900 dark:text-white">$29.99</span>
          </div>
        </div>
      </div>
      <!-- More course cards... -->
    </div>
  </div>

@endsection