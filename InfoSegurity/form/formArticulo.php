<?php

class formArticulo{

    public function formArticuloShow($list){?>
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
                                <div class="col-md-3">
                                    <div class="header-logo">
                                        <a href="../index.php" class="logo">
                                            <img src="../img/logo.png" alt="">
                                        </a>
                                    </div>
                                    
                                </div>
                                <!-- /LOGO -->
        
                                <!-- SEARCH BAR -->
                                <div class="col-md-6">
                                    <div class="header-search">
                                        <form action="capitulo.php?capitulo=<?=$cap?>" method="POST">
                                            <select class="input-select">
                                                <option value="0">Buscar</option>
                                            </select>
                                            <input class="input" placeholder="Buscar" name="txtBusqueda">
                                            <button class="search-btn">Buscar</button>
                                        </form>
                                    </div>
                                </div>
                    <!-- /MAIN HEADER -->
                    <div id="newsletter" class="section">
                    <!-- container -->
                    <div class="container">
				        <!-- row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="newsletter">
                                    <p class="text-muted">Capitulo <strong>1</strong></p>
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
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-4 col-xs-6">
                                <div class="shop">
                                    <div class="shop-img">
                                        <img src="../img/portada<?=$value[4]?>.png">
                                    </div>
                                    <div class="shop-body">
                                        <h3>Capitulo <br><?=$value[4]?></h3>
                                        <a href="capitulo.php?capitulo=<?=$cap?>" class="cta-btn">Ir <i class="fa fa-arrow-circle-right"></i></a>
                                        <a class="cta-btn"><?=$value[2]?></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <label for=""><?=$value[0][4]?></label>
            </body>
        </html>
        
    <?}

}

?>