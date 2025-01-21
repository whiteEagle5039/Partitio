@extends('base')
@section('title', 'Partitio | Songs')
@section('container')
     <!-- Search Section -->
  <div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
      <div class="relative">
        <i data-lucide="search" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 h-5 w-5"></i>
        <input type="text" placeholder="Search for songs, artists, or genres..." 
               class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                      bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 
                      focus:ring-blue-500 focus:border-transparent">
      </div>
      <div class="flex flex-wrap gap-2 mt-4">
        <button class="px-4 py-2 bg-blue-100 dark:bg-blue-900 text-blue-700 dark:text-blue-300 rounded-full text-sm">Classical</button>
        <button class="px-4 py-2 bg-blue-100 dark:bg-blue-900 text-blue-700 dark:text-blue-300 rounded-full text-sm">Jazz</button>
        <button class="px-4 py-2 bg-blue-100 dark:bg-blue-900 text-blue-700 dark:text-blue-300 rounded-full text-sm">Rock</button>
        <button class="px-4 py-2 bg-blue-100 dark:bg-blue-900 text-blue-700 dark:text-blue-300 rounded-full text-sm">Pop</button>
      </div>
    </div>
  </div>

  <!-- Songs Grid -->
  <div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Song Card -->
      <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
        <div class="aspect-w-16 aspect-h-9 bg-gray-100 dark:bg-gray-700">
          <img src="https://picsum.photos/400/225" alt="Song thumbnail" class="object-cover">
        </div>
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Moonlight Sonata</h3>
          <p class="text-sm text-gray-600 dark:text-gray-400">By Ludwig van Beethoven</p>
          <div class="mt-4 flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <span class="text-sm text-gray-600 dark:text-gray-400">4.8</span>
              <div class="flex items-center">
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-current"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-current"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-current"></i>
                <i data-lucide="star" class="h-4 w-4 text-yellow-400 fill-current"></i>
                <i data-lucide="star-half" class="h-4 w-4 text-yellow-400 fill-current"></i>
              </div>
            </div>
            <button class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
              <i data-lucide="download" class="h-5 w-5"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- More song cards... -->
    </div>
  </div>

@endsection