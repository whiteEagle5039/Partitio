
@extends('baseic')
@section('title', 'Partitio | REGISTER ')
@section('container')
  @error("password")
    <p>{{ "Mot de pass Invalid" }}</p>
  @enderror
  @error("name")
    <p>{{ " Nom invalid" }}</p>
  @enderror
  @error("email")
    <p>{{ " email invalid" }}</p>
  @enderror
<div class="min-h-screen flex items-center justify-center px-4">
  <div class="max-w-md w-full">
    <!-- Logo -->
    <div class="text-center mb-8">
      <div class="maw-w-md w-full flex items-center justify-center ">
        <img class="w-16 h-16 " src="{{ asset('img/logo1_18_151333.png') }}" alt="logo">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Partitio</h1>
      </div>
      <p class="mt-2 text-gray-600 dark:text-gray-400">Create your account and start sharing music</p>
    </div>

    <!-- Registration Form -->

    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
      <form class="space-y-4" method="POST">
        @csrf
        @method('PATCH')
        <div>
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
            First and last name
          </label>
          <input type="text" required
                 class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                        bg-white dark:bg-gray-800 text-gray-900 dark:text-white" name="name" value="{{ old('name') }}">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
            username
          </label>
          <input type="text" required
                 class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                        bg-white dark:bg-gray-800 text-gray-900 dark:text-white" name="username" value="{{ old('username') }}">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
            Email
          </label>
          <input type="email" required
                 class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                        bg-white dark:bg-gray-800 text-gray-900 dark:text-white" name="email" value="{{ old('email') }}">
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" id="password-error">
            Password
          </label>
          <input type="password" id="password" required
                 class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                        bg-white dark:bg-gray-800 text-gray-900 dark:text-white" >
        </div>
        
        <div>
          <label id="confirm-password-error" for="confirm-password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
            Confirm Password
          </label>
          <input type="password" id="confirm-password" required
                 class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg 
                        bg-white dark:bg-gray-800 text-gray-900 dark:text-white" name="password">
        </div>
        

        <div class="flex items-center">
          <input type="checkbox" id="terms" required
                 class="h-4 w-4 text-blue-600 border-gray-300 rounded">
          <label for="terms" class="ml-2 text-sm text-gray-600 dark:text-gray-400">
            I agree to the
            <a href="#" class="text-blue-600 hover:text-blue-700 dark:text-blue-400">Terms of Service</a>
            and
            <a href="#" class="text-blue-600 hover:text-blue-700 dark:text-blue-400">Privacy Policy</a>
          </label>
        </div>

        <button type="submit"
                class="w-full px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg" id="sub">
          Create Account
        </button>
      </form>

      <div class="mt-6 text-center">
        <p class="text-sm text-gray-600 dark:text-gray-400">
          Already have an account?
          <a href="{{ route('auth.login') }}" class="text-blue-600 hover:text-blue-700 dark:text-blue-400">
            Sign in
          </a>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', () => {
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm-password');
    const passwordError = document.getElementById('password-error');
    const confirmPasswordError = document.getElementById('confirm-password-error');
    const submitButton = document.getElementById('sub');
    function validatePasswords() {
      const password = passwordInput.value.trim();
      const confirmPassword = confirmPasswordInput.value.trim();

      // Réinitialiser les messages d'erreur
      passwordError.textContent = 'Password';
      confirmPasswordError.textContent = 'Confirm Password';

      if (password.length < 8) {
        passwordError.textContent = '∙ Le mot de passe doit contenir au moins 8 caractères.';
        return false;
      }

      if (!/[A-Z]/.test(password)) {
        passwordError.textContent = '∙ Le mot de passe doit contenir au moins une majuscule.';
        return false;
      }

      if (!/[0-9]/.test(password)) {
        passwordError.textContent = '∙ Le mot de passe doit contenir au moins un chiffre.';
        return false;
      }
      passwordError.textContent = 'Password ';

      if (password !== confirmPassword) {
        confirmPasswordError.textContent = '∙ Les mots de passe ne correspondent pas.';
        return false;
      }
      confirmPasswordError.textContent = 'Password Verified';
      return true;
    }

    // Écouter les événements "input" pour valider en temps réel
    passwordInput.addEventListener('input', toggleSubmitButton);
    confirmPasswordInput.addEventListener('input', toggleSubmitButton);

    function toggleSubmitButton() {
    if (validatePasswords()) {
      submitButton.removeAttribute('disabled');
      submitButton.classList.remove('opacity-60', 'cursor-not-allowed'); // Styliser pour indiquer qu'il est actif
    } else {
      submitButton.setAttribute('disabled', 'true');
      submitButton.classList.add('opacity-60', 'cursor-not-allowed'); // Styliser pour indiquer qu'il est inactif
    }
  }

});

  </script>
@endsection
