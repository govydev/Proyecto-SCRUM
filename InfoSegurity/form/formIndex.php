<?php

class formIndex{

    public function formIndexShow($list){?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Scrum</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

    </head>
	<body>
		<!-- HEADER -->
		<header>
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
							
									<img src="./img/logo.png" alt="">
								</a>
							</div>
							
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="index.php" method="POST">
									<select class="input-select" name="txtOpcion">
										<option value="capitulo">Capitulo</option>
                                        <option value="contenido">Contenido</option>
										<option value="articulo">Articulo</option>
									</select>
									<input class="input" placeholder="Busqueda" name="txtBusqueda">
									<button class="search-btn" type="submit">Buscar</button>
								</form>
							</div>
						</div>
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="section">
			<!-- container -->
			<div class="container">
                <!-- row -->
				<div class="row">
					<!-- shop --> <?foreach ($list as $value) {?>
					<div class="col-md-4 col-xs-6">
                            <div class="shop">
                                <a href="form/capitulo.php?capitulo=<?=$value[1]?>" class="cta-btn">
								<div class="shop-img">
                                    <img src="./img/portada<?=$value[1]?>.png" alt="<?=$value[2]?>">
                                </div>
                                <div class="shop-body">
                                    <h3>Capitulo <br><?=$value[1]?></h3>
                                    Ir <i class="fa fa-arrow-circle-right"></i>
                                    <a class="cta-btn"><?=$value[2]?></a>
                                </div>
								</a>
						    </div>
                    </div>
                    <?}?>
                    </div>

                </body>
            </html>
    <?}

}

?>