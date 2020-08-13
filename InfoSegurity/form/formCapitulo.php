<?php

class formCapitulo{

    public function formCapituloShow($list){?>
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
                                <div class="col-md-3">
                                    <div class="header-logo">
                                        
                                        <a href="#" class="logo">
                                    
                                            <img src="../img/logo.png" alt="">
                                        </a>
                                    </div>
                                    
                                </div>
                                <!-- /LOGO -->
        
                                <!-- SEARCH BAR -->
                                <div class="col-md-6">
                                    <div class="header-search">
                                        <form>
                                            <select class="input-select">
                                                <option value="1">Capitulo 1</option>
                                                <option value="2">Capitulo 2</option>
                                                <option value="3">Capitulo 3</option>
                                                <option value="4">Capitulo 4</option>
                                                <option value="5">Capitulo 5</option>
                                                <option value="6">Capitulo 6</option>
                                                <option value="7">Capitulo 7</option>
                                            </select>
                                            <input class="input" placeholder="Search here">
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
                                    <?for($i=0; $i<1; $i++){?>
                                    <p class="text-muted">Capitulo <strong><?=$list[$i][4]?></strong></p><?}?>
                                    <a href="../index.php" class="btn btn-success">Menu principal</a>
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
                            <?foreach ($list as $value) {?>
                                <div class="col-md-4 col-xs-6">
                                    <div class="shop">
                                        <div class="shop-img">
                                            <img src="../img/portada<?=$value[4]?>.png">
                                        </div>
                                        <div class="shop-body">
                                            <h3>Capitulo <br><?=$value[4]?></h3>
                                            <a href="articulo.php?id=<?=$value[1]?>" class="cta-btn">Ir <i class="fa fa-arrow-circle-right"></i></a>
                                            <a class="cta-btn"><?=$value[2]?></a>
                                        </div>
                                    </div>
                                </div>
                            <?}?>
                </div>
        
            </body>
        </html>
        
    <?}

}

?>