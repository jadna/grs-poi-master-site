<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.1.1">

        <title>Recomendação de Pontos de Interesse para Grupos de Indivíduos</title>


        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

        <!-- Bootstrap core CSS -->
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <style>
            .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            }

            @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
    </head>
    <body>
        <header style="background-image: url(background.jpg);">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="index.php">Group Systems Recommendation for POI</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#">Avaliação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="cadastro.php"> Coordenadas</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link js-scroll-trigger" href="logout.php"> Logout</a>
                      </li>
                    </ul>
                </div>
            </nav>
        </header>

    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-image: url(background.jpg);">
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 18rem;">        
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1>Avaliação Experimental</h1>
                            <h2>Recomendação de Pontos de Interesse para Grupos de Indivíduos</h2>
                            <p class="lead">Aqui estão apresentas as instruções para participação no experimento com o objetivo de validar o tema da pesquisa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container marketing">
            <form method="POST" action="login.php">
                <section id="login_div">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 mx-auto" style="text-align: center;">
                                <h2>Login</h2>
                                <label>Email: </label><input type="email" name="login" id="login" placehold="email" autofocus><br>
                                <label>Senha: </label><input type="password" name="senha" id="senha" placehold="senha" autofocus><br>
                                <input type="submit" value="entrar" id="entrar" name="entrar"><br>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
            <hr class="featurette-divider">
        </div><!-- /.container -->

        <div>
          <h2 style="text-align: center;">Avaliação Experimental</h2>
          <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdEQ6H_0oK5UNhcfK194FADq836g4uGHp7h2YRv-Mn29ZKxsQ/viewform?embedded=true" width="640" height="800" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
        
          <hr class="featurette-divider">
        </div>


        <!-- FOOTER -->
        <footer class="container">
            <p>&copy; 2020, Jadna Almeida</p>
        </footer>
    </main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
