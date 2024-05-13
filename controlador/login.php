<?php
/*
user: isai
pass: 123
*/

//creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie
session_start();

// if the btn login has been pressed
if(!empty($_POST["btningresar"])){
    // if the "user" and "password" fields are not empty
    if(!empty($_POST["usuario"]) and !empty($_POST["password"])){
        $usuario = $_POST["usuario"];//isai
        // we decrypt the password
        $password = md5($_POST["password"]);//123
        //we make a query to the database
        $sql = $conexion->query("select * from usuario where usuario = '$usuario' and password = '$password'");
        // if $sql got any result from the previous query
        $datos = $sql->fetch_object();
        if($datos){
            // we store the attributes obtained from the query for later use
            $_SESSION["nombre"] = $datos->nombre;
            $_SESSION["apellido"] = $datos->apellido;
            // If a result was found that matches the username and password entered, we will redirect you.
            header("location:../inicio.php");
        }
        else{
            echo "<div class='alert alert-danger'> [usuario] o [password] incorrecto </div>";
        }
        

    }
    else{
        echo "<div class='alert alert-danger'> Los campos [usuario] y [password] están vacios </div>";
    }
}





?>