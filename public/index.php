<?php
// INICIAR O SERVIDOR LOCAL:
  // php -S localhost:3000 -t public
// PARA FINALIZAR:
  // Control + C

// include '../teste.php';
// require '../teste.php';

// a diferença entre o include e o require é que o inlcude mostra a mensagem de erro, mas ele continua executando para baixo. O require dá a mensagem de erro e não executa mais nada.

// podemos chamar também:
// include_once '../teste.php';
// isso impede que o arquivo seja chamado 2x, porque se chamar:
// include '../teste.php';
// include '../teste.php';
// vai executar 2x o código!




// echo $title;
// echo $name;

// CLOSURES (FUNÇÕES ANÔNIMAS)

function teste($name)
{
  // closure
  $person = function() use ($name){
    return $name;
  };
  return $person;

}

// chamamos 2x () por causa da closure
// O primeiro () chama a função teste.
// O segundo () chama a função anônima (closure) que foi retornada.
var_dump(teste('Alexandre')());
