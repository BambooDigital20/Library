<?php 
require_once ("funcao.php"); 

$valor_salario = $_POST['salario'];
$valor_com_desconto = calcula_salario($valor_salario);

?>
<html>

<body>
<?php 

if( $_POST["salario"] <= 1903.98){

    echo"<h1> $imposto </h1>";

}else{
    
    echo"<h1>O valor do seu imposto e de: R$  $valor_com_desconto</h1>";

}



?>
</body>

</html




