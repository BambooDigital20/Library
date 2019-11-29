<?php

require_once("salario.php");

$valor_salario = $_POST['salario'];


function calcula_salario($valor_salario){

    
    if( $valor_salario <= 1903.98){
        return false;
    }

    elseif( $valor_salario > 1903.98 && $valor_salario <= 2826.65){
        $desconto = 7.5;
    }else if( $valor_salario > 2826.65 && $valor_salario <= 3751.05 ){
        $desconto = 15;
    }else if ( $valor_salario > 3751.05 && $valor_salario <= 4664.68){
        $desconto = 22.5;
    }else if ( $valor_salario > 4664.68){
        $desconto = 27.5;
    }
    
    $valor_total = $valor_salario * ($desconto/100); 
       return $valor_total;
       
}

function calcula_salario_2($valor_salario){

    if($valor_salario <= 1903.98){
        $imposto = "Voce e insento de imposto";
    }else{
        return false;
    }
    
   return $imposto;
}

$imposto = calcula_salario_2($valor_salario)

?>