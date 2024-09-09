<?php

$title = 'Home';
$name = 'Bárbara';


$namen = 'Sebastian'; // Cria a variável $namen e a inicializa com 'Sebastian'.

$meinNamen = &$namen; // Cria uma referência para a variável $namen. Agora, $meinNamen e $namen apontam para o mesmo valor.

$namen = 'Bárbara'; // Altera o valor de $namen para 'Bárbara'. Como $meinNamen é uma referência para $namen, $meinNamen também é alterado.

echo $namen;    // Imprime 'Bárbara'
echo $meinNamen; // Imprime 'Bárbara'

// apesar disso não é um ponteiro, porque a memória é gerenciada automaticamente pelo interpretador e ponteiros são simples de errar e menos propensos a erros.

// CONSTANTES
// por convenção usa-se letra maiúscula:
define('NAME', 'Ariadne');

echo NAME;

function teste()
{
  echo __FUNCTION__;
  echo __METHOD__;
}
// __FUNCTION__ e __METHOD__ são constantes mágicas que fornecem informações sobre a função ou o método onde são usadas. 

teste();

define('NAMEN', 'Bárbara');
if(defined('NAMEN')) {
  echo ' foi definido';
}

// CONCATENANDO STRINGS

$name = ' ' . $name . ' Robles';
echo $name;

// INCREMENTO/DECREMENTO

$number = 10;

echo ++$number; // 11

echo $number++; // 11 (continua o mesmo número, pois o incremento é feito APÓS o print na tela)
// no entanto, se chamar novamente $number:

echo $number; // 12
// aí sim vai mostrar que houve o incremento

// EM RESUMO: o pré-incrmento será implementado na hora, e o pós incremento será implementado depois 

// verifica se o valor é igual '50' == 50 >>> true
// === se o valor é igual e o tipo é igual '50' == 50 >>> false

// FALSY
// null
// 0
// 0.0
// "0"
// """
// array()


$name = 'Bárbara';

switch ($name){
  case 'Joana':
    echo 'É Joana';
    break;
  case 'Bruna':
    echo 'É Bruna'; 
    break;
  case 'Bárbara':
    echo 'É Bárbara';
    break;
  default:
  echo 'Não é nenhum';
  break;
}

$frase = 'Ola, meu nome é Bárbara.';

echo substr($frase, 0, 10); // Ola, meu n (exclui o 10º caracter. Se colocar "á", ele conta como 2 caracteres.

