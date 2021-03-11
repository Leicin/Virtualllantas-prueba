<?php
include 'Conexion.php';
include '../entidades/usuario.php';
include '../entidades/informacion.php';



class UsuarioDao extends Conexion
{

    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    /**
     * Metodo que sirve para validar el login
     */

    public static function login($usuario)
    {

        $query = "SELECT * FROM usuario WHERE User = :User AND Clave = :Clave";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $usu = $usuario->getUser();
        $pass = $usuario->getClave();

        $resultado->bindValue(":User", $usu);
        $resultado->bindValue(":Clave", $pass);

        $resultado->execute();
        /**
         * Evitar Inyecciones sql
         */
        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch();
            if (
                $filas["User"] == $usuario->getUser()
                && $filas["Clave"] == $usuario->getClave()


            ) {
                return true;
            }
        }

        return false;
    }

    /**
     * Metodo que sirve para obtener un usuario
     */

    public static function getUsuario($usuario)
    {

        $query = "SELECT id,User,Clave FROM usuario WHERE User = :User AND Clave = :Clave";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $usu = $usuario->getUser();
        $pass = $usuario->getClave();

        $resultado->bindValue(":User", $usu);
        $resultado->bindValue(":Clave", $pass);

        $resultado->execute();

        $filas = $resultado->fetch();

        $usuario = new Usuarios();
        $usuario->setId($filas["id"]);
        $usuario->setUser($filas["User"]);
        $usuario->setClave($filas["Clave"]);


        return $usuario;
    }







    /**
     * registro de informacion
     */
    public static function informacion($informacion)
    {

        $query = "INSERT INTO info (
        Titulo,Dirre_correo,Foto,Contenido) VALUES
        (:Titulo, :Dirre_correo, :Foto, :Contenido)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);


        $resultado->bindValue(":Titulo", $informacion->getTitulo());
        $resultado->bindValue(":Dirre_correo", $informacion->getDirre_correo());
        $resultado->bindValue(":Foto", $informacion->getFoto());
        $resultado->bindValue(":Contenido", $informacion->getContenido());

        if ($resultado->execute()) {
            return true;
        }
        
        unlink($informacion->getFoto());
        return false;
    } 

      /**
     * Metodo que sirve para obtener todos la información
     */

    public static function getInformacion()
    {

        $query = "SELECT id,Titulo,Dirre_correo,Foto,Contenido,fecha_registro FROM info ORDER BY fecha_registro DESC";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filasInfo = $resultado->fetchAll();


        return $filasInfo;
    }

    
}
