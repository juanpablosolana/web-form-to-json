<?php
$kArticulo = $_POST['kArticulo'];
$luchasReales = (int) $_POST['luchasReales'];
$luchasFueraTelar = (int)$_POST['luchasFueraTelar'];
$kClaseTela = $_POST['kClaseTela'];
$kSalaTejido = $_POST['kSalaTejido'];
$divisor = (int)$_POST['divisor'];
$grGrasa = (int)$_POST['grGrasa'];
$mtsGrasa = (int)$_POST['mtsGrasa'];
$grAcabado = (int)$_POST['grAcabado'];
$mtsAcabado1 = (int)$_POST['mtsAcabado1'];
$anchoTelar = (int)$_POST['anchoTelar'];
$mtsUrdido = (int)$_POST['mtsUrdido'];
$mtsTejido = (int)$_POST['mtsTejido'];
$mtsAcabdo = (int) $_POST['mtsAcabdo'];
$temporada = $_POST['temporada'];
$prioridad = (int) 1;


$arr = array('kArticulo' => $kArticulo, 'luchasReales' => $luchasReales, 'luchasFueraTelar' => $luchasFueraTelar, 'mtsUrdido' => $mtsUrdido, 'mtsTejido' => $mtsTejido, 'mtsAcabdo' => $mtsAcabdo,'grGrasa' => $grGrasa, 'mtsGrasa' => $mtsGrasa, 'grAcabado' => $grAcabado, 'mtsAcabado1' => $mtsAcabado1,'divisor' =>$divisor, 'anchoTelar' => $anchoTelar, 'prioridad' =>$prioridad, 'temporada' => $temporada, 'kClaseTela' => $kClaseTela, 'kSalaTejido' => $kSalaTejido);
//echo json_encode($arr);
//echo $arr;
//API Url
$url = 'http://192.11.11.1:8080/novalanRP/serv/art/save';
//Initiate cURL.
$ch = curl_init($url);
//The JSON data.
$jsonData =$arr;
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);
//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);
//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
//Execute the request
$result = curl_exec($ch);

 header ("Location: http://192.11.11.1");
