<?php

include '../controlador/UsuarioControlador.php';


session_start();



header("Content-type: application/json");
$resultado = array();



/**
 * registro información
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        isset($_POST["txtTitulo"]) && isset($_POST["txtEmail"])
       && isset($_POST["txtContenido"])
    ) {

        $txtTitulo = ($_POST["txtTitulo"]);
        $txtEmail = ($_POST["txtEmail"]);
        $txtContenido = ($_POST["txtContenido"]);


        $txtFoto = $_FILES['txtFoto']['name'];//Nombre de la foto
        $ruta = $_FILES['txtFoto']['tmp_name'];//ruta o path del archivo
        $foto = '../Uploads/Usuarios/' . time() . $txtFoto; //ruta y nombre del archivo

        copy ($ruta,$foto);//Guarda archivo en ruta especifico

        $resultado = array("estado" => "true");


        if (UsuarioControlador::info($txtTitulo, $txtEmail, $foto, $txtContenido)) {

            header("location:../vista/informacion.php");
        }
    }
} else {

    header("location:logueo.php?error=1");
}
