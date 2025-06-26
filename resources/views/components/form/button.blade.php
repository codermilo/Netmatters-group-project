<button :disabled="submitting" 
  {{ $attributes->merge(['class' => '']) }}
  >
  {{ $slot }}
</button>