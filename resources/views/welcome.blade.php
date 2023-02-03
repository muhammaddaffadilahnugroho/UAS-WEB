<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <style type="text/tailwindcss">
    @layer utilities {
      .container {
        @apply max-w-[90%] mx-auto;
      }

      .btn {
        @apply bg-[#212121] text-white px-5 py-3 text-center;
      }  

      .btn.rounded {
        @apply rounded-full;
      }

      .home::before {
      }

      .active {
        @apply block;
      }
    }
  </style>
  <title>Mangcoding Store</title>
</head>

<body>
  <header class="">
    <nav class="container relative flex items-center justify-between py-5">
      <a href="">
        <img src="./assets/logo.svg" alt="">
      </a>

      <div class="flex-1 hidden ml-12 space-x-4 md:block">
        <a href="">Home</a>
        <a href="">About Us</a>
        <a href="">Shop</a>
        <a href="">Contact</a>
      </div>

      <div class="flex items-center hidden space-x-5 md:flex">
        <a href="">
          <img src="./assets/cart.svg" alt="">
        </a>
        <a href="">
          <img src="./assets/search.svg" alt="">
        </a>
        @if (Route::has('login'))
        @auth
        <a href="{{ url('/dashboard') }}" class="btn">Dasboard</a>
        @else
          <a href="{{ route('login') }}" class="btn">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn">Registration</a>
            @endif
        @endauth
        @endif
      </div>

      <a href="#" class="hamburger md:hidden">
        <img src="./assets/hamburger.svg" alt="">
      </a>

      <div
        class="absolute inset-x-0 z-40 hidden p-4 bg-white border border-gray-300 rounded-lg shadow-lg popup top-10 right-12 md:hidden">
        <div class="flex space-x-5">
          <div class="flex items-center w-full h-full px-3 mb-4 space-x-1 border border-gray-400 rounded-full">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="8.36556" cy="8.36458" r="7.03353" stroke="#070D13" stroke-width="2" />
              <rect x="13.8848" y="13" width="6.56463" height="1.25023" rx="0.625113" transform="rotate(45 13.8848 13)"
                fill="#070D13" />
            </svg>
            <input type="text" class="w-full border-none" placeholder="Search ..." />
          </div>
          <a href="">
            <img src="./assets/cart.svg" alt="">
          </a>
        </div>

        <div class="flex flex-col space-y-4">
          <a href="">Home</a>
          <a href="">About Us</a>
          <a href="">Shop</a>
          <a href="">Contact</a>
        </div>

        <div class="flex flex-col mt-4">
          <a href="" class="btn">Registration</a>
        </div>
      </div>
    </nav>
  </header>

  <section class="container flex flex-col items-center pt-8 pb-28 lg:flex-row">
    <div class="flex-1 space-y-8">
      <span class="rounded btn">Mangcoding Store</span>
      <h1 class="relative font-bold leading-none text-7xl">
        Get the right Furniture For your
        <span class="relative home">Home</span>
      </h1>
      <p class="text-xl text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget gravida leo, nec iaculis diam.
      </p>
      <a href="" class="inline-block btn"> Shop Now</a>
    </div>

    <div class="flex flex-1 hidden space-x-4 lg:flex">
      <img class="w-full" src="./assets/chair-1.png" alt="">
      <img class="relative w-full -bottom-14" src="./assets/chair-2.png" alt="">
    </div>
  </section>


  <section class="bg-[#212121] py-24">
    @include('layouts.blog')
  </section>

  <div class="container py-20">
    <span class="text-xl text-yellow-500">Post List</span>
    <div class="flex items-center justify-between w-full">
      <h3 class="text-5xl font-semibold">Categories</h3>
      <a href="" class="inline-block btn">See More</a>
    </div>

    <div class="flex flex-col mt-8 space-y-5 lg:flex-row lg:space-x-5 lg:space-y-0">
      <div class="bg-[#BEDDE2] flex-1 flex space-x-8 relative rounded">
        <img src="./assets/table.png" class="self-end hidden md:block" alt="">

        <div class="max-w-[387px] space-y-4 py-8">
          <h3 class="text-4xl font-bold">Ruang Tamu</h3>
          <p class="text-xl text-gray-500">Terdapat berbagai macam Furniture Ruang Tamu yang dapat anda beli dengan
            kualitas yang bagus</p>
          <a href="" class="inline-block btn">Buy Now</a>
        </div>
      </div>

      <div class="bg-[#DEEFE9] flex-1 flex space-x-8 relative rounded">
        <img src="./assets/chair.png" class="self-end hidden md:block" alt="">

        <div class="max-w-[387px] space-y-4 py-8">
          <h3 class="text-4xl font-bold">Ruang Kerja</h3>
          <p class="text-xl text-gray-500">
            Terdapat berbagai macam Furniture Ruang Kerja, Seperti Kursi Kantor, Santay, dan lainnya
          </p>
          <a href="" class="inline-block btn">Buy Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container py-20">
    <span class="text-xl text-yellow-500">Post List</span>
    <div class="flex items-center justify-between w-full">
      <h3 class="text-5xl font-semibold">
        Our Best Seller Product
      </h3>
      <a href="" class="inline-block btn">See More</a>
    </div>

    @include('layouts.produk')

    {{-- <div class="grid grid-cols-1 mt-10 md:grid-cols-2 lg:grid-cols-4 gap-y-28 gap-x-10">
      <div class="relative">
        <img src="./assets/image-1.png" class="w-full h-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
            <span class="text-xl font-bold">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="relative">
        <img src="./assets/image-2.png" class="w-full h-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
            <span class="text-xl font-bold">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="">
        <img src="./assets/image-3.png" class="w-full h-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
            <span class="text-xl font-bold">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="">
        <img src="./assets/image-4.png" class="w-full h-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
            <span class="text-xl font-bold">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>


      <div class="">
        <img src="./assets/image-5.png" class="w-full h-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
            <span class="text-xl font-bold">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="">
        <img src="./assets/image-6.png" class="w-full h-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
            <span class="text-xl font-bold">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="">
        <img src="./assets/image-7.png" class="w-full h-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
            <span class="text-xl font-bold">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>

      <div class="">
        <img src="./assets/image-8.png" class="w-full h-full" alt="">
        <div class="mt-3 space-y-2">
          <div class="flex justify-between">
            <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
            <span class="text-xl font-bold">$1000</span>
          </div>
          <div class="flex justify-between">
            <p class="text-lg text-gray-500">Best Quality</p>
            <p class="flex text-gray-500">
              <img width="15" src="./assets/star.svg" class="mr-1" alt="">
              (2,1)
            </p>
          </div>
        </div>
      </div>


    </div> --}}
  </div>

  <section class="container flex flex-col items-center py-20 space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0">
    <img src="./assets/workspace.png" class="flex-1 w-full" alt="">
    <div class="flex-1 space-y-6">
      <h2 class="text-6xl font-bold">Simple Wooden Table</h2>
      <p class="text-gray-500">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque harum quaerat animi ipsa blanditiis repellat
        nesciunt similique! Tenetur, dolorum nihil facere voluptate sunt aliquam eligendi dolorem non culpa,
        exercitationem ducimus.
      </p>

      <div class="flex items-center justify-between">
        <a href="" class="inline-block btn"> Buy Now</a>
        <p class="text-3xl font-bold">$1,300</p>
      </div>
    </div>
  </section>


  <section class="banner container relative mt-5 mb-20 bg-[#DEEFE9] min-h-[400px] flex items-center justify-center">
    <img src="./assets/lamp.png" alt="" class="absolute top-0 left-0">

    <img src="./assets/curly.png" class="absolute" alt="">

    <div class="relative z-40 flex flex-col items-center justify-center p-6 space-y-3">
      <h2 class="text-4xl font-bold">Find Furniture Now</h2>
      <p class="text-lg text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor erat sapien
        faucibus lectus,
      </p>
      <a href="" class="inline-block btn">Order Now</a>
    </div>

    <img src="./assets/chair-left.png" alt="" class="absolute bottom-0 right-0">

  </section>

  <section class="bg-[#212121] text-white py-14">
    <div
      class="flex flex-col items-center space-x-12 space-y-5 md:flex-row md:space-y-0 md:items-start md:justify-center">
      <div class="flex flex-col">
        <div class="flex items-center gap-5 mb-5">
          <img src="./assets/Logo.svg" alt="" width="40">
          <p class="font-bold">Mangcoding Store</p>
        </div>

        <p class="max-w-[380px]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor, erat sapien
          faucibus lectus, vel tempor dolor augue et lectus.
        </p>
        <ul class="flex gap-5 mt-5">
          <li>
            <img src="./assets/Frame 1597882717.png" alt="">
          </li>
          <li>
            <img src="./assets/Frame 1597882718.png" alt="">
          </li>
          <li>
            <img src="./assets/Frame 1597882719.png" alt="">
          </li>
          <li>
            <img src="./assets/Frame 1597882720.png" alt="">
          </li>
        </ul>
      </div>

      <div class="grid grid-cols-2 gap-3 md:grid-cols-3 gap-y-8">
        <div>
          <p class="py-2 font-bold">Navigation</p>
          <ul class="flex flex-col gap-2 mt-3 space-y-1">
            <li>Categories</li>
            <li>Best Product</li>
            <li>Cart</li>
            <li>Wishlist</li>
            <li>Contact</li>
          </ul>
        </div>

        <div>
          <p class="py-2 font-bold">Navigation</p>
          <ul class="flex flex-col gap-2 mt-3 space-y-1">
            <li>Ruang Tamu</li>
            <li>Ruang Makan</li>
            <li>Ruang Kerja</li>
            <li>Ruang Tidur</li>
            <li>Furniture</li>
          </ul>
        </div>

        <div>
          <p class="py-2 font-bold">Product</p>
          <ul class="flex flex-col gap-2 mt-3 space-y-1">
            <li>Chair</li>
            <li>Table</li>
            <li>Wardrobe</li>
          </ul>
        </div>

        <div>
          <p class="py-2 font-bold">Payment Method</p>
          <ul class="flex flex-col gap-2 mt-3 space-y-1">
            <li>Credit Card</li>
            <li>Paypal</li>
          </ul>
        </div>

        <div>
          <p class="py-2 font-bold">Setting</p>
          <ul class="flex flex-col gap-2 mt-3 space-y-1">
            <li>My Account</li>
            <li>Order</li>
            <li>Address</li>
            <li>Password</li>
          </ul>
        </div>

        <div>
          <p class="py-2 font-bold">Contact</p>
          <ul class="flex flex-col gap-2 mt-3 space-y-1">
            <li>Lokasimu di Jakarta Barat</li>
            <li>furniture@gmail.com</li>
            <li>0897 8908 8976</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-[#212121] py-5">
    <p class="text-center text-white ">© 2022 Mangcoding. All rights reserved.</p>
  </footer>


  <script src="./js/home.js"></script>
</body>

</html>