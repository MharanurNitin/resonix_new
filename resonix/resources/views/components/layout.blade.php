<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="../client/css/index.css" />
    <link rel="stylesheet" href="../client/css/custom.css" />
    <!-- Quicksand font -->
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    {{-- font awesome CDN links --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <title>{{$title}}</title>
    <meta name='description' content="@yield('meta_description')">
    <meta name='keyword' content="@yield('meta_keyword')">
    
</head>
<body >
    {{-- <div class="main-container flex flex-col w-screen border-8 border-green-300 overflow-hidden"> --}}
@include('include.header')
{{$content}}
@include('include.footer') 

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>