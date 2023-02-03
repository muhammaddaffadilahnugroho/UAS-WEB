{{-- @foreach ($produks as $produk)
<div data-aos="fade-up" data-aos-duration="1000" class="space-y-2">
    <img src="{{ asset('images/'.$produk->photo) }}" alt="{{ $produk->name }}" class="w-full bg-center">
    <div class="flex items-center pt-2">
        <h4 class="text-[1.2rem] font-semibold">{{ $produk->name }}</h4>
        <div class="flex items-center ml-auto space-x-1">
            <img src="../assets/Star.svg" alt=""><p>4.3</p>
        </div></div>
        <div class="space-y-5"><p class="text-[.9rem] text-content">
            {{ $produk->description }}</p>
            <div class="flex items-center">
                <button class="flex items-center space-x-2 bg-[#F5FCE8] rounded-sm px-2 py-2 text-second">
                    <ion-icon name="add-outline" class="font-semibold">
                        </ion-icon>
                        <p>Add</p>
</button>
<p class="ml-auto font-semibold">${{ $produk->price}}</p>
</div></div></div>
@endforeach --}}


<div class="grid grid-cols-1 mt-10 md:grid-cols-2 lg:grid-cols-4 gap-y-28 gap-x-10">
    @foreach ($produks as $produk)
    <div class="relative">
      <img src="{{ asset('images/'.$produk->photo) }}" class="w-full h-full" alt="{{ $produk->name }}">
      <div class="mt-3 space-y-2">
        <div class="flex justify-between">
          <p class="text-xl font-bold">{{ $produk->name }}</p>
          <span class="text-xl font-bold">${{ $produk->price}}</span>
        </div>
        <div class="flex justify-between">
          <p class="text-lg text-gray-500">{{ $produk->description }}</p>
          <p class="flex text-gray-500">
            <img width="15" src="./assets/star.svg" class="mr-1" alt="">
            (2,1)
          </p>
        </div>
      </div>
    </div>
    @endforeach
  </div>