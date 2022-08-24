<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Page Not Found</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-200">
    <main>
        <h2 class="mt-5 text-xl font-sans font-bold text-center">Halaman tidak dapat diakses, sayang sekali :(</h2>
        <h1 class="text-8xl font-sans font-bold text-white">403</h1>
        <div class="mt-5 text-sm text-center"><a href="{{ URL::previous() }}" class="btn p-3 rounded-md w-full bg-[#FF3087] text-[#EEEFF2]">Kembali</a></div>
    </main>
</body> 
</html>