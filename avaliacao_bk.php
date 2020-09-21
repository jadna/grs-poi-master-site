<?php

    include("conexao.php");
    if (!isset($_SESSION)) session_start();

    //print("<pre>".print_r($_POST,true)."</pre>");
    $aux = 0;
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    for($i=1; $i<=count($_POST); $i++){

        if(!empty($_POST['poiId'.$i])){
            
            $dados[$aux]['poiId'] = $_POST['poiId'.$i];
            $dados[$aux]['rating'] = $_POST['rating'.$i];
            $aux++;     
        }  
    }

    //print("<pre>".print_r($dados,true)."</pre>");
    
    $sql_user = "UPDATE usuarios SET latitude = ".$latitude.", longitude = ".$longitude." WHERE id =".$_SESSION['userId'].";";
    $res = mysqli_query($conn, $sql_user);
    if (!$res) {
        echo "Error: " . $sql_user . "<br>" . mysqli_error($conn);
    }

    foreach($dados as $data){

        $sql = "INSERT INTO rating(userId,poiId,rating) VALUES(".$_SESSION['userId'].",".$data['poiId'].",".$data['rating'].");";
        $resultado = mysqli_query($conn, $sql);
        
    }

    if ($resultado and $res) {
        echo"<script language='javascript' type='text/javascript'>
            alert('Avaliação salva com sucesso!');window.location
            .href='avaliacao.php';</script>";
    } else {

        echo"<script language='javascript' type='text/javascript'>
            alert('Erro ao salvar a avaliação');window.location
            .href='avaliacao.php';</script>";
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


?>