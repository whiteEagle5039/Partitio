
@extends('admin')
@section('title', 'Admins | Dashboard')
@section('container')
    <!-- Main Content -->
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

      <!-- Dashboard Content -->
      <div class="p-6">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Users</p>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">1,234</p>
              </div>
              <div class="h-12 w-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                <i data-lucide="users" class="h-6 w-6 text-blue-600 dark:text-blue-300"></i>
              </div>
            </div>
            <p class="mt-2 text-sm text-green-600">
              <i data-lucide="trending-up" class="inline h-4 w-4"></i>
              <span class="ml-1">12% increase</span>
            </p>
          </div>

          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Songs</p>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">567</p>
              </div>
              <div class="h-12 w-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center">
                <i data-lucide="music" class="h-6 w-6 text-purple-600 dark:text-purple-300"></i>
              </div>
            </div>
            <p class="mt-2 text-sm text-green-600">
              <i data-lucide="trending-up" class="inline h-4 w-4"></i>
              <span class="ml-1">8% increase</span>
            </p>
          </div>

          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Active Communities</p>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">89</p>
              </div>
              <div class="h-12 w-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center">
                <i data-lucide="users-2" class="h-6 w-6 text-green-600 dark:text-green-300"></i>
              </div>
            </div>
            <p class="mt-2 text-sm text-green-600">
              <i data-lucide="trending-up" class="inline h-4 w-4"></i>
              <span class="ml-1">15% increase</span>
            </p>
          </div>

          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
              <div>
                <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Revenue</p>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">$12,345</p>
              </div>
              <div class="h-12 w-12 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center">
                <i data-lucide="wallet" class="h-6 w-6 text-yellow-600 dark:text-yellow-300"></i>
              </div>
            </div>
            <p class="mt-2 text-sm text-green-600">
              <i data-lucide="trending-up" class="inline h-4 w-4"></i>
              <span class="ml-1">23% increase</span>
            </p>
          </div>
        </div>

        <!-- Charts -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">User Growth</h3>
            <canvas id="userGrowthChart" height="300"></canvas>
          </div>

          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Content Distribution</h3>
            <canvas id="contentDistributionChart" height="300"></canvas>
          </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Recent Activity</h3>
          <div class="space-y-4">
            <div class="flex items-start space-x-4">
              <div class="h-10 w-10 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
                <i data-lucide="user-plus" class="h-5 w-5 text-blue-600 dark:text-blue-300"></i>
              </div>
              <div>
                <p class="text-gray-900 dark:text-white">New user registration: John Doe</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">2 minutes ago</p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="h-10 w-10 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center">
                <i data-lucide="music" class="h-5 w-5 text-purple-600 dark:text-purple-300"></i>
              </div>
              <div>
                <p class="text-gray-900 dark:text-white">New song uploaded: "Summer Breeze"</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">15 minutes ago</p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="h-10 w-10 bg-yellow-100 dark:bg-yellow-900 rounded-full flex items-center justify-center">
                <i data-lucide="alert-triangle" class="h-5 w-5 text-yellow-600 dark:text-yellow-300"></i>
              </div>
              <div>
                <p class="text-gray-900 dark:text-white">Content reported: Inappropriate comment</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">1 hour ago</p>
              </div>
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

    // Charts
    const userGrowthCtx = document.getElementById('userGrowthChart').getContext('2d');
    new Chart(userGrowthCtx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
          label: 'Users',
          data: [500, 800, 1200, 1500, 2000, 2500],
          borderColor: '#3b82f6',
          tension: 0.4
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false
      }
    });

    const contentDistributionCtx = document.getElementById('contentDistributionChart').getContext('2d');
    new Chart(contentDistributionCtx, {
      type: 'doughnut',
      data: {
        labels: ['Songs', 'Sheet Music', 'Courses', 'Communities'],
        datasets: [{
          data: [300, 150, 100, 200],
          backgroundColor: ['#3b82f6', '#8b5cf6', '#10b981', '#f59e0b']
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false
      }
    });
  </script>
@endsection