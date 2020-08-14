<?php

class formSugerencia{

    public function formSugerenciaShow(){?>
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
                    </div>
                    </div>
                    <div>
                    <form class="form" method="POST" action="envioSugerencia.php">
                    <h2>CONTACTANOS</h2>
                    <p type="Nombre:"><input placeholder="Tu Nombre Por Favor" name="nombre"></input></p>
                    <p type="Email:"><input placeholder="Ingresar Tu Email" name="correo"></input></p>
                    <p type="Mensaje:"><input whidth:100% placeholder="Escribir un mensaje..." name="mensaje"></input></p>
                    <button>Enviar Mensaje</button>
                    <button><a href="../index.php">Regresar al Menu Principal</a></button>
                    <style>
                    .form
                    {width:380px;
                    height:480px;
                    background:#e6e6e6;
                    border-radius:8px;
                    box-shadow:0 0 40px -10px #000;
                    margin:calc(50vh - 220px) auto;
                    padding:20px 30px;
                    max-width:calc(100vw - 40px);
                    box-sizing:border-box;
                    font-family:'Montserrat',sans-serif;
                    position:relative;margin-top:80px;
                    margin-bottom:40px;
                    opacity: 1;
                    }
                    h2{
                    margin:10px 0;
                    padding-bottom:10px;
                    width:180px;
                    color:#78788c;
                    border-bottom:3px solid #78788c;
                    }
                    input{
                    width:100%;
                    padding:10px;
                    opacity: 1;
                    box-sizing:border-box;
                    background:none;
                    outline:none;
                    resize:none;
                    border:0;
                    font-family:'Montserrat',sans-serif;
                    transition:all .3s;
                    border-bottom:2px solid #bebed2;
                    }
                    input:focus{
                    border-bottom:2px solid #78788c;}

                    p:before{
                    content:attr(type);
                    display:block;
                    margin:28px 0 0;
                    font-size:14px;
                    color:#5a5a5a;
                    }

                    button
                    {float:right;
                    padding:8px 12px;
                    margin:8px 0 0;
                    font-family:'Montserrat',sans-serif;
                    border:2px solid #78788c;
                    background:0;
                    color:#5a5a6e;
                    cursor:pointer;
                    transition:all .3s;
                    }
                    button:hover{
                    background:#78788c;
                    color:#fff;
                    }
                    </style>
        </body>
    </html>
    <?}

}

?>