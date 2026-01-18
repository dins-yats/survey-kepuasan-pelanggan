<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
    @vite(['resources/css/app.css','resources/js/app.js'])

    <title>Survei</title>
</head>
<body class="bg-slate-950">
    
    @include('bagian.navbarsecond')
    <div class=" container mt-10">
        @yield('container')
    </div>
    
    @include('bagian.footer')


</body>
</html>