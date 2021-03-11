<?php

include '../controlador/UsuarioControlador.php';


session_start();



header("Content-type: application/json");
$resultado = array();



/**
     * registroempresa
     */
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["txtTitulo"]) && isset($_POST["txtEmail"])
    && isset($_POST["txtContenido"]))
     {

        $txtTitulo = ($_POST["txtTitulo"]);
        $txtEmail = ($_POST["txtEmail"]);
        $txtContenido = ($_POST["txtContenido"]);

        // codigo de la imagen 
        $txtFoto = $_FILES['txtFoto']['name'];//Nombre de la 
        $ruta = $_FILES['txtFoto']['tmp_name'];//ruta o path del archivo
        $foto = '../Uploads/Usuarios/' . time() . $txtFoto; //ruta y nombre del archivo
        copy ($ruta,$foto);//Guarda archivo en ruta especifica
     
      
     
    
        $resultado = array("estado" => "true");
    
    
            if (UsuarioControlador::info($txtTitulo, $txtEmail, $foto, $txtContenido)) {
                
    
    
                return print(json_encode($resultado));
            }
        }
    
    
    }
    $resultado = array("estado" => "false");
    header("Location:informacion.php");
    
    // return print(json_encode($resultado));