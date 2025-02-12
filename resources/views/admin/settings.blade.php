@extends('admin')
@section('title', 'Admins | Settings')
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


      <!-- Settings Content -->
      <div class="p-6">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Settings</h2>

        <!-- Settings Sections -->
        <div class="space-y-6">
          <!-- General Settings -->
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">General Settings</h3>
            <div class="space-y-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                  Platform Name
                </label>
                <input type="text" value="Music Platform"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                              bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                  Contact Email
                </label>
                <input type="email" value="support@musicplatform.com"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                              bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                  Platform Logo
                </label>
                <div class="flex items-center space-x-4">
                  <img src="https://github.com/shadcn.png" alt="Logo" class="h-12 w-12 rounded-lg">
                  <button class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg">
                    Change Logo
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Email Settings -->
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Email Settings</h3>
            <div class="space-y-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                  SMTP Host
                </label>
                <input type="text" value="smtp.example.com"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                              bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                  SMTP Port
                </label>
                <input type="number" value="587"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                              bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                  Email Templates
                </label>
                <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                             bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                  <option>Welcome Email</option>
                  <option>Password Reset</option>
                  <option>Course Completion</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Payment Settings -->
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Payment Settings</h3>
            <div class="space-y-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                  Currency
                </label>
                <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                             bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                  <option>USD ($)</option>
                  <option>EUR (€)</option>
                  <option>GBP (£)</option>
                </select>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                  Payment Gateway
                </label>
                <select class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                             bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
                  <option>Stripe</option>
                  <option>PayPal</option>
                  <option>Square</option>
                </select>
              </div>
              <div class="flex items-center">
                <input type="checkbox" id="test-mode" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="test-mode" class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                  Enable Test Mode
                </label>
              </div>
            </div>
          </div>

          <!-- Security Settings -->
          <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Security Settings</h3>
            <div class="space-y-4">
              <div class="flex items-center justify-between">
                <div>
                  <h4 class="text-sm font-medium text-gray-900 dark:text-white">Two-Factor Authentication</h4>
                  <p class="text-sm text-gray-600 dark:text-gray-400">Require 2FA for admin accounts</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                  <input type="checkbox" class="sr-only peer">
                  <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 
                              peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer 
                              dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white 
                              after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white 
                              after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 
                              after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                </label>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                  Session Timeout (minutes)
                </label>
                <input type="number" value="30"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                              bg-white dark:bg-gray-800 text-gray-900 dark:text-white">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                  Password Policy
                </label>
                <div class="space-y-2">
                  <div class="flex items-center">
                    <input type="checkbox" id="min-length" checked class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="min-length" class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                      Minimum 8 characters
                    </label>
                  </div>
                  <div class="flex items-center">
                    <input type="checkbox" id="special-chars" checked class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="special-chars" class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                      Require special characters
                    </label>
                  </div>
                  <div class="flex items-center">
                    <input type="checkbox" id="numbers" checked class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="numbers" class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                      Require numbers
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Save Button -->
          <div class="flex justify-end">
            <button class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
              Save Changes
            </button>
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
