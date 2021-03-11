<?php


session_start();
if (($_SESSION["usuario"]) != '') {

?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Prueba</title>

        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">


    </head>

    <body>

        <?php


        include "../controlador/UsuarioControlador.php";
        $filasInfo = UsuarioControlador::getInfo();



        ?>

        <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">



            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a id="a_metrolegal" class="navbar-brand text-white"></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                    <li class="nav-item active">
                        <a id="a_login" class="nav-link text-white" href="logueo.php">Login <span class="sr-only">(current)</span></a>
                    </li>

                </ul>

                <p style=" margin-bottom: 4px;">
                    <a id="btn_cerrar" href="cerrar_sesion.php" class="btn"><i class="fa fa-close"></i>Cerrar sesion</a>
                </p>
            </div>
        </nav>

        <br>
        <br>
        <br>

        <div class="container mt-5 ml-3">

            <form id="info" name="info" action="../logic_post/informacion_post.php" method="POST" enctype="multipart/form-data">
                <div class="container-fluid">
                    <div class="row bg-danger">
                        <div class="col-md-8">


                        </div>
                    </div>
                </div>
                <div class="container col-md-9 ml-5">

                    <div class="form-group row shadow p-3 mb-5 bg-white rounded-0" style="border: 1px solid red">
                        <div class="col-md-8 mt-3">
                            <label for="tipo_equi">Titulo:</label>
                            <input type="text" class="form-control" name="txtTitulo" id="Titulo" autocomplete="off" required autofocus placeholder="Ingrese el titulo"></input>
                        </div>


                        <div class="col-md-8 mt-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="txtEmail" id="Email" autocomplete="off" required autofocus placeholder="Ingrese el email"></input>
                        </div>

                        <div class="col-md-4">
                        </div>

                        <div class="col-md-4  mt-3">

                            <span class="btn btn-block btn-file">
                                Subir imagen<input id="inputFile1" required name="txtFoto" type="file">
                            </span>

                        </div>



                        <div class="col-md-10 mt-3">

                            <div class="form-group">
                                <label for="Contenido">Contenido:</label>
                                <textarea class="form-control" name="txtContenido" id="Contenido" rows="3" placeholder="Ingrese el contenido"></textarea>
                            </div>

                        </div>


                        <div class="col-md-12 mb-1 mr-5">

                            <button type="submit" class="btn btn-outline-danger btn-lg
                              mt-5">Guardar
                            </button>

                        </div>




                    </div>







                </div>
            </form>
        </div>

        <div class="ml-5 mb-5">
            <h1 class="text-left ml-3">Lista de post</h1>
        </div>

        <?php foreach ($filasInfo as $informacion) {  ?>

            <div class="container mt-5 ml-5">


                <div class="container">
                    <div class="row bg-danger">
                        <div class="col-md-12">
                            <h3 class="mt-1"><?php echo $informacion["Titulo"] ?></h3>
                            <h3 class="text-right"><?php echo $informacion["fecha_registro"] ?></h3>

                        </div>
                    </div>
                </div>
                <div class="container-fluid">

                    <div class="form-group row shadow p-3 mb-5 bg-white rounded-0" style="border: 1px solid red">
                        <div class="col-md-6 mt-4">
                            <img width="100%" class="img-fluid img-thumbnail" src="<?php echo $informacion["Foto"]; ?> ">
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="form-group">
                                
                                <textarea disabled class="form-control" rows="3"><?php echo $informacion["Contenido"] ?></textarea>
                            </div>
                        </div>
                      
                       







                    </div>


                </div>




            </div>

        <?php  } ?>

        </div>





        <script src="../jquery/jquery-3.4.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../popper/popper.min.js"></script>

        <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="../js/info.js"></script>
    </body>

    </html>

<?php
} else {

    header("Location:logueo.php");
}

?>