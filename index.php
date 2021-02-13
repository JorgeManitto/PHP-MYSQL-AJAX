<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>
    <div class="conteiner">
                    
            <form id="nuevo-pendiente-conteiner" action="" method="post" class="form">
                <h2 class="title">TODO AXAJ</h2>
                <input type="text" name="todo" id="todo" class="input_todo">
                <br>
                
                <div class="btn-row">
                
                <input type="submit" value="ENVIAR" id="bEnviar" class="btn_todo">
                
                </div>
            </form>
            
            <div id="mostrar-todo-container" class="content">
            </div>
            <div class="btn_show">
                <button id="btn_complete" class="btn_comp_incomp">
                    Mostrar completados
                </button>
                <button id="btn_incomplete" class="btn_comp_incomp">
                    Mostrar incompletos
                </button>
            
            </div>   
                </div>

            

                
    <script src="main.js"></script>
    <script>cargarTodos();</script>
    
</body>
</html>

