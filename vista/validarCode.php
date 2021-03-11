<?php

include '../controlador/UsuarioControlador.php';


session_start();

header("Content-type: application/json");
$resultado = array();


if (isset($_POST["txtUser"]) && isset($_POST["txtClave"])) {

    $txtUser = ($_POST["txtUser"]);
    $txtClave =  ($_POST["txtClave"]);

    $resultado = array("estado" => "true");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (UsuarioControlador::login($txtUser, $txtClave)) {
            

            $usuario = UsuarioControlador::getUsuario($txtUser, $txtClave);
            $_SESSION["usuario"] = array(
                "id" => $usuario->getId(),
                "User" => $usuario->getUser(),
                "Clave" => $usuario->getClave(),
             
                

            );

            return print(json_encode($resultado));
        }
    }
}


$resultado = array("estado" => "false");

return print(json_encode($resultado));
