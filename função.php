<?php

function aposta() {

$sena = array();

$i =0;
while ($i <= 5) {
$numero = rand(1,60);
if( ! array( $numero,$sena)){
$sena[] = $numero;
++$i;
}
}
sorte ($sena);
return $sena;
}
?>