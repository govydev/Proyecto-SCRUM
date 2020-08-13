<?php 
class formArticuloBusqueda{
    public function formArticuloBusquedaShow($list){?>

        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>Scrum</title>

                <!-- Google font -->
                <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

                <!-- Bootstrap -->
                <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>

                <!-- Slick -->
                <link type="text/css" rel="stylesheet" href="../css/slick.css"/>
                <link type="text/css" rel="stylesheet" href="../css/slick-theme.css"/>

                <!-- nouislider -->
                <link type="text/css" rel="stylesheet" href="../css/nouislider.min.css"/>

                <!-- Font Awesome Icon -->
                <link rel="stylesheet" href="../css/font-awesome.min.css">

                <!-- Custom stlylesheet -->
                <link type="text/css" rel="stylesheet" href="../css/style.css"/>

                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->

            </head>
            <body>
                <!-- HEADER -->
                <header>
                    <!-- TOP HEADER -->
                    <!-- /TOP HEADER -->

                    <!-- MAIN HEADER -->
                    <div id="header">
                        <!-- container -->
                        
                        <div class="container">
                            <!-- row -->
                            <div class="row">
                                <!-- LOGO -->
                                <div class="col-md-1">
                                    <div class="header-logo">
                                        
                                        <a href="../index.php" class="logo">
                                    
                                            <img src="../img/logo.png" alt="">
                                        </a>
                                    </div>
                                    
                                </div>
                                <!-- /LOGO -->

                                <!-- SEARCH BAR -->
                    <!-- /MAIN HEADER -->
                    <div id="newsletter" class="section">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="newsletter">
                                    <?foreach($list as $value){?>
                                    <p class="text-muted">Capitulo <strong><?=$value[4]?></strong>  - Articulo <strong><?=$value[1]?></strong></p>
                                    <p class="text-muted"><strong><?=$value[2]?></strong></p><?}?>
                                    <div class="header-search">
                                    <?if ($list == null) {
                                        # code...
                                    }else{
                                        for($i=0; $i<1; $i++){?>
                                                <a href="capitulo.php?id=<?=$list[$i][4]?>" class="btn btn-success">Regresar a ver el Capitulo</a>
                                            <?}?>
                                    <?}?>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                </header>
                <!-- SECTION -->
                <div class="section">
                    <!-- container -->
                    <?foreach ($list as $value){?>
                        <a href=""><?=$value[3]?></a>
                    <?}?>
                </div>
            </body>
        </html>


    <?}
}
?>