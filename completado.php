<?php
    include_once 'include/funciones.php';

    $todos = new Todos();
        
        $lista = $todos -> mostrarCompletados();
        $data ='';
        echo '<button onclick="cargarTodos()" class="btn_comp_incomp">volver</button>';
        foreach ($lista as $todo) {
        if($todo['completado']){
            $data = 'checked';
            $classbg = 'bg-label';
            $classi = 'inputChange';
        }else{
            $data     = '';
            $classbg  = '';
            $classi   = '';
        }

        
        echo '<div class="text_content">
        <label class="cb cb2 '.$classbg.'" >
        <input type="checkbox" name="check" class="checkbox " onclick="cbChange(this,'.$todo['id'].')"'.$data.'><i class="'.$classi.'"></i>
        <span>'.$todo['texto'].'</span>

        
        <button  onclick="eliminarTodo('.$todo['id'].')" class="delete">Eliminar</button>
        </div>';
    }
    
        

?>