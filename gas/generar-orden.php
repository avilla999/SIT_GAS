<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>GAS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <?php

    include('dbconnect.php');
        $query = "SELECT * FROM receptores ORDER BY nombre ASC";

    $result = mysqli_query($conn, $query);
    ?>


    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="index.php">
                                                <!--<img src="assets/images/logos.png" style="height:180px; width:200px;"/>-->
                                            </a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav" style="padding-left:150px;">
                                                <li><a href="generar-orden.php" style="font-size:20px;">RECEPTORES</a></li>
                                                <li><a href="ver-ordenes.php" style="font-size:20px;">VER VALES</a></li>
                                                <li><a href="registrar-cliente.php" style="font-size:20px;">REGISTRAR RECEPTOR</a></li>
                                            </ul>


                                        </div>

                                    </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->
        </div><br><br><br><br><br><br><br><br><br>

        <!-- CONTENIDO VARIABLE -->

        <section id="about" class="about">
                <div class="container" style="width:100em; overflow-x: auto;">
                    <div class="row">

                        <div class="main_about_area sections">
                            <div class="col-sm-10 col-sm-offset-1">

                                <div class="main_about_content">
                                    <div class="row">
                                        <div class="col-sm-4 wow fadeInRight" data-wow-duration="700ms">
                                            <div class="single_about_right_content">
                                                <h2>RECEPTORES</h2> 
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            
                                        </div>
                                        <!-- <form role="form" action="generar-orden.php" method="get">
                                        <div class="col-sm-4">
                                            <input type="text" name="filtro" class="form-control">
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn bg-success btn-block">Buscar</button>
                                        </div>
                                    </div><br><br></form> -->
                                        <div class="row">
                                        <div class="col-sm-12 wow fadeInRight" data-wow-duration="700ms">
                                            <div class="single_about_right_content">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="font-size:20px;">Nombre</th>
                            <th style="font-size:20px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        while($row = mysqli_fetch_assoc($result)){

                        
                        ?>
                        <tr>
                            <td style="font-size:18px;"><?php echo $row['nombre']; ?></td>
                            <td>
                                <a href="crear-orden.php?id=<?php echo $row['id']; ?>" class="btn btn-success" role="button">Generar vale</a>
                                <a href="editar-cliente.php?id=<?php echo $row['id']; ?>" class="btn btn-success" role="button">Editar</a>
                            </td>
                        </tr>
                        <?php
                    }

                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table><br><br>
                <a href="registrar-cliente.php" class="btn btn-success" role="button">Nuevo Receptor</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- HASTA AQUÍ CONTENIDO VARIABLE -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>