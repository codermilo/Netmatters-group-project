<footer class="bg-[#F5F5F7] border-t-2">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[1fr_1.25fr_1fr]">

    <div class="hidden lg:flex flex-col justify-between">

      <div class="grid grid-cols-3 flex justify-items-center items-center gap-2 pt-10">
        <ul>
          <li><a href=""><h4 class="font-bold text-sm">Collections</h4></a></li>
          <li><a href="" class="text-sm">Smartphones</a></li>
          <li><a href="" class="text-sm">Tablets</a></li>
          <li><a href="" class="text-sm">Laptops</a></li>
        </ul>
        <ul>
          <li><a href=""><h4 class="font-bold text-sm">Details</h4></a></li>
          <li><a href="" class="text-sm">FAQs</a></li>
          <li><a href="" class="text-sm">About Us</a></li>
          <li><a href="" class="text-sm">Contact Us</a></li>
        </ul>
        <ul>
          <li><a href=""><h4 class="font-bold text-sm">Account</h4></a></li>
          <li><a href="" class="text-sm">Profile</a></li>
          <li><a href="" class="text-sm">Orders</a></li>
          <li><a href="" class="text-sm">Policy</a></li>
        </ul>
      </div>

      <div class="flex justify-between pr-4 py-4 border-t-2 items-center">
        <a href="mailto:info@techcompany.com">info@techcompany.com</a>
        <div class="flex gap-2">
          <a href="#"><i class="fa-brands fa-instagram text-2xl"></i></a>
          <a href="#"><i class="fa-brands fa-github text-2xl"></i></a>
        </div>
      </div>

    </div>

    <div class="hidden md:flex justify-items-center flex-col items-center gap-2 md:border-r-2 lg:border-l-2">
      <div class="w-full aspect-[2/1] overflow-hidden">
        <img src="images/pexels-hardy-iyank-163347828-10853536.webp" alt="Modern Tech Collection"
        class="object-cover w-full h-full">
      </div>
      <div class="p-2">
        <h3>
          Looking for a new product or have some feedback?
        </h3>
        <div class="flex justify-around">
          <a href="#">Feedback <i class="fas fa-arrow-right"></i></a>
          <a href="#">Tech Request <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    <div class="flex justify-items-center flex-col items-center gap-5 py-10 px-6">
      <h2 class="font-bold text-4xl w-[90%] text-center">Subscribe for<br>Tech Deals</h2>
      <x-form.form method="POST" action="/" class="max-w-[400px] w-[90%]">
        @method('POST')
        <div class="relative">
          <input type="email" name="email" autocomplete="off" placeholder="Email address"
            class="w-full rounded-md py-2 pr-7 border-0 shadow-md focus:outline-0 focus:ring-0 focus-visible:outline-0 focus-visible:ring-0">
          <x-form.button class="absolute cursor-pointer top-[50%] right-[0] transform -translate-y-1/2 pr-2">
            <i class="fas fa-arrow-right"></i>
          </x-form.button>
        </div>
      </x-form.form>
    </div>

    <div class="flex md:hidden justify-items-center items-center gap-2 md:border-r-2 lg:border-l-2 border-t-2">
      <div class="h-[150px] w-[150px] aspect-square">
        <img src="images/pexels-hardy-iyank-163347828-10853536.webp" alt="Modern Tech Collection"
        class="object-cover w-full h-full">
      </div>
      <div class="p-2 grow flex flex-col justify-items-center items-center gap-2">
        <h3 class="text-xl font-bold text-center">
          Looking for a new product or have some feedback?
        </h3>
        <div class="flex flex-col items-center">
          <a href="#">Feedback <i class="fas fa-arrow-right"></i></a>
          <a href="#">Tech Request <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

  </div>
  <div class="border-t-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2">
      <small>&#169; 2025 Tech Company - Helping you fulfill your tech needs since now. All Rights Reserved.</small>
    </div>
  </div>
</footer>
