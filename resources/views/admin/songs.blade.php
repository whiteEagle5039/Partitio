@extends('admin')
@section('title', 'Admins | Songs')
@section('container')
    <main class="flex-1 overflow-auto">
      <!-- Top Navigation -->
      <header class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
        <div class="flex items-center justify-between px-4 py-3">
          <div class="flex items-center">
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
              <i data-lucide="menu" class="h-6 w-6"></i>
            </button>
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white ml-2">Dashboard</h2>
          </div>
          <div class="flex items-center space-x-4">
            <button id="theme-toggle" class="p-2 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
              <i data-lucide="sun" class="hidden dark:block h-5 w-5"></i>
              <i data-lucide="moon" class="block dark:hidden h-5 w-5"></i>
            </button>
            <div class="relative">
              <button class="p-2 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                <i data-lucide="bell" class="h-5 w-5"></i>
                <span class="absolute top-0 right-0 h-2 w-2 bg-red-500 rounded-full"></span>
              </button>
            </div>
            <div class="flex items-center">
              <img src="https://github.com/shadcn.png" alt="Admin" class="h-8 w-8 rounded-full">
              <span class="ml-2 text-sm font-medium text-gray-900 dark:text-white">Admin</span>
            </div>
          </div>
        </div>
      </header>

      <!-- Songs Content -->
      <div class="p-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Songs Management</h2>
          <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg flex items-center">
            <i data-lucide="plus" class="h-5 w-5 mr-2"></i>
            Add Song
          </button>
        </div>

        <!-- Filters and Search -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 mb-6">
          <div class="flex flex-col md:flex-row md:items-center md:space-x-4">
            <div class="flex-1 relative">
              <i data-lucide="search" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 h-5 w-5"></i>
              <input type="text" placeholder="Search songs..." 
                     class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                            bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
            </div>
            <div class="mt-4 md:mt-0 flex space-x-2">
              <select class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                <option>All Genres</option>
                <option>Classical</option>
                <option>Jazz</option>
                <option>Rock</option>
              </select>
              <select class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                <option>All Status</option>
                <option>Published</option>
                <option>Draft</option>
                <option>Under Review</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Songs Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Song Card -->
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
            <div class="aspect-w-16 aspect-h-9 bg-gray-100 dark:bg-gray-700">
              <img src="https://picsum.photos/400/225" alt="Song thumbnail" class="object-cover">
            </div>
            <div class="p-4">
              <div class="flex items-center justify-between mb-2">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Moonlight Sonata</h3>
                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                  Published
                </span>
              </div>
              <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">By Ludwig van Beethoven</p>
              <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                  <i data-lucide="download" class="h-4 w-4 text-gray-500"></i>
                  <span class="text-sm text-gray-600 dark:text-gray-400">1.2k</span>
                </div>
                <div class="flex space-x-2">
                  <button class="p-2 text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">
                    <i data-lucide="edit" class="h-5 w-5"></i>
                  </button>
                  <button class="p-2 text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">
                    <i data-lucide="trash-2" class="h-5 w-5"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- More song cards... -->
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex items-center justify-between">
          <div class="flex-1 flex justify-between sm:hidden">
            <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
              Previous
            </button>
            <button class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
              Next
            </button>
          </div>
          <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
              <p class="text-sm text-gray-700 dark:text-gray-300">
                Showing
                <span class="font-medium">1</span>
                to
                <span class="font-medium">9</span>
                of
                <span class="font-medium">45</span>
                results
              </p>
            </div>
            <div>
              <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                <button class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">
                  <i data-lucide="chevron-left" class="h-5 w-5"></i>
                </button>
                <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                  1
                </button>
                <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-blue-50 dark:bg-blue-900 text-sm font-medium text-blue-600 dark:text-blue-300">
                  2
                </button>
                <button class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700">
                  3
                </button>
                <button class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">
                  <i data-lucide="chevron-right" class="h-5 w-5"></i>
                </button>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
@section('scripts')
  <script>
    // Initialize Lucide icons
    lucide.createIcons();

    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const sidebar = document.querySelector('aside');
    
    mobileMenuButton.addEventListener('click', () => {
      sidebar.classList.toggle('-translate-x-full');
    });

    // Theme toggle
    const themeToggle = document.getElementById('theme-toggle');
    
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }

    themeToggle.addEventListener('click', () => {
      document.documentElement.classList.toggle('dark');
      localStorage.theme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
    });
  </script>
@endsection
