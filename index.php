<?php
# Estrutura de repetição
// for ($i = 0; $i <= 10; $i++) {
//   echo "01 x " . $i . " = " . $i;
//   echo '<br>';
// }

// $dia = 'sav';

// switch ($dia) {
//   case 'segunda';
//     echo 'Estude';
//     break;

//   case 'terca';
//     echo 'Estude';
//     break;

//   case 'quarta';
//     echo 'Estude';
//     break;

//   case 'quinta';
//     echo 'Estude';
//     break;

//   case 'sexta';
//     echo 'Estude';
//     break;

//   default:
//     echo 'Descance';
// }

# Condicional

// $nome = "Vini";

// if ($nome == "Vinicius") {
//   echo "O nome é igual" . '<br>';
// } else {
//   echo "O nome é diferente";
//   echo '<br>';
// }

# Operador ternario
// $animal = 'cachorro';

// $tipo = $animal == 'cachorro' ? 'mamifero' : 'desconhecido';

// echo "$animal é um animal do tipo $tipo";

// $sobrenome = $sobrenome_informado ?? 'não informado';
// echo "Sobrenome: $sobrenome";



$semana['dom'] = 'Durmo';
$semana['seg'] = 'Estudo';
$semana['ter'] = 'Trabalho';
$semana['qua'] = 'Viajo';
$semana['qui'] = 'Assisto';
$semana['sex'] = 'Converso';
$semana['sab'] = 'Jogo';

echo "Dia a dia <br><br>";

foreach($semana as $dia => $acao){
  echo "$dia eu $acao <br>";
}