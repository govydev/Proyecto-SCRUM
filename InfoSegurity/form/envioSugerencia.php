<?php

        date_default_timezone_set('America/Lima');
        $hoy = getdate();
        $asunto = "SUGERENCIA INFOSEGURITY";
        $carta .= "Usuario:".$_POST['nombre']."\n";
        $carta .= "Corre: ".$_POST['correo']."\n";
        $carta .= "Realizada el ".$hoy[mday]."/".$hoy[mon]."/".$hoy[year];
        $carta .= "a las ".$hoy[hours].":".$hoy[minutes].":".$hoy[seconds]."\n";
        $carta .= "MENSAJE :\t\t".$_POST['mensaje'];
        if(mail("2017110761@untels.edu.pe", $asunto, $carta)){
            header("Location: ../index.php");
        }else{
            echo "<script>alert('No se pudo enviar su sugerencia')</script>";
        }
        

?>
