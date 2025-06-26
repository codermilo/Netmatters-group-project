<form x-data="{ submitting: false }" @submit="submitting = true">
  @csrf

  @if ($attributes->get('method', 'GET') !== 'GET')
      @method($attributes->get('method'))
  @endif

  {{ $slot }}
</form>