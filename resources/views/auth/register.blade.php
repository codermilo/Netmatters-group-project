<x-guest-layout>
  <div class="mb-10 text-center">
    <h1 class="text-4xl font-extrabold uppercase text-[#0c183c] text-center mb-4 font-[aesthet-nova] antialiased leading-none">
  Bring me your best tech
</h1>
    <p class="mt-3 text-lg text-gray-600">Register to join the future.</p>
  </div>

  <!-- Session Status -->
  <x-auth-session-status class="mb-6" :status="session('status')" />

  <form method="POST" action="{{ route('register') }}" class="space-y-6">
      @csrf

      <!-- Name -->
      <div>
          <x-input-label for="name" :value="__('Name')" />
          <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>

      <!-- Email Address -->
      <div>
          <x-input-label for="email" :value="__('Email')" />
          <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <!-- Password -->
      <div>
          <x-input-label for="password" :value="__('Password')" />
          <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <!-- Confirm Password -->
      <div>
          <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
          <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
      </div>

      <!-- Actions -->
      <div class="flex items-center justify-between pt-4">
          <a class="text-sm text-indigo-600 hover:underline" href="{{ route('login') }}">
              {{ __('Already registered?') }}
          </a>
          <x-primary-button class="ml-4">
              {{ __('Register') }}
          </x-primary-button>
      </div>
  </form>
</x-guest-layout>
