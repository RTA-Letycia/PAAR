<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAAR</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}"> 
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
    <script src="{{ asset('style.js') }}"></script>
    <style>
        .cust-body{
            @yield('body-img')
        }
    </style>
</head>
<body class="cust-body custom-bg">
        <header class="container-fluid">
                    <div class="row flex-column">
                        <!-- row header    -->
                        <div class="row justify-content-end">
                            <div class="col-12 col-md-6 col-lg-2 d-flex justify-content-end align-items-end mr-5 p-0">
                                <h1 class="deep-gray font-rawline small mr-1">Olá,</h1>
                                <h1 class="deep-gray font-rawline small"><strong>Usuário</strong></h1>
                                <div class="icon-arrow"></div>
                            </div>
                        </div>
                            <!-- 2 header -->
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-12 d-flex align-items-center ml-5 p-0">
                                <div class="icon-menu mr-2"></div>
                                <h1 class="deep-gray font-rawline small pt-2">Departamento Nacional de Infraestrutura de Transportes</h1>  
                            </div>
                        </div>
                    </div>
        </header>
    <main>
        <div class="container-fluid">
            @yield('content')
        </div>
    </main> 
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script> 
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>