<?php

class formCapitulo{

    public function formCapituloShow($list, $cap){?>
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
                <style>
                .pie {
                    background-color: black;
                    color: white;
                    text-align: center;
                }
                </style>
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
                                    <div class="logo">
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
                                    <p class="text-muted" style="color: white">Capitulo <strong><?=$cap?>   </strong></p>
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
                    <div>
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <?foreach ($list as $value) {?>
                                <div class="col-md-6 col-xs-6">
                                    <div class="shop">
                                        <a href="articulo.php?articulo=<?=$value[0]?>" class="cta-btn">
                                        <div class="shop-img">
                                            <img src="../img/portada<?=$value[4]?>.png">
                                        </div>
                                        <div class="shop-body">
                                            <h3>Articulo  <br><?=$value[1]?></h3>
                                            Ir <i class="fa fa-arrow-circle-right"></i>
                                        </div>
                                        </a>
                                    </div>
                                    <div style="text-align: center">
                                        <a class="cta-btn"><label for=""><?=$value[2]?></label></a>
                                    </div>
                                </div>
                            <?}?>
                            <?if($cap == 7){?>
                            <div class="col-md-6 col-xs-6">
                                <div class="shop">
                                    <a href="disposicion.php" class="cta-btn">
                                    <div class="shop-img">
                                        <img src="../img/portada7.png" alt="">
                                    </div>
                                    <div class="shop-body">
                                        <h3>Disposiciones</h3>
                                        Ir <i class="fa fa-arrow-circle-right"></i>
                                    </div>
                                    </a>
                                </div>
                                <div style="text-align: center">
                                    <a class="cta-btn"><label for="">Disposiciones</label></a>
                                </div>
                            </div>
                            <?}?>
                        </div>
                    </div>
                </div>
                </div>
            </body>
            <hr>
            <div class="pie">
            <br><br>
				<div class="row">
					<div class="col-md-6 col-xs-6">
                        <label for="">Si desea que mejore este sitio, puede enviarnos una sugerencia </label>
						<center><a href="sugerencia.php" class="btn btn-success">Sugerencias</a></center>
					</div>
					<div class="col-md-6 col-xs-6">
						<h3 style="color: white">Creadores</h3>
						<div>
							<ul>
								<li><label>Avalos Pucyura, Milton Manuel</label></li>
								<li><label>Gutierrez Huamanttupa, Marcos Antonio	</label></li>
								<li><label>Ricce Capristan, Luis Alberto</label></li>
								<li><label>Romero Dávalos, Joshep Angelo</label></li>
								<li><label>Salirrosas Llamocuro, Flavio Cesar</label></li>
							</ul>
						</div>
					</div>
				</div>
				<footer class="full-width footer">
					<div class="container">
						<div class="col-xs-12">
							<ul class="list-unstyled text-center full-width footer-copyright">
							<li>&#174; 2020 Semillitas del saber</li>
							</ul>
						</div>
					</div>
				</footer>
            </div>
        </html>
        
    <?}

}

?>