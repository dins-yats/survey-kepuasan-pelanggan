@extends('tampilan.second')

@section('container')
<div class="container font-sans mb-7 text-white">
   <h1 class="text-5xl text-center font-medium " >Survey Kepuasan dan Pelayanan </h1>
   <h1 class="text-2xl font-semibold text-center mt-2">Uyup Kucur xxxx</h1>
   
 </div>


 <div class="container mb-4 mt-4 text-white">
    <div class="w-full px-4 ">
        <div class="max-w-2xl mx-auto border border-red-300  rounded-t">
            <h2 class="font-Medium text-dark mb-4 text-xl bg-gradient-to-r from-indigo-400 via-orange-400 to-cyan-400 text-center  rounded-t shadow-lg shadow-slate-600">Petunjuk Pengisian</h2>
        <div class="max-w-xl {} mx-auto mb-16">
            
            <ul class="list-disc list-outside ">
                <li>Isi Nama Dan Nomor HP Terlebih Dahulu</li>
                <li>Untuk setiap pertanyaan, silahkan tap/klik pada salah satu beberapa kotak dengan gambar wajah dan pernyataan yang sesuai dengan tanggapan anda terhadap pertanyaan yang diberikan. Kotak yang berubah warna menandakan bahwa itu adalah tanggapan yang anda pilih.</li>
                <li>Apabila ingin mengganti respon, anda bisa langsung menekan respon lain dari pertanyaan yang sama. Pastikan warna berpindah ke respon anda yang baru.</li>
                <li>Isi kritik dan saran yang ingin diberikan ke Toko</li>
                <li>Harap Agar Semua Form Diisi DAri Awal Sampai Akhir Agar Jawaban Dapat Terkirim</li>
                
              </ul>
        </div>
        </div>
    </div>
</div>





<div class="container mb-4">
    <div class="w-full px-4 ">
        <div class="max-w-2xl mx-auto border border-red-300  rounded">
            <h2 class="font-Medium text-white mb-4 text-xl bg-gradient-to-r from-indigo-400 via-orange-400 to-cyan-400 text-center  rounded-t shadow-lg shadow-slate-600">Isi Data Dan Jawab Pertanyaan</h2>
           
            @if(session()->has('success'))
            <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
              <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div>
                {{ session('success') }}
              </div>
            </div>
            @endif
       
          
            <form class="max-w-lg px-2 mx-auto" method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
            {{-- <form class="max-w-lg px-2 mx-auto" method="POST" action="{{ url('/store') }}" enctype="multipart/form-data"> --}}
            {{-- <form class="max-w-lg px-2 mx-auto" method="POST" action="/store" enctype="multipart/form-data"> --}}
              @csrf
              <div>
                <div class="grid gap-6 mb-6 md:grid-cols-2">  
                    <div class="">
                        <label for="namacs" class="block mb-2 text-sm font-medium text-white after:content-['*'] after:text-pink-600 after:ml-0.5">Nama</label>
                        <input value="{{ old('namacs') }}" type="text" id="namacs"  name="namacs" class=" shadow-lg shadow-slate-600 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-400 focus:border-green-400 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-400 dark:focus:border-blue-500" placeholder="Masukkan Nama Anda" required />
                    </div>
                    
                    
                      <div>
                        <label for="nohp" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white after:content-['*'] after:text-pink-600 after:ml-0.5" >Nomor Telepon</label>
                        <input type="tel" id="nohp" name="nohp" class="shadow-lg shadow-slate-600 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer after:content-['👁️'] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-400 focus:border-green-400 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-b-500 dark:focus:border-blue-500" placeholder="08xx-xxxx-x678" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required />                        
                      </div>

                      
                      {{-- <div>
                        <label for="nohp">
                          <span class="block font-sans font-semibold mb-1 text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">Email</span>
                          <input id="nohp" type="tel" name="nohp" placeholder="08xx-xxxx-x678" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}"
                          class="px-3 py-2 rounded shadow border w-full font-sans text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-green-400 focus:border-green-400
                          invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer after:content-['👁️']">
      
                          
                          <p class="font-sans text-sm m-1 text-pink-700 invisible peer-invalid:visible ">Format email tidak valid</p>
                      </label>
                        </div> --}}


                       {{-- <div>
                    <label for="email">
                      <span class="block font-sans font-semibold mb-1 text-slate-700 after:content-['*'] after:text-pink-600 after:ml-0.5">Email</span>
                      <input id="email" type="email" placeholder="Masukkan Email..... "after-required 
                      class="px-3 py-2 rounded shadow border w-full font-sans text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-green-400 focus:border-green-400
                      invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer after:content-['👁️']">
  
                     
                      <p class="font-sans text-sm m-1 text-pink-700 invisible peer-invalid:visible ">Format email tidak valid</p>
                  </label>
                    </div> --}}
                </div>
                
              <div class="max-w-xl mx-auto mb-16">
              <ul class="list-decimal list-outside ">
               {{-- pertanyaan 1 --}}
                <li class=" text-gray-200 mb-6 ">{{ $pertanyaannya[0]->pertanyaan }}
                  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 mt-3">
                    <div class="">
                      <input type="radio" id="sangatburuk1" name="ask1" value="Sangat Buruk" class="hidden peer" required>
                      <label for="sangatburuk1" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"   class="w-21 h-20 px-4 lg:px-0 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5.002-.022-1.373-.549.742-1.857 5 2-.742 1.857-1.031-.413c-.014.014-.023.031-.037.044A1.499 1.499 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm8.986-6.507c0 .412-.167.785-.438 1.056a1.488 1.488 0 0 1-2.112 0c-.011-.011-.019-.024-.029-.035l-1.037.415-.742-1.857 5-2 .742 1.857-1.386.554a.036.036 0 0 1 .002.01z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 px-4 lg:px-0 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold mt-1 lg:px-3">Sangat Buruk</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="kurang1" name="ask1" value="Kurang" class="hidden peer">
                      <label for="kurang1" class=" shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>  
                              <div class="w-full text-lg font-semibold px-2">Kurang</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="cukup1" name="ask1" value="Cukup" class="hidden peer">
                      <label for="cukup1" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zm9 6.5H7.974v-2H16v2zm-.507-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><circle cx="8.5" cy="10.5" r="1.5"></circle><circle cx="15.493" cy="10.493" r="1.493"></circle><path d="M7.974 15H16v2H7.974z"></path></svg> --}}
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-2 lg:px-3">Cukup</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="baik1" name="ask1" value="Baik" class="hidden peer">
                      <label for="baik1" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  class="w-21 h-20 p group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm3.493 7a1.494 1.494 0 1 1-.001 2.987A1.494 1.494 0 0 1 15.493 9zM8.5 9a1.5 1.5 0 1 1-.001 3.001A1.5 1.5 0 0 1 8.5 9zm3.5 9c-4 0-5-4-5-4h10s-1 4-5 4z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 p group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-4 lg:px-5">Baik</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="sangatbaik1" name="ask1" value="Sangat Baik" class="hidden peer">
                      <label for="sangatbaik1" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 px-4 lg:px-0 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow" ><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-6.447 9.105 2.459-1.229-1.567-1.044 1.109-1.664 3 2a1 1 0 0 1-.108 1.727l-4 2-.893-1.79zM12 18c-4 0-5-4-5-4h10s-1 4-5 4zm5.553-5.105-4-2a1 1 0 0 1-.108-1.727l3-2 1.109 1.664-1.566 1.044 2.459 1.229-.894 1.79z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 px-4 lg:px-0 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-2 lg:px-3">Sangat Baik</div>
                          </div>
    
                      </label>
                    </div>
                
                    
                  
          
                  </div>
                </li>
                {{-- akhir p1 --}}

                {{-- p2 --}}
                <li class="mb-6 mt-6 text-gray-200">{{ $pertanyaannya[1]->pertanyaan }}
                  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 mt-3">
                    <div class="">
                      <input type="radio" id="sangatburuk2" name="ask2" value="Sangat Buruk" class="hidden peer" required>
                      <label for="sangatburuk2" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"   class="w-21 h-20 px-4 lg:px-0 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5.002-.022-1.373-.549.742-1.857 5 2-.742 1.857-1.031-.413c-.014.014-.023.031-.037.044A1.499 1.499 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm8.986-6.507c0 .412-.167.785-.438 1.056a1.488 1.488 0 0 1-2.112 0c-.011-.011-.019-.024-.029-.035l-1.037.415-.742-1.857 5-2 .742 1.857-1.386.554a.036.036 0 0 1 .002.01z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 px-4 lg:px-0 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold mt-1 lg:px-3">Sangat Buruk</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="kurang2" name="ask2" value="Kurang" class="hidden peer">
                      <label for="kurang2" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>  
                              <div class="w-full text-lg font-semibold px-2">Kurang</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="cukup2" name="ask2" value="Cukup" class="hidden peer">
                      <label for="cukup2" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zm9 6.5H7.974v-2H16v2zm-.507-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><circle cx="8.5" cy="10.5" r="1.5"></circle><circle cx="15.493" cy="10.493" r="1.493"></circle><path d="M7.974 15H16v2H7.974z"></path></svg> --}}
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-2 lg:px-3">Cukup</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="baik2" name="ask2" value="Baik" class="hidden peer">
                      <label for="baik2" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  class="w-21 h-20 p group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm3.493 7a1.494 1.494 0 1 1-.001 2.987A1.494 1.494 0 0 1 15.493 9zM8.5 9a1.5 1.5 0 1 1-.001 3.001A1.5 1.5 0 0 1 8.5 9zm3.5 9c-4 0-5-4-5-4h10s-1 4-5 4z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 p group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-4 lg:px-5">Baik</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="sangatbaik2" name="ask2" value="Sangat Baik" class="hidden peer">
                      <label for="sangatbaik2" class=" shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 px-4 lg:px-0 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow" ><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-6.447 9.105 2.459-1.229-1.567-1.044 1.109-1.664 3 2a1 1 0 0 1-.108 1.727l-4 2-.893-1.79zM12 18c-4 0-5-4-5-4h10s-1 4-5 4zm5.553-5.105-4-2a1 1 0 0 1-.108-1.727l3-2 1.109 1.664-1.566 1.044 2.459 1.229-.894 1.79z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 px-4 lg:px-0 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-2 lg:px-3">Sangat Baik</div>
                          </div>
    
                      </label>
                    </div>
                
                    
                  
          
                  </div>
                </li>

                {{-- akhir p2 --}}


                {{-- p3 --}}
                <li class="mb-6 text-gray-200">{{ $pertanyaannya[2]->pertanyaan }}
                  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 mt-3">
                    <div class="">
                      <input type="radio" id="sangatburuk3" name="ask3" value="Sangat Buruk" class="hidden peer" required>
                      <label for="sangatburuk3" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"   class="w-21 h-20 px-4 lg:px-0 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5.002-.022-1.373-.549.742-1.857 5 2-.742 1.857-1.031-.413c-.014.014-.023.031-.037.044A1.499 1.499 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm8.986-6.507c0 .412-.167.785-.438 1.056a1.488 1.488 0 0 1-2.112 0c-.011-.011-.019-.024-.029-.035l-1.037.415-.742-1.857 5-2 .742 1.857-1.386.554a.036.036 0 0 1 .002.01z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 px-4 lg:px-0 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold mt-1 lg:px-3">Sangat Buruk</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="kurang3" name="ask3" value="Kurang" class="hidden peer">
                      <label for="kurang3" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>  
                              <div class="w-full text-lg font-semibold px-2">Kurang</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="cukup3" name="ask3" value="Cukup" class="hidden peer">
                      <label for="cukup3" class=" shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zm9 6.5H7.974v-2H16v2zm-.507-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><circle cx="8.5" cy="10.5" r="1.5"></circle><circle cx="15.493" cy="10.493" r="1.493"></circle><path d="M7.974 15H16v2H7.974z"></path></svg> --}}
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-2 lg:px-3">Cukup</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="baik3" name="ask3" value="Baik" class="hidden peer">
                      <label for="baik3" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  class="w-21 h-20 p group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm3.493 7a1.494 1.494 0 1 1-.001 2.987A1.494 1.494 0 0 1 15.493 9zM8.5 9a1.5 1.5 0 1 1-.001 3.001A1.5 1.5 0 0 1 8.5 9zm3.5 9c-4 0-5-4-5-4h10s-1 4-5 4z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 p group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-4 lg:px-5">Baik</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="sangatbaik3" name="ask3" value="Sangat Baik" class="hidden peer">
                      <label for="sangatbaik3" class=" shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 px-4 lg:px-0 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow" ><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-6.447 9.105 2.459-1.229-1.567-1.044 1.109-1.664 3 2a1 1 0 0 1-.108 1.727l-4 2-.893-1.79zM12 18c-4 0-5-4-5-4h10s-1 4-5 4zm5.553-5.105-4-2a1 1 0 0 1-.108-1.727l3-2 1.109 1.664-1.566 1.044 2.459 1.229-.894 1.79z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 px-4 lg:px-0 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-2 lg:px-3">Sangat Baik</div>
                          </div>
    
                      </label>
                    </div>
                
                    
                  
          
                  </div>
                </li>
                {{-- akhir p3 --}}

                {{-- p4 --}}
                <li class="mb-6 text-gray-200">{{ $pertanyaannya[3]->pertanyaan }}
                  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 mt-3">
                    <div class="">
                      <input type="radio" id="sangatburuk4" name="ask4" value="Sangat Buruk" class="hidden peer" required>
                      <label for="sangatburuk4" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"   class="w-21 h-20 px-4 lg:px-0 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5.002-.022-1.373-.549.742-1.857 5 2-.742 1.857-1.031-.413c-.014.014-.023.031-.037.044A1.499 1.499 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm8.986-6.507c0 .412-.167.785-.438 1.056a1.488 1.488 0 0 1-2.112 0c-.011-.011-.019-.024-.029-.035l-1.037.415-.742-1.857 5-2 .742 1.857-1.386.554a.036.036 0 0 1 .002.01z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 px-4 lg:px-0 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold mt-1 lg:px-3">Sangat Buruk</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="kurang4" name="ask4" value="Kurang" class="hidden peer">
                      <label for="kurang4" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>  
                              <div class="w-full text-lg font-semibold px-2">Kurang</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="cukup4" name="ask4" value="Cukup" class="hidden peer">
                      <label for="cukup4" class=" shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zm9 6.5H7.974v-2H16v2zm-.507-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><circle cx="8.5" cy="10.5" r="1.5"></circle><circle cx="15.493" cy="10.493" r="1.493"></circle><path d="M7.974 15H16v2H7.974z"></path></svg> --}}
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-2 lg:px-3">Cukup</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="baik4" name="ask4" value="Baik" class="hidden peer">
                      <label for="baik4" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  class="w-21 h-20 p group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm3.493 7a1.494 1.494 0 1 1-.001 2.987A1.494 1.494 0 0 1 15.493 9zM8.5 9a1.5 1.5 0 1 1-.001 3.001A1.5 1.5 0 0 1 8.5 9zm3.5 9c-4 0-5-4-5-4h10s-1 4-5 4z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 p group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-4 lg:px-5">Baik</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="sangatbaik4" name="ask4" value="Sangat Baik" class="hidden peer">
                      <label for="sangatbaik4" class=" shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 px-4 lg:px-0 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow" ><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-6.447 9.105 2.459-1.229-1.567-1.044 1.109-1.664 3 2a1 1 0 0 1-.108 1.727l-4 2-.893-1.79zM12 18c-4 0-5-4-5-4h10s-1 4-5 4zm5.553-5.105-4-2a1 1 0 0 1-.108-1.727l3-2 1.109 1.664-1.566 1.044 2.459 1.229-.894 1.79z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 px-4 lg:px-0 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-2 lg:px-3">Sangat Baik</div>
                          </div>
    
                      </label>
                    </div>
                
                    
                  
          
                  </div>
                </li>

                {{-- akhir p4 --}}

                {{-- p5 --}}
                <li class="mb-6 text-gray-200">{{ $pertanyaannya[4]->pertanyaan }}
                  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 mt-3">
                    <div class="">
                      <input type="radio" id="sangatburuk5" name="ask5" value="Sangat Buruk" class="hidden peer" required>
                      <label for="sangatburuk5" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"   class="w-21 h-20 px-4 lg:px-0 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5.002-.022-1.373-.549.742-1.857 5 2-.742 1.857-1.031-.413c-.014.014-.023.031-.037.044A1.499 1.499 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm8.986-6.507c0 .412-.167.785-.438 1.056a1.488 1.488 0 0 1-2.112 0c-.011-.011-.019-.024-.029-.035l-1.037.415-.742-1.857 5-2 .742 1.857-1.386.554a.036.036 0 0 1 .002.01z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 px-4 lg:px-0 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold mt-1 lg:px-3">Sangat Buruk</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="kurang5" name="ask5" value="Kurang" class="hidden peer">
                      <label for="kurang5" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>  
                              <div class="w-full text-lg font-semibold px-2">Kurang</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="cukup5" name="ask5" value="Cukup" class="hidden peer">
                      <label for="cukup5" class=" shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zm9 6.5H7.974v-2H16v2zm-.507-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><circle cx="8.5" cy="10.5" r="1.5"></circle><circle cx="15.493" cy="10.493" r="1.493"></circle><path d="M7.974 15H16v2H7.974z"></path></svg> --}}
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-2 lg:px-3">Cukup</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="baik5" name="ask5" value="Baik" class="hidden peer">
                      <label for="baik5" class="shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  class="w-21 h-20 p group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm3.493 7a1.494 1.494 0 1 1-.001 2.987A1.494 1.494 0 0 1 15.493 9zM8.5 9a1.5 1.5 0 1 1-.001 3.001A1.5 1.5 0 0 1 8.5 9zm3.5 9c-4 0-5-4-5-4h10s-1 4-5 4z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 h-20 p group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-4 lg:px-5">Baik</div>
                          </div>
    
                      </label>
                    </div>
                    <div class="">
                      <input type="radio" id="sangatbaik5" name="ask5" value="Sangat Baik" class="hidden peer">
                      <label for="sangatbaik5" class=" shadow-md shadow-slate-600 h-36 flex flex-warp items-center justify-center w-full px-2 text-gray-500 border border-gray-200 rounded-lg cursor-pointer bg-slate-400 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gradient-to-r from-green-400 to-fuchsia-100 hover:text-gray-600 hover:bg-gray-10">                           
                        
                        <div class="">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 px-4 lg:px-0 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow" ><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-6.447 9.105 2.459-1.229-1.567-1.044 1.109-1.664 3 2a1 1 0 0 1-.108 1.727l-4 2-.893-1.79zM12 18c-4 0-5-4-5-4h10s-1 4-5 4zm5.553-5.105-4-2a1 1 0 0 1-.108-1.727l3-2 1.109 1.664-1.566 1.044 2.459 1.229-.894 1.79z"></path></svg>
                          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-21 px-4 lg:px-0 h-20 group-hover:scale-110 transition-all duration-400 text-yellow-300 object-center" fill="yellow"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 7 10.5zM8 17s1-3 4-3 4 3 4 3H8zm7.493-5.014a1.494 1.494 0 1 1 .001-2.987 1.494 1.494 0 0 1-.001 2.987z"></path></svg>   --}}
                              <div class="w-full text-lg font-semibold px-2 lg:px-3">Sangat Baik</div>
                          </div>
    
                      </label>
                    </div>
                
                    
                  
          
                  </div>
                </li>
                {{-- akhir p5 --}}
            
                <li class="text-gray-200">
                 Kritik dan Saran
                  <textarea id="saran" name="saran" rows="4" class="shadow-lg shadow-slate-600 mt-3 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Berikan kritik dan saran mu..." required></textarea>
                </li>
             
              </ul>
              <button type="submit" class=" shadow-lg shadow-slate-600 mt-6 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Kirim</button>
            </div>
            {{-- <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> --}}
          </div> 
          </form>
        </div>
    </div>
</div>

 
@endsection