<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>



    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/js/axios.min.js')}}"></script>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
    @include('components.navbar')

    <div class="" id="content-div">
        @yield('content')
    </div>
</main>
    @include('components.footer')




    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    </body>
    </html>
