<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAAR</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <script src="{{ asset('style.js') }}"></script>
    <style>
        .cust-body{
            @yield('body-img')
        }
    </style>
</head>
<body class="cust-body custom-bg">
        <header class="container-fluid">
                        <!-- row header   -->
                        <div class="row">
                            <div class="col-sm-3 col-md-12 d-flex align-items-end user-label justify-content-end">
                                <h1 class="deep-gray font-rawline small mr-1">Olá,</h1>
                                <h1 class="deep-gray font-rawline small"><strong>Usuário</strong></h1>
                                <div class="icon-arrow"></div>
                            </div>
                        </div>
                            <!-- 2 header -->
                        <div class="row">
                                <a class="btn col-sm-8 col-md-6 d-flex align-items-center">
                                    <div class="icon-menu mr-2"></div>
                                    <h1 class="deep-gray font-rawline small pt-2">Departamento Nacional de Infraestrutura de Transportes</h1>
                                </a>
                        </div>
                    </div>
        </header>
        <main class="container-fluid h-100">
                @yield('content')
        </main>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
