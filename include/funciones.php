<?php
include_once 'db.php';

class Todos extends DB{

     function nuevoTodo($texto){

      if(!empty($texto)){
        $query  = $this -> connect()->prepare('INSERT INTO todolist.todotable(texto, completado) VALUES (:texto ,0)');
        $query-> execute(['texto' => $texto] );
      }        
    }
      function mostrarTodos(){
        return $this -> connect ()->query('SELECT * FROM todolist.todotable ORDER BY timestamp DESC');
      }
      function mostrarCompletados(){
        return $this -> connect ()->query('SELECT * FROM todolist.todotable WHERE todotable.completado = 1');
      }
      function mostrarIncompletos(){
        return $this -> connect ()->query('SELECT * FROM todolist.todotable WHERE todotable.completado = 0');
      }

      function eliminarTodo($id){
        return $this -> connect ()->query("DELETE FROM  todolist.todotable WHERE `todotable`.`id` = $id");
      }
      function changetrue($id){
        return $this -> connect()->query("UPDATE todolist.todotable SET completado = '1' WHERE `todotable`.`id` = $id");
        
      }
      function changefalse($id){
        return $this -> connect()->query("UPDATE todolist.todotable SET completado = '0' WHERE `todotable`.`id` = $id");
        
      }
}

// $todos->eliminarTodo($todo['id'])
     