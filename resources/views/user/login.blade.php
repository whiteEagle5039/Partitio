@extends('baseic')
@section('title', 'Partitio | LOGIN ')
@section('container')
<body class="bg-gray-50 dark:bg-gray-900">
    @error("password")
    <p>{{ "Mot de pass Invalid" }}</p>
    @enderror
    @error("email")
      <p>{{ "Email invalid" }}</p> 
    @enderror
    @if(session('inscription'))
    <p>{{session('inscription')}}</p>
    @endif

    <div class="min-h-screen flex items-center justify-center px-4">
      <div class="max-w-md w-full">
        <!-- Logo -->
        <div class="text-center mb-8">
          <div class=" max-w-md w-full flex items-center justify-center">
            <img class="w-16 h-16" src="{{ asset('img/logo1_18_151333.png') }}" alt="">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Partitio</h1>
          </div>
          <p class="mt-2 text-gray-600 dark:text-gray-400">Welcome back! Please login to your account.</p>
        </div>

        <!-- Login Form -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
          <form class="space-y-4" method="POST" autocomplete="off">
            @csrf
            @method('PATCH')
            <div>
              <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                Email
              </label>
              <input type="email" required
                     class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                            bg-white dark:bg-gray-800 text-gray-900 dark:text-white" name="email" value="{{ old('email') }}">
            </div>
            
            <div>
              <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                Password
              </label>
              <input type="password" required
                     class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                            bg-white dark:bg-gray-800 text-gray-900 dark:text-white" name="password">
            </div>
  
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <input type="checkbox" id="remember"
                       class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label for="remember" class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                  Remember me
                </label>
              </div>
              <a href="#" class="text-sm text-blue-600 hover:text-blue-700 dark:text-blue-400">
                Forgot password?
              </a>
            </div>
  
            <button type="submit"
                    class="w-full px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
              Sign in
            </button>
          </form>
  
          <div class="mt-6 text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Don't have an account?
              <a href="{{ route('auth.inscription') }}" class="text-blue-600 hover:text-blue-700 dark:text-blue-400">
                Sign up
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </body>

@endsection
