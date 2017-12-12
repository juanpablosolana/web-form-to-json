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
echo json_encode($arr);
echo $arr;

