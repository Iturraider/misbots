<?php
include_once "somosioticos/somosioticos_dialogflow.php";
credenciales('javi','123456789');


if (intent_recibido("calculadora")){
  $valor1 = obtener_variables()['numero1'];
  $valor2 = obtener_variables()['numero2'];
  $resultado = $valor1 + $valor2;
  enviar_texto("luego de sumar los valores te digo que el resultado es $resultado");
}

 ?>