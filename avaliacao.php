<?php
    session_start();
    $handle = fopen("dados.csv", "r");
    $row = 0;
    while ($line = fgetcsv($handle, 1000, ",")) {
        if ($row++ == 0) {
            continue;
        }
        
        $pois[] = [
            'poiId' => $line[0],
            'latitude' => $line[1],
            'longitude' => $line[2],
            'name' => $line[3],
            'preference' => $line[4]
        ];
    }

    fclose($handle);
?>


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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            function update(val, poi, idInput) {
  
               // alert(teste);
                //alert("Radio button changed to " + val + "POIS: " + poi +" " + idInput);
                if(val != 0){
                    
                    var id = "poiId"+idInput;
                    document.getElementById(id).value = poi;
                }                
            }
        </script>
        <header style="background-image: url(background.jpg);">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="index.php">Group Systems Recommendation for POI</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="https://www.mapdevelopers.com/what-is-my-address.php" target="_blank"> Coordenada</a>
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

        <div class="container">
            <form method="POST" action="avaliacao_bk.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="latitude">Latitude</label>
                        <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="longitude">Longitude</label>
                        <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude" required>
                    </div>
                </div>
                <hr class="featurette-divider">

                <?php
                    //Columns must be a factor of 12 (1,2,3,4,6,12)
                    $numOfCols = 4;
                    $rowCount = 0;
                    $bootstrapColWidth = 12 / $numOfCols;
                    foreach ($pois as $poi){
                    if($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php } 
                        $rowCount++;
                        $radio_button = "rating".$rowCount;
                        $poiId = "poiId".$rowCount;?>  
                            <br/>
                            <div id="div_ratings" class="col-md-<?php echo $bootstrapColWidth; ?>">
                                <label for=<?=$radio_button?>><?=$poi['name']?></label><br>
                                <div class="form-check form-check-inline" style="margin-bottom: 20px;">
                                    <input onclick="update(this.value, <?=$poi['poiId']?>, <?=$rowCount?>);" class="career_ratings" type="radio" id=<?=$radio_button?> name=<?=$radio_button?> value="1"/><label class="form-check-label" style="margin-right: 5px;">1</label>
                                    <input onclick="update(this.value, <?=$poi['poiId']?>, <?=$rowCount?>);" class="career_ratings" type="radio" id=<?=$radio_button?> name=<?=$radio_button?> value="2"/><label class="form-check-label" style="margin-right: 5px;">2</label>
                                    <input onclick="update(this.value, <?=$poi['poiId']?>, <?=$rowCount?>);" class="career_ratings" type="radio" id=<?=$radio_button?> name=<?=$radio_button?> value="3"/><label class="form-check-label" style="margin-right: 5px;">3</label>
                                    <input onclick="update(this.value, <?=$poi['poiId']?>, <?=$rowCount?>);" class="career_ratings" type="radio" id=<?=$radio_button?> name=<?=$radio_button?> value="4"/><label class="form-check-label" style="margin-right: 5px;">4</label>
                                    <input onclick="update(this.value, <?=$poi['poiId']?>, <?=$rowCount?>);" class="career_ratings" type="radio" id=<?=$radio_button?> name=<?=$radio_button?> value="5"/><label class="form-check-label" style="margin-right: 5px;">5</label>
                                    <input type="hidden" name=<?=$poiId?> id=<?=$poiId?>>
                                </div> 
                            </div>
                <?php
                    if($rowCount % $numOfCols == 0) { ?> </div> <?php } } ?>
              
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="salvar" name="salvar">Salvar</button>
            </form>
        </div>

        <!-- FOOTER -->
        <footer class="container">
            <p>&copy; 2020, Jadna Almeida</p>
        </footer>
    </main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
