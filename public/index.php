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

// function teste($name)
// {
//   // closure
//   $person = function() use ($name){
//     return $name;
//   };
//   return $person;
// }

// chamamos 2x () por causa da closure
// O primeiro () chama a função teste.
// O segundo () chama a função anônima (closure) que foi retornada.
// var_dump(teste('Alexandre')()); // string(9) "Alexandre"

// CALLBACKS

function teste($name){
  return 'Olá, meu nome é ' . $name . '. ';
};

function teste2($callback)
{
  // podemos colocar um if para ter certeza de que o parâmetro passado é uma função:
  if(is_callable($callback)){
    return $callback('Barbara');
  }
};

// note que ao passar uma função como parâmetro para outra, precisamos passá-la como STRING!
echo teste2('teste'); // Olá, meu nome é Barbara.

function funcNome($name)
{
  return 'Essa é a ' . $name . '. ';
}
// podemos fazer callback assim também:
echo call_user_func('funcNome', 'Bárbara'); //Essa é a Bárbara.
// O primeiro argumento é a função e os demais os seus parâmetros.

class User
{
  public function userTeste($name, $age)
  {
    return 'Oiee, meu nome é ' . $name . '!' . ' E eu tenho ' . $age . ' anos. '; 
  }
}

// só instanciamos a classe, pois ela não é estática (public static...). Caso fosse, poderíamos chamar call_user_func direto.
$user = new User;

// passando um objeto com parâmetros para call_user_func
echo call_user_func([$user, 'userTeste'], 'Joaquim', 98); // Oiee, meu nome é Joaquim!

