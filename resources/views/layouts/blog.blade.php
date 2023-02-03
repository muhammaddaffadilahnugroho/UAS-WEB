{{-- <div class="flex flex-col items-center justify-center space-y-5">
    <span class="px-5 py-3 text-center text-white bg-black rounded-full">Blog</span>
    <h3 class="max-w-2xl text-5xl font-bold">
      From Our Blog
    </h3>
  </div>
  
  <div class="flex flex-wrap mt-10">
    @foreach ($blogs as $blog)
    <div class="relative w-full px-2 mb-6 md:w-1/3">
      <img src="{{ asset($blog->image) }}" class="object-cover w-full h-64" alt="{{ asset($blog->image) }}">
      <div class="mt-3 space-y-2">
        <div class="space-y-1">
          <p class="text-xl font-bold">{{$blog->title}}</p>
          <p class="text-lg text-gray-500">{{$blog->content}}</p>
          <span class="text-gray-500">September 6, 2022</span>
        </div>
      </div>
    </div>
    @endforeach
  </div> --}}


  <div class="container flex flex-col space-y-5 lg:space-y-0 lg:space-x-5 lg:flex-row">
    @foreach ($blogs as $blog)
    <div class="flex items-center justify-center flex-1 px-3 py-6 space-x-6 border-2 border-white ">
      <img src="{{ asset($blog->image) }}" alt="{{ asset($blog->image) }}" width="100" height="50">
      <div class="space-y-1 text-white">
        <h3 class="text-base font-bold">{{$blog->title}}</h3>
        <p class="text-sm">{{$blog->content}}g</p>
      </div>
    </div>
    @endforeach
  </div>
