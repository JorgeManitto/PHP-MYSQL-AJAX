<?php 
    include_once 'include/funciones.php';

    $todos = new Todos();

    if(isset($_POST['delete'])){
        $todos -> eliminarTodo($_POST['delete']);
        header('location:../index.php');
    }
    ?>