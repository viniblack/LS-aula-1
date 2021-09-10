<?php
// $semana['dom'] = 'Durmo';
// $semana['seg'] = 'Estudo';
// $semana['ter'] = 'Trabalho';
// $semana['qua'] = 'Viajo';
// $semana['qui'] = 'Assisto';
// $semana['sex'] = 'Converso';
// $semana['sab'] = 'Jogo';

// echo "Dia a dia <br><br>";

// foreach ($semana as $dia => $acao) {
//   echo "$dia eu $acao <br>";
// }

// $aulas['PI'] = 'seg';
// $aulas['CMS'] = 'ter';
// $aulas['DD'] = 'ter';
// $aulas['BD'] = 'qua';
// $aulas['LS'] = 'qui';
// $aulas['LSW'] = 'sex';

// foreach($aulas as $aula => $dia){
//   echo "$dia tem aula de $aula <br>";
// }

unset($aulas);

$aulas['seg'][0] = 'PI';
$aulas['ter'][0] = 'CMS';
$aulas['ter'][1] = 'DD';
$aulas['qua'][0] = 'BD';
$aulas['qui'][0] = 'LS';
$aulas['sex'][0] = 'LSW';
$aulas['sex'][1] = 'Kumbuca';

foreach ($aulas as $dia => $discs) {
  echo "Aula(s) na $dia: ";
  foreach ($discs as $disc) {
    echo "$disc, ";
  }
  echo "<br>";
}