<?php

include '../modelos/UsuarioDao.php';

class UsuarioControlador
{

    public static function login($User, $Clave)
    {

        $obj_usuario = new Usuarios();
        $obj_usuario->setUser($User);
        $obj_usuario->setClave($Clave);

        return UsuarioDao::login($obj_usuario);
    }

    public static function getUsuario($User, $Clave)
    {

        $obj_usuario = new Usuarios();
        $obj_usuario->setUser($User);
        $obj_usuario->setClave($Clave);

        return UsuarioDao::getUsuario($obj_usuario);
    }


    public static function info($Titulo, $Dirre_correo, $Foto, $Contenido)
    {

        $obj_info = new Informacion();
        $obj_info->setTitulo($Titulo);
        $obj_info->setDirre_correo($Dirre_correo);
        $obj_info->setFoto($Foto);
        $obj_info->setContenido($Contenido);
      

        return UsuarioDao::informacion($obj_info);
    }

    public static function getInfo()
    {

        return UsuarioDao::getInformacion();
    }




}
