<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm project</title>

    {{-- Bootstrap css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    {{-- Main css --}}
    <style>
        section{
            padding: 50px 0;
            min-height: calc(100vh - 171px);
        }
    </style>
</head>
<body>
    {{-- Header --}}
    @include('header')

    {{-- Content --}}
    @yield('content')
    
    {{-- Footer --}}
    @include('footer')

    {{-- Jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    {{-- Main js --}}
</body>
</html>