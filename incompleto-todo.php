<?php 
    include_once 'include/funciones.php';

    $todos = new Todos();

    if(isset($_POST['upload'])){
        $todos -> changefalse($_POST['upload']);
        header('location:../index.php');
    }
    ?>