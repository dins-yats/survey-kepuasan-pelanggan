<x-app-layout>
   {{-- <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Dashboard') }}
      </h2>
   </x-slot> --}}
            
  
    <div class="py-12">
        <div class="">
            <div class="">
                <x-welcome />

 
 <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
       <div class="grid grid-cols-3 gap-4 mb-4">
        

                    <div class="max-w-sm p-6 bg-white border border-gray-300 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                        {{-- <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
                        </svg> --}}
                        <svg xmlns="http://www.w3.org/2000/svg"class="w-10 h-9 text-gray-500 dark:text-gray-400 mb-3"  viewBox="0 0 24 24" ><path d="M21 5c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5zM5 19V5h14l.002 14H5z"></path><path d="M7 7h1.998v2H7zm4 0h6v2h-6zm-4 4h1.998v2H7zm4 0h6v2h-6zm-4 4h1.998v2H7zm4 0h6v2h-6z"></path></svg>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Jumlah Survei Pelanggan :</h5>
                        </a>
                        <p class="mb-3 text-4xl font-serif text-gray-500 dark:text-gray-400">{{ $surveis }}</p>
                        <a href="/dashboard/hasil" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                            Lihat data
                            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
                            </svg>
                        </a>
                    </div>

        
       </div>
       {{-- <input type="month"> --}}
       <div class="mt-6">   
        <div class="mt-3 flex items-center max-w-sm mx-auto mb-3">
            {{-- dropdown --}}
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Pilih Tahun<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
            </button>
            
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton"> 
                            <li>
                                <form method="get" >
                                    @csrf
                                    <button type="submit" name="keyword" value="2024" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2024</button>
                                    <button type="submit" name="keyword" value="2025" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2025</button>
                                    <button type="submit" name="keyword" value="2026" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2026</button>
                                    <button type="submit" name="keyword" value="2027" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2027</button>
                                    <button type="submit" name="keyword" value="2028" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2028</button>
                                    <button type="submit" name="keyword" value="2029" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2029</button>
                                    <button type="submit" name="keyword" value="2030" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2030</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    
                    {{-- dropdown --}}
                </div>
                    
                    
                    <div id="chart3" class="shadow-lg flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                        
      </div>
       <div class="grid grid-cols-2 gap-4 mb-4">
     
          <div id="chart" class="shadow-lg flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            
           
          </div>
          <div id="chart2" class="shadow-lg flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            
          </div>
          <div id="chart4" class="shadow-lg flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
           
          </div>
          <div id="chart5" class="shadow-lg flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            
          </div>
       </div>
    </div>
      
   
      
    </div>
 </div>
 
            </div>
        </div>
    </div>

    {{-- ask1 --}}
                        <script>
                                    var options = {
                              series: @json($data),
                              chart: {
                              width:300,
                              type: 'donut',
                              },
                              labels: @json($label),
                              title: {
                              text: 'Bagaimana Kebersihan fasilitas toko?'
                              },
                              responsive: [{
                              breakpoint: 480,
                              options: {
                              chart: {
                              width: 200
                              },

                              legend: {
                              position: 'bottom'
                              }
                              }
                              }]
                              };

                              var chart = new ApexCharts(document.querySelector("#chart"), options);
                              chart.render();




                        </script>
                        {{-- ask2 --}}
                        <script>
                                    var options = {
                              series: @json($data2),
                              chart: {
                              width:300,
                              type: 'donut',
                              },
                              labels: @json($label),
                              title: {
                              text: 'Bagaimana Kenyamanan Toko?'
                              },
                              responsive: [{
                              breakpoint: 480,
                              options: {
                              chart: {
                              width: 200
                              },

                              legend: {
                              position: 'bottom'
                              }
                              }
                              }]
                              };

                              var chart = new ApexCharts(document.querySelector("#chart2"), options);
                              chart.render();




                        </script>
                        {{-- ask3 --}}
                        <script>
                                    var options = {
                              series: @json($data3),
                              chart: {
                              width:300,
                              type: 'donut',
                              },
                              labels: @json($label),
                              title: {
                              text: 'Bagaimana Pelayanan Yang Diterima?'
                              },
                              responsive: [{
                              breakpoint: 480,
                              options: {
                              chart: {
                              width: 200
                              },

                              legend: {
                              position: 'bottom'
                              }
                              }
                              }]
                              };

                              var chart = new ApexCharts(document.querySelector("#chart3"), options);
                              chart.render();




                        </script>
                           {{-- ask4 --}}
                        <script>
                                    var options = {
                              series: @json($data4),
                              chart: {
                              width:300,
                              type: 'donut',
                              },
                              labels: @json($label),
                              title: {
                              text: 'Kualitas Produk Yang di Berikan?'
                              },
                              responsive: [{
                              breakpoint: 480,
                              options: {
                              chart: {
                              width: 200
                              },

                              legend: {
                              position: 'bottom'
                              }
                              }
                              }]
                              };

                              var chart = new ApexCharts(document.querySelector("#chart4"), options);
                              chart.render();




                        </script>
                        {{-- ask5 --}}
                        <script>
                                    var options = {
                              series: @json($data5),
                              chart: {
                              width:300,
                              type: 'donut',
                              },
                              labels: @json($label),
                              title: {
                              text: 'Tarif Produk Yang Ditawarkan'
                              },
                              responsive: [{
                              breakpoint: 480,
                              options: {
                              chart: {
                              width: 200
                              },

                              legend: {
                              position: 'bottom'
                              }
                              }
                              }]
                              };

                              var chart = new ApexCharts(document.querySelector("#chart5"), options);
                              chart.render();




                        </script>
    
</x-app-layout>
