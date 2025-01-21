@extends('base')
@section('title', 'Partitio | Community')
@section('container')
      <!-- Header -->
  <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
    <div class="container mx-auto px-4 py-8">
      <div class="flex justify-between items-center">
        <div>
          <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Music Communities</h1>
          <p class="mt-2 text-gray-600 dark:text-gray-400">Join communities of musicians and share your passion</p>
        </div>
        <a href="{{ route('community.create') }}" 
           class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg flex items-center">
          <i data-lucide="plus-circle" class="h-5 w-5 mr-2"></i>
          Create Community
        </a>
      </div>
    </div>
  </div>

  <!-- Search and Filters -->
  <div class="container mx-auto px-4 py-6">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6" >
        <div class="flex-1 relative">
          <i data-lucide="search" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 h-5 w-5"></i>
          <input type="text" placeholder="Search communities or personalities ..." 
                class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                        bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 
                        focus:ring-blue-500 focus:border-transparent">
        </div>
    </div>
  </div>

  <!-- Communities Grid -->
  <div class="container mx-auto px-4 py-6 p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Community Card -->
      <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <div class="flex items-center space-x-4">
          <div class="h-16 w-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
            <i data-lucide="music" class="h-8 w-8 text-blue-600 dark:text-blue-300"></i>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Classical Piano</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">1.5k members</p>
          </div>
        </div>
        <p class="mt-4 text-gray-600 dark:text-gray-400">A community for classical piano enthusiasts to share scores, tips, and experiences.</p>
        <div class="mt-6 flex items-center justify-between">
          <a href="{{ route('community.chat') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
            Join Community
          </a>
          <div class="flex -space-x-2">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?1" alt="Member">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?2" alt="Member">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?3" alt="Member">
            <div class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800 bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
              <span class="text-xs text-gray-600 dark:text-gray-400">+12</span>
            </div>
          </div>
        </div>
      </div>
      <!-- More community cards... -->
      <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <div class="flex items-center space-x-4">
          <div class="h-16 w-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
            <i data-lucide="music" class="h-8 w-8 text-blue-600 dark:text-blue-300"></i>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Classical Piano</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">1.5k members</p>
          </div>
        </div>
        <p class="mt-4 text-gray-600 dark:text-gray-400">A community for classical piano enthusiasts to share scores, tips, and experiences.</p>
        <div class="mt-6 flex items-center justify-between">
          <a href="{{ route('community.chat') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
            Join Community
          </a>
          <div class="flex -space-x-2">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?1" alt="Member">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?2" alt="Member">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?3" alt="Member">
            <div class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800 bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
              <span class="text-xs text-gray-600 dark:text-gray-400">+12</span>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <div class="flex items-center space-x-4">
          <div class="h-16 w-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
            <i data-lucide="music" class="h-8 w-8 text-blue-600 dark:text-blue-300"></i>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Classical Piano</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">1.5k members</p>
          </div>
        </div>
        <p class="mt-4 text-gray-600 dark:text-gray-400">A community for classical piano enthusiasts to share scores, tips, and experiences.</p>
        <div class="mt-6 flex items-center justify-between">
          <a href="{{ route('community.chat') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
            Join Community
          </a>
          <div class="flex -space-x-2">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?1" alt="Member">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?2" alt="Member">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?3" alt="Member">
            <div class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800 bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
              <span class="text-xs text-gray-600 dark:text-gray-400">+12</span>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <div class="flex items-center space-x-4">
          <div class="h-16 w-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
            <i data-lucide="music" class="h-8 w-8 text-blue-600 dark:text-blue-300"></i>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Classical Piano</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">1.5k members</p>
          </div>
        </div>
        <p class="mt-4 text-gray-600 dark:text-gray-400">A community for classical piano enthusiasts to share scores, tips, and experiences.</p>
        <div class="mt-6 flex items-center justify-between">
          <a href="{{ route('community.chat') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
            Join Community
          </a>
          <div class="flex -space-x-2">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?1" alt="Member">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?2" alt="Member">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?3" alt="Member">
            <div class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800 bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
              <span class="text-xs text-gray-600 dark:text-gray-400">+12</span>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <div class="flex items-center space-x-4">
          <div class="h-16 w-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
            <i data-lucide="music" class="h-8 w-8 text-blue-600 dark:text-blue-300"></i>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Classical Piano</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">1.5k members</p>
          </div>
        </div>
        <p class="mt-4 text-gray-600 dark:text-gray-400">A community for classical piano enthusiasts to share scores, tips, and experiences.</p>
        <div class="mt-6 flex items-center justify-between">
          <a href="{{ route('community.chat') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
            Join Community
          </a>
          <div class="flex -space-x-2">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?1" alt="Member">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?2" alt="Member">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?3" alt="Member">
            <div class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800 bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
              <span class="text-xs text-gray-600 dark:text-gray-400">+12</span>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <div class="flex items-center space-x-4">
          <div class="h-16 w-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
            <i data-lucide="music" class="h-8 w-8 text-blue-600 dark:text-blue-300"></i>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Classical Piano</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">1.5k members</p>
          </div>
        </div>
        <p class="mt-4 text-gray-600 dark:text-gray-400">A community for classical piano enthusiasts to share scores, tips, and experiences.</p>
        <div class="mt-6 flex items-center justify-between">
          <a href="{{ route('community.chat') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
            Join Community
          </a>
          <div class="flex -space-x-2">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?1" alt="Member">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?2" alt="Member">
            <img class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800" src="https://picsum.photos/32/32?3" alt="Member">
            <div class="h-8 w-8 rounded-full border-2 border-white dark:border-gray-800 bg-gray-100 dark:bg-gray-700 flex items-center justify-center">
              <span class="text-xs text-gray-600 dark:text-gray-400">+12</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Load More Button -->
    <div class="flex justify-center mt-8 p-6">
      <button class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-700 dark:text-gray-300">
        Load More
      </button>
    </div>
  </div>


@endsection