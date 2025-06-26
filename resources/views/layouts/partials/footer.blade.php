<footer>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    <div class="hidden lg:grid grid-cols-3">
      <div>
        <h4>Collections</h4>
        <a href="">Smartphones</a>
        <a href="">Tablets</a>
        <a href="">Laptops</a>
      </div>
      <div>
        <h4>Details</h4>
        <a href="">FAQs</a>
        <a href="">About Us</a>
        <a href="">Contact Us</a>
      </div>
      <div>
        <h4>Collections</h4>
        <a href="">Smartphones</a>
        <a href="">Tablets</a>
        <a href="">Laptops</a>
      </div>
    </div>
    <div>

    </div>
    <div>
      <x-form.form method="POST" action="/">
        @method('POST')
        <div class="relative">
          <input type="email">
          <x-form.button class="absolute">
            <i class="fas fa-arrow-right"></i>
          </x-form.button>
        </div>
      </x-form.form>
    </div>
  </div>
</footer>
