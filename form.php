<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

//chama pasta classe
include 'calculaClass.php';


//pega dados POST
 $distancia = $_POST['kmRodados'];
 $litros = $_POST['litrosGastos'];

//chama classe
$media = new CalcularMedia();
//envia e pega dados
$media->setKM($_POST['kmRodados']);
$media->setLitros($_POST['litrosGastos']);
$media->media();
