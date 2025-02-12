<aside class="w-64 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700">
    <div class="p-4">
      <h1 class="text-xl font-bold text-gray-900 dark:text-white">Admin Panel</h1>
    </div>
    <nav class="mt-4">
      <a href="{{ route('admins.dashboard') }}" class="flex items-center px-4 py-2 bg-blue-50 dark:bg-blue-900 text-blue-700 dark:text-blue-200">
        <i data-lucide="layout-dashboard" class="h-5 w-5 mr-2"></i>
        Dashboard
      </a>
      <a href="{{ route('admins.users') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
        <i data-lucide="users" class="h-5 w-5 mr-2"></i>
        Users
      </a>
      <a href="{{ route('admins.songs') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
        <i data-lucide="music" class="h-5 w-5 mr-2"></i>
        Songs
      </a>
      <a href="{{ route('admins.communities') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
        <i data-lucide="users-2" class="h-5 w-5 mr-2"></i>
        Communities
      </a>
      <a href="{{ route('admins.transactions') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
        <i data-lucide="wallet" class="h-5 w-5 mr-2"></i>
        Transactions
      </a>
      <a href="{{ route('admins.courses') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
        <i data-lucide="book-open" class="h-5 w-5 mr-2"></i>
        Courses
      </a>
      <a href="{{ route('admins.settings') }}" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
        <i data-lucide="settings" class="h-5 w-5 mr-2"></i>
        Settings
      </a>
      <a href="moderation.html" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
        <i data-lucide="shield" class="h-5 w-5 mr-2"></i>
        Moderation
      </a>
      <a href="reports.html" class="flex items-center px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
        <i data-lucide="bar-chart" class="h-5 w-5 mr-2"></i>
        Reports
      </a>
    </nav>
</aside>