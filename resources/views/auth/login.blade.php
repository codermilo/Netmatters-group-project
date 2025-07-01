<x-guest-layout>
  <div class="mb-10 text-center">
   
<h1 class="text-4xl font-extrabold uppercase text-[#0c183c] text-center mb-4 font-[aesthet-nova] antialiased leading-none">
  Bring me your best tech
</h1>


</h1>

    <p class="mt-3 text-lg text-gray-600">Log in to start building the future.</p>
  </div>

  <!-- Session Status -->
  <x-auth-session-status class="mb-6" :status="session('status')" />

  <form method="POST" action="{{ route('login') }}" class="space-y-6">
      @csrf

      <!-- Email Address -->
      <div>
          <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700" />
          <x-text-input
            id="email"
            type="email"
            name="email"
            :value="old('email')"
            required
            autofocus
            autocomplete="username"
            class="mt-1 block w-full rounded-md border border-gray-300 px-4 py-3 shadow-sm placeholder-gray-400 focus:border-indigo-600 focus:ring-indigo-600 focus:ring-2 transition duration-150"
          />
          <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-600" />
      </div>

      <!-- Password -->
      <div>
          <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-700" />
          <x-text-input
            id="password"
            type="password"
            name="password"
            required
            autocomplete="current-password"
            class="mt-1 block w-full rounded-md border border-gray-300 px-4 py-3 shadow-sm placeholder-gray-400 focus:border-indigo-600 focus:ring-indigo-600 focus:ring-2 transition duration-150"
          />
          <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-600" />
      </div>

      <!-- Remember Me -->
      <div class="flex items-center">
          <input
            id="remember_me"
            type="checkbox"
            name="remember"
            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
          />
          <label for="remember_me" class="ml-2 block text-sm text-gray-900 select-none">
              {{ __('Remember me') }}
          </label>
      </div>

      <!-- Forgot Password -->
      <div class="text-sm">
        @if (Route::has('password.request'))
            <a
              href="{{ route('password.request') }}"
              class="text-indigo-600 hover:text-indigo-800 focus:outline-none focus:underline transition"
            >
                {{ __('Forgot your password?') }}
            </a>
        @endif
      </div>


     <!-- Login Button -->
<div class="pt-2">
  <x-primary-button
    class="w-full inline-flex justify-center items-center rounded-[25px] bg-[#fcb128] px-[50px] py-[15px]
     text-[18px] font-extrabold text-[#0c183c] uppercase hover:bg-[#0c183c] hover:text-white transition-colors duration-300"
  >
    {{ __('Log in') }}
  </x-primary-button>
</div>
<!-- Create Account Link -->
<div class="text-center pt-6">
  <p class="text-sm text-gray-600">
    Don't have an account?
    <a
      href="{{ route('register') }}"
      class="font-semibold text-indigo-600 hover:text-indigo-800 transition"
    >
      Create one
    </a>
  </p>
</div>

  </form>
</x-guest-layout>
