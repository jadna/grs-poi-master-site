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
                            <a class="nav-link js-scroll-trigger" href="#pesquisa">Pesquisa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#instrucoes">Instruções</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="cadastro.php"> Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="login.php"> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="https://www.mapdevelopers.com/what-is-my-address.php" target="_blank"> Coordenada</a>
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


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div id="pesquisa" class="row">
            <div class="col-lg-102" style="align: center;">
                <h2 style="text-align: center;">Objeto da pesquisa </h2>
                <p class="lead" style="text-align: justify;">Neste trabalho estamos desenvolvendo um Sistema de Recomendação de Pontos de Interesse (POI) para Grupos. 
                    Pontos de Interesse podem ser bares, restaurantes, museus, parques, monumentos, locais de atrações turísticas na cidade, praias, 
                    eventos, etc. Tais recomendações se baseiam nas preferências dos grupos de usuários e sua localização geográfica, logo o objetivo 
                    mor é recomendar POIs que estejam geograficamente mais mais próximos do grupo que atendam seus interesses simultaneamente.
                </p>    
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div id="instrucoes" class="row featurette">
            <div class="col-md-12" align="center">
                <h2 style="text-align: center;">Instruções de Participação </h2>
                <p class="lead"></p>
                <ol>
                    <!--li style="text-align: justify;">Acesse o link <a href="#avaliacao">da avaliação</a> e cadastre seus dados pessoais, como nome e e-mail. Essas informações serão utilizadas para futuro contato. Após o experimento, essas informações serão apagadas da base de dados.</li-->
                    <li style="text-align: justify;">Acesse o link <a href="cadastro.php">cadastro</a> e crie seu usuário informando um e-mail e senha. Após o experimento, essas informações serão apagadas da base de dados.</li>
                    <li style="text-align: justify;">Após a criação do usuário você será redirecionado para página de login, efetue o login para ter acesso ao sistema.</li>
                    <li style="text-align: justify;">Informe sua (ou uma preferida) posição geográfica (latitude e longitude). Se quiser saber sua coordenada acesse o link <a href="https://www.mapdevelopers.com/what-is-my-address.php" target="_blank">Coordenadas</a> no topo do site.</li>
                    <li style="text-align: justify;">Ao entrar no sistema avalie pelo menos 20 POIs, atribuindo notas de 1 a 5 (onde 1 indica que não gostou daquele local e 5 você gostou muito). Locais não visitados não precisam ser avaliados. NÃO ESQUEÇA DE CLICAR EM SALVAR!</li>
                    <li style="text-align: justify;">Após as coletas de dados, será criado grupos aleatórios de 3, 5 e 10 pessoas, então você e seu GRUPO receberá um e-mail com as recomendações de pontos de interesse a partir das informações providas nos itens 2 e 3.</li>
                    <!--li style="text-align: justify;">Para cada item de recomendação, avalie com notas de 1 a 5 (onde 1 indica que não gostou daquele local e 5 você gostou muito).</li>
                    <li style="text-align: justify;">Após as coletas de dados, você receberá um e-mail  com as recomendações de pontos de interesse a partir das informações providas nos itens 3 e 4. Para cada item de recomendação, avalie com notas de 1 a 5 (onde 1 indica discorda totalmente, e 6 que concorda totalmente).</li-->
                </ol> 
            </div>
        </div>

        

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p>&copy; 2020, Jadna Almeida</p>
    </footer>
    </main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
