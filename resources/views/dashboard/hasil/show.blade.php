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
                       
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                                            <form action="">
                                                    @csrf

                                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                    <div class="px-4">
                                                        <label for="namacs" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pelanggan</label>
                                                        <input type="text" id="namacs" name="namacs" value="{{ $hasilsurvei->namacs }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                                                    </div>
                                                    <div class="px-4">
                                                        <label for="nohp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Handphone </label>
                                                        <input type="text" id="nohp" name="nohp"  value="{{ $hasilsurvei->nohp }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                                                    </div>
                                                    <div class="px-4">
                                                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $pertanyaannya[0]->pertanyaan }}</label>
                                                        <input type="text" id="first_name"  value="{{ $hasilsurvei->ask1 }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled />
                                                    </div>
                                                    <div class="px-4">
                                                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $pertanyaannya[1]->pertanyaan }}</label>
                                                        <input type="text" id="first_name"  value="{{ $hasilsurvei->ask2 }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled />
                                                    </div>
                                                    <div class="px-4">
                                                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $pertanyaannya[2]->pertanyaan }}</label>
                                                        <input type="text" id="first_name"  value="{{ $hasilsurvei->ask3 }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled />
                                                    </div>
                                                    <div class="px-4">
                                                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $pertanyaannya[3]->pertanyaan }}</label>
                                                        <input type="text" id="first_name"  value="{{ $hasilsurvei->ask4 }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled />
                                                    </div>
                                                    <div class="px-4">
                                                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $pertanyaannya[4]->pertanyaan }}</label>
                                                        <input type="text" id="first_name"  value="{{ $hasilsurvei->ask5 }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled />
                                                    </div>
                                                    <div class="px-4">
                                                        
                                                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kritik Dan Saran</label>
                                                            <textarea id="message" rows="4"  value="{{ $hasilsurvei->saran }}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>{{ $hasilsurvei->saran }}</textarea>

                                                    </div>
                                                  
                                                </div>
                                            </form>                 


          
                        </div>
                    </div>
                 
                </div>

            
            </div> 
        </div>
    </div>
</x-app-layout>