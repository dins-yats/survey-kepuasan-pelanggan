<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
                <div class="p-4 sm:ml-64">
                    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                       
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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

    
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                       No
                    </div>
                </th>
                <th scope="col" class="px-2 py-3">
                    Action
                </th>
                <th scope="col" class="px-6 py-3">
                    Map
                </th>
            </tr>
        </thead>
        <tbody>

                @foreach ($maps as $map)
                    
                
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            {{ $loop->iteration }}
                    </div>
                </td>
                <td class="px-6 py-4">
                    
                    <a href="{{ url('/dashboard/alamat/edit', $map->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-1">Edit</a>
                    {{-- <a href="/dashboard/tanya/{{ $pertanyaannya->id }}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-1">Edit</a> --}}
                   
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 text-wrap dark:text-white">
                    {{ $map->map }}
                </th>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

          
                    </div>
                 </div>
                 
            </div>

            

        </div>
    </div>
</x-app-layout>