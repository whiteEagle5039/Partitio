@extends('base')
@section('title', 'Partitio | Profil')
@section('container')
  <!-- Profile Header -->
  <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
    <div class="container mx-auto px-4 py-8">
      <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6">
        <img src="https://github.com/shadcn.png" alt="Profile" class="h-24 w-24 rounded-full">
        <div>
          <h1 class="text-3xl font-bold text-gray-900 dark:text-white">John Doe</h1>
          <p class="text-gray-600 dark:text-gray-400">Piano enthusiast • Music teacher</p>
          <div class="mt-2 flex items-center space-x-4">
            <span class="text-sm text-gray-600 dark:text-gray-400">
              <i data-lucide="users" class="inline h-4 w-4 mr-1"></i>
              250 followers
            </span>
            <span class="text-sm text-gray-600 dark:text-gray-400">
              <i data-lucide="music" class="inline h-4 w-4 mr-1"></i>
              15 compositions
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Profile Content -->
  <div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Sidebar -->
      <div class="md:col-span-1">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
          <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Virtual Wallet</h2>
          <div class="flex items-center justify-between mb-4">
            <span class="text-gray-600 dark:text-gray-400">Balance</span>
            <span class="text-2xl font-bold text-gray-900 dark:text-white">$120.50</span>
          </div>
          <button class="w-full px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">Add Funds</button>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mt-6">
          <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Communities</h2>
          <ul class="space-y-4">
            <li class="flex items-center space-x-3">
              <div class="h-10 w-10 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
                <i data-lucide="music" class="h-5 w-5 text-blue-600 dark:text-blue-300"></i>
              </div>
              <span class="text-gray-900 dark:text-white">Classical Piano</span>
            </li>
            <!-- More communities... -->
          </ul>
        </div>
      </div>

      <!-- Main Content -->
      <div class="md:col-span-2">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
          <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Recent Activity</h2>
          <div class="space-y-4">
            <!-- Activity Item -->
            <div class="flex items-start space-x-4">
              <div class="h-10 w-10 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
                <i data-lucide="music" class="h-5 w-5 text-blue-600 dark:text-blue-300"></i>
              </div>
              <div>
                <p class="text-gray-900 dark:text-white">
                  Uploaded a new composition: "Summer Breeze"
                </p>
                <span class="text-sm text-gray-600 dark:text-gray-400">2 hours ago</span>
              </div>
            </div>
            <!-- More activity items... -->
          </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mt-6">
          <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">My Compositions</h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Composition Card -->
            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
              <div class="flex items-center justify-between mb-2">
                <h3 class="font-semibold text-gray-900 dark:text-white">Summer Breeze</h3>
                <button class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                  <i data-lucide="download" class="h-5 w-5"></i>
                </button>
              </div>
              <p class="text-sm text-gray-600 dark:text-gray-400">Piano Solo • 3:45</p>
            </div>
            <!-- More composition cards... -->
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection