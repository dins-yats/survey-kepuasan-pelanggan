<x-app-layout>

    <div class="py-12">
        <div class="">
            <div class="">
                <x-welcome />
                <div class="p-4 sm:ml-64">
                    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                       
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                                            <form method="POST" action="/dashboard/tanya/{{ $pertanyaannya->id }}"  enctype="multipart/form-data">
                                                @method('PUT')
                                            {{-- <form method="POST" action="{{ route('dashboard/tanya/{{ $pertanyaannya->pertanyaan }}/update') }}" enctype="multipart/form-data"> --}}
                                            {{-- <form method="POST" action=""> --}}
                                                    @csrf

                                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                    <div class="px-4">
                                                        <label for="pertanyaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pertanyaan</label>
                                                        <input type="text" id="pertanyaan" name="pertanyaan" value="{{ $pertanyaannya->pertanyaan }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                                    </div>
                                                  
                                                </div>
                                                <div class="px-4 mb-2">
                                                    <button type="submit" class="  text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5  py-2.5 text-center me-2 mb-2 ">Simpan</button>
                                                </div>
                                            </form>                 


          
                        </div>
                    </div>
                 
                </div>

            
            </div> 
        </div>
    </div>
</x-app-layout>