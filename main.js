document.getElementById('bEnviar').addEventListener('click', function(e){
    e.preventDefault();
   nuevoTodo();
   let todo = document.getElementById('todo');
   todo.innerHTML='dsd'
});
const mostrar_todo = document.getElementById("mostrar-todo-container")
const nuevoTodo = ()=>{
    let todo = document.getElementById('todo');
    let header = "todo=" + todo.value;

    fetch("nuevo-todo.php",{
        method: 'POST',
        headers:{
            'Content-Type':'application/x-www-form-urlencoded'
        },
        body: header
    })
    .then(function(response) {
        if(response.ok) {
            cargarTodos()
            // return response
        } else {
            throw "Error en la llamada Ajax";
        }
     })
     .then(function(texto) {
        // console.log(texto);
     })
     .catch(function(err) {
        console.log(err);
     });
}

const cargarTodos = ()=>{
   
    fetch('mostrar-todos.php')
    .then( response => response.text() )
    .then( resultText => {
        // console.log(resultText)
        mostrar_todo.innerHTML = resultText;
    } )
    .catch( err => console.log(err) );

}


const cargarCompletado = ()=>{
    fetch('completado.php')
    .then(response => response.text())
    .then (resultText => {
        mostrar_todo.innerHTML = resultText;
        // console.log(resultText);
    })
    .catch(err => console.log(err));
}
const completo = document.getElementById('btn_complete').addEventListener('click', cargarCompletado);

const cargarIncompleto = () => {
    fetch('incompleto.php')
    .then(response => response.text())
    .then(resultText => {
        mostrar_todo.innerHTML = resultText;
    })
    .catch(err => console.lolg(err));
}

const incompleto = document.getElementById('btn_incomplete').addEventListener('click',cargarIncompleto); 

// function nuevoTodo(){
//     const todo = document.getElementById('todo');
//     let header = "todo=" + todo.value;
//     console.log(header)
//     let xmlhttp = new XMLHttpRequest();

//     xmlhttp.onreadystatechange = function(){
//         if(this.readyState == 4 && this.status == 200){
//             cargarTodos();
//         }
//     }
//     xmlhttp.open('POST',"nuevo-todo.php",true);
//     xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
//     xmlhttp.send(header);
// }

// function cargarTodos(){
//     let xmlhttp = new XMLHttpRequest();
//     xmlhttp.onreadystatechange = function (){
//         if(this.readyState == 4 && this.status == 200){
//          document.getElementById("mostrar-todo-container").innerHTML = this.responseText;
//             console.log(this.responseText);
//         }
//     }

//     xmlhttp.open("GET","mostrar-todos.php",true);
//     xmlhttp.send();
// }

const eliminarTodo = (obj) =>{
    let header = 'delete=' + obj

    fetch("eliminar-todo.php",{
        method: 'POST',
        headers:{
            'Content-Type':'application/x-www-form-urlencoded'
        },
        body: header
    })
    .then( 
        response => { cargarTodos()}
     )   
}

const cbChange = (obj,id)=>{
    if(obj.checked){

        let header = 'upload=' + id
        
        fetch('completado-todo.php',{
            method:'POST',
            headers:{
                'Content-Type':'application/x-www-form-urlencoded'
            },
            body:header
        })
        .then(
            response => { cargarTodos()}
        )
    }
    else{
        let header = 'upload=' + id

        fetch('incompleto-todo.php',{
            method:'POST',
            headers:{
                'Content-Type':'application/x-www-form-urlencoded'
            },
            body:header
        })
        .then(
            response => { cargarTodos()}
        )
    }
}

  
 