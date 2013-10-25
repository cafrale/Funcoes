<?php

//
//  Função para retornar uma string apenas com os números contidos nela
//

function sonumeros($texto)
  {
     $atual = 0;
     $numeros = '';
     while ($atual <= strlen($texto))
       {
         $processando = substr($texto,$atual,1);
         if ($processando == '0' or
             $processando == '1' or
             $processando == '2' or
             $processando == '3' or
             $processando == '4' or
             $processando == '5' or
             $processando == '6' or
             $processando == '7' or
             $processando == '8' or
             $processando == '9')
             { $numeros = $numeros . $processando; }
         $atual++;
       }
    return $numeros;
  }

?>