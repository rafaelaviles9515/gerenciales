<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="pagina web" />
        <meta name="author" content="rafael" />

        <title>@yield('title','Gerenciales')</title>
        

          <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        @yield('boostrap')
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
                <div class="container">
                    <a href="#" class="navbar-brand">Inicio</a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav">
                            <li class="nav-item px-2">
                                <a href="#" class="nav-link active">Lista</a>
                            </li>

                            <li class="nav-item px-2">
                                <a href="#" class="nav-link active">Lista1</a>
                            </li>

                            <li class="nav-item px-2">
                                <a href="#" class="nav-link active" >Lista2</a>
                            </li>

                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item mr-3">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-user"></i>
                                    <span>Bienvenido:</span>
                                    <span>Usuario</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <form method="POST">
                                    <a href="#" onclick="this.parentNode.submit();" class="nav-link">
                                        <i class="fas fa-user-times"></i>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section id="main-header" class="py-2 bg-info text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>
                                <i class="fas fa-cog"></i>Sistema Gerencial
                            </h1>
                        </div>
                    </div>
                </div>
            </section>

        @yield('content')
        
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2021 - Gerenciales</div></div>
        </footer>

        @yield('finalboostrap')
    </body>
</html>