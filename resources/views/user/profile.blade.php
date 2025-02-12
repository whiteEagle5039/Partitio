@extends('base')
@section('title', 'Partitio | Profil')
@section('container')
  <!-- Profile Header -->
  <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6 w-full">
            <!-- Avatar -->
            <img src="https://github.com/shadcn.png" alt="Profile" class="h-24 w-24 rounded-full">
            
            <!-- Infos Utilisateur -->
            <div class="flex-1">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">{{ $user->name }}</h1>
                <p class="text-gray-600 dark:text-gray-400">@ {{$user->username }}</p>
                <p class="text-gray-600 dark:text-gray-400">{{ $user->bio }} • {{ $user->location }}</p>
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

            <!-- Bouton Edit -->
            <div class="ml-auto">
                <a href="" 
                   class="flex items-center space-x-2 px-4 py-2 hover:bg-gray-500 text-white text-sm font-medium rounded-lg shadow-md transition">
                    <!-- SVG Edit -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 20h9" />
                        <path d="M16.5 3.5a2.1 2.1 0 1 1 3 3L7 19l-4 1 1-4Z" />
                    </svg>
                    <span>Edit Profil</span>
                </a>
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

        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 mt-6  hover:bg-gray-500">
          <form method="POST" class="flex items-center justify-center space-x-2">
            @csrf
            @method('DELETE')
              <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.00195 7C8.01406 4.82497 8.11051 3.64706 8.87889 2.87868C9.75757 2 11.1718 2 14.0002 2H15.0002C17.8286 2 19.2429 2 20.1215 2.87868C21.0002 3.75736 21.0002 5.17157 21.0002 8V16C21.0002 18.8284 21.0002 20.2426 20.1215 21.1213C19.2429 22 17.8286 22 15.0002 22H14.0002C11.1718 22 9.75757 22 8.87889 21.1213C8.11051 20.3529 8.01406 19.175 8.00195 17" stroke="#c0392b" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M8 19.5C5.64298 19.5 4.46447 19.5 3.73223 18.7678C3 18.0355 3 16.857 3 14.5V9.5C3 7.14298 3 5.96447 3.73223 5.23223C4.46447 4.5 5.64298 4.5 8 4.5" stroke="#c0392b" stroke-width="1.5"/>
              <path d="M15 12L6 12M6 12L8 14M6 12L8 10" stroke="#c0392b" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <button class="text-red-500">logout</button>
          </form>
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