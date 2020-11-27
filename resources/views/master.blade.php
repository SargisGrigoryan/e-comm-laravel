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
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        section{
            padding: 50px 0;
            min-height: calc(100vh - 171px);
        }
        .top-product-image{
            max-height: 250px;
        }
        .product-image{
            max-height: 350px;
        }
        .product-bg{
            border: 1px solid transparent;
            width: fit-content;
            margin: 0 auto;
            transition: border 0.3s ease-in-out;
        }
        .product-bg:hover{
            border-bottom: 1px solid #707070;
            cursor: pointer;
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