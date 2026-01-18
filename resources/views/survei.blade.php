@extends('tampilan.main')

@section('container')

 <!-- Start block -->
 <section id="home" class="bg-gray-950">
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-26">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl text-zinc-200">Kepuasan Pelanggan  <br>Tanggung Jawab Kami.</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Kami melihat pelanggan sebagai tamu undangan ke pesta, dan kami adalah tuan rumah. Adalah tugas kami untuk membuat pengalaman pelanggan sedikit lebih baik.</p>
            <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                <a href="jawab" class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-zinc-200 border border-gray-200 rounded-lg sm:w-auto hover:bg-amber-400 focus:ring-4 focus:ring-gray-100 dark:text-zinc-200 dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-4 h-4 mr-2 text-gray-200 dark:text-gray-400"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg>
                  Ayo Isi Survei
                  {{-- <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg> --}}
                </a> 
            </div>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="img/123.svg" alt="hero image">
        </div>                
    </div>
</section>


<!-- End block -->

{{-- ombak --}}
  <div class="relative -mt-12 lg:-mt-24">
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
          <path
            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
            opacity="0.100000001"
          ></path>
          <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
        </g>
        <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path
            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
          ></path>
        </g>
      </g>
    </svg>
  </div>

   <!-- Start block -->
 <section id="envy" class="bg-gray-900">
  <div class="max-w-screen-md mx-auto text-center py-14">
    <h2 class=" text-3xl font-extrabold tracking-tight text-white  md:text-5xl xl:text-5xl">Tentang Kami</h2>
    </div>

  <div class="max-w-screen-xl px-4 py-6 mx-auto space-y-8 lg:space-y-20 lg:py-24 lg:px-6">
      <!-- Row -->
      <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
          <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="img/11.svg" alt="feature image 2">
          <div class="text-gray-500 sm:text-lg dark:text-gray-400">
              <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-zinc-200">Toko Uyup XXXXXX</h2>
              <p class="mb-2 font-light lg:text-xl">Kami menjual produk Umpan Uyup Kucur Khas Lumpatan</p>
              <p class="font-light lg:text-xl">Produk Yang kami tawarkan adalah produk yang berkualitas dengan harga terjangkau</p>
          </div>
      </div>
  </div>
</section>

{{-- ombak --}}
<div class="relative -mt-12 lg:-mt-24">
  <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
        <path
          d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
          opacity="0.100000001"
        ></path>
        <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
      </g>
      <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <path
          d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
        ></path>
      </g>
    </g>
  </svg>
</div>
<!-- End block -->

 <!-- Start block -->
 <section id="lust" class="bg-gray-950">
  <div class="max-w-screen-md mx-auto text-center py-14">
    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-white  md:text-5xl xl:text-5xl">Kami Menyediakan</h2>
  </div>

      {{-- Produk --}}
  <div class="px-4 lg:px-12 grid grid-cols-2 gap-2 md:grid-cols-5 md:gap-4">
    <div class="h-15 aspect-[3/4] rounded-lg overflow-hidden">
      <div class=" aspect-[3/2] group relative shadow-lg shadow-slate-700">
                    <img class="absolute  w-full h-full rounded-lg bg-cover bg-center group-hover:scale-110 transition duration-500" src="img/1.jpg" alt="hero image">
      </div>
      <h2 class="mt-3 text- font-bold tracking-tight text-white text-center md:text-xl xl:text-2xl"> Uyup Kucur 1</h2>
      <h2 class="mt-3 text- font-semibold tracking-tight text-white text-center md:text-xl xl:text-xl">Rp. 15 K</h2>
    </div>
    {{-- gambar 2 --}}
    <div class="h-15 aspect-[3/4] rounded-lg overflow-hidden">
      <div class=" aspect-[3/2] group relative shadow-lg shadow-slate-700">
                    <img class="absolute  w-full h-full rounded-lg bg-cover bg-center group-hover:scale-110 transition duration-500" src="img/6.jpg" alt="hero image">
      </div>
      <h2 class="px-2 mt-3 text- font-bold tracking-tight text-white text-center md:text-xl xl:text-2xl"> Kucur Umpan Patin 1Kg</h2>
      <h2 class="mt-3 text- font-semibold tracking-tight text-white text-center md:text-xl xl:text-xl">Rp. 68 K</h2>
    </div>
    {{-- gambar3 --}}
    <div class="h-15 aspect-[3/4] rounded-lg overflow-hidden">
      <div class=" aspect-[3/2] group relative shadow-lg shadow-slate-700">
                    <img class="absolute  w-full h-full rounded-lg bg-cover bg-center group-hover:scale-110 transition duration-500" src="img/7.jpg" alt="hero image">
      </div>
      <h2 class="px-2 mt-3 text- font-bold tracking-tight text-white text-center md:text-xl xl:text-2xl"> Umpan Kucur Baung paket 1 kg</h2>
      <h2 class="mt-3 text- font-semibold tracking-tight text-white text-center md:text-xl xl:text-xl">Rp. 85 K</h2>
    </div>
    {{-- gambar4 --}}
    <div class="h-15 aspect-[3/4] rounded-lg overflow-hidden">
      <div class=" aspect-[3/2] group relative shadow-lg shadow-slate-700">
                    <img class="absolute  w-full h-full rounded-lg bg-cover bg-center group-hover:scale-110 transition duration-500" src="img/5.jpg" alt="hero image">
      </div>
      <h2 class="px-2 mt-3 text- font-bold tracking-tight text-white text-center md:text-xl xl:text-2xl"> Kucur Umpan Ikan 200 gr</h2>
      <h2 class="mt-3 text- font-semibold tracking-tight text-white text-center md:text-xl xl:text-xl">Rp. 22 K</h2>
    </div>
    {{-- gambar5 --}}
    <div class="h-15 aspect-[3/4] rounded-lg overflow-hidden">
      <div class=" aspect-[3/2] group relative shadow-lg shadow-slate-700">
                    <img class="absolute  w-full h-full rounded-lg bg-cover bg-center group-hover:scale-110 transition duration-500" src="img/2.jpg" alt="hero image">
      </div>
      <h2 class="mt-3 text- font-bold tracking-tight text-white text-center md:text-xl xl:text-2xl"> Kucur Gacor 1kg</h2>
      <h2 class="mt-3 text- font-semibold tracking-tight text-white text-center md:text-xl xl:text-xl">Rp. 75 K</h2>
    </div>
   
    </div>
</section>

<section id="greed" class="bg-gray-950">
  <div class="max-w-screen-md mx-auto text-center py-14">
    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-white  md:text-5xl xl:text-5xl">Temukan kami</h2>
  </div>

  <div class="grid grid-cols-3 gap-4">
    <div class="col-span-2 ">
  
      <iframe src="{{ $maps[0]->map }}" 
       class="w-full px-4 md:px-12 h-48 md:h-96"
     
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    </div>
          <div class="text-zinc-200 ">
            <p class="mb-2 font-light lg:text-xl">Alamat : </p>
            <p class="pr-5 md:text-pretty mb-2 font-light lg:text-xl">Dusun 3, kampung 5, Lumpatan II, Kec. Sekayu, Kabupaten Musi Banyuasin, Sumatera Selatan 30711</p>
              <a
              href="https://wa.me/682178849640"
              target="_blank"
              class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
              <svg xmlns="http://www.w3.org/2000/svg" role="img" width="20" class="fill-current" viewBox="0 0 24 24" x><path fill-rule="evenodd" clip-rule="evenodd" d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263"></path></svg>
            </a>
       
          </div>
      
  </div>

   
  
</section>

<a href="#home" class="fixed z-[9999] bottom-4 right-4 h-10 w-10 p-2 bg-amber-400 rounded-full hover:animate-pulse opacity-90" id="balikatas">
  <span>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="opacity-50"><path d="M13.0001 7.82843V20H11.0001V7.82843L5.63614 13.1924L4.22192 11.7782L12.0001 4L19.7783 11.7782L18.3641 13.1924L13.0001 7.82843Z"></path></svg>
  </span>
</a>
@endsection