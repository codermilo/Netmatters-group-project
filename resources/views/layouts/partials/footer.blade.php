<footer>
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    <div class="hidden lg:grid grid-cols-3">
      <ul>
        <li><a href=""><h4>Collections</h4></a></li>
        <li><a href="">Smartphones</a></li>
        <li><a href="">Tablets</a></li>
        <li><a href="">Laptops</a></li>
      </ul>
      <ul>
        <li><a href=""><h4>Details</h4></a></li>
        <li><a href="">FAQs</a></li>
        <li><a href="">About Us</a></li>
        <li><a href="">Contact Us</a></li>
      </ul>
      <ul>
        <li><a href=""><h4>Account</h4></a></li>
        <li><a href="">Profile</a></li>
        <li><a href="">Orders</a></li>
        <li><a href="">Policy</a></li>
      </ul>
    </div>
    <div>
      <h3>
        Looking for a new product or have some feedback?
      </h3>
      <a href="#">Feedback</a>
      <a href="#">Tech Request</a>
    </div>
    <div>
      <h2>Subscribe for Tech Deals</h2>
      <x-form.form method="POST" action="/">
        @method('POST')
        <div class="relative">
          <input type="email" class="w-full" placeholder="Email address">
          <x-form.button class="absolute cursor-pointer top-[50%] right-[0] transform [transform:translateY(-50%)] pr-2">
            <i class="fas fa-arrow-right"></i>
          </x-form.button>
        </div>
      </x-form.form>
    </div>
  </div>
</footer>
