<?php

require_once ("Discount_function.php");

$valor_total = 800;
$desconto = 10;

$valor_com_desconto = calcula_desconto($valor_total, $desconto);


?>

Valor Total: R$<?php $valor_total ?></br>
Valor Desconto: <?php $desconto ?>%</br>
Valor Total com Desconto: R$:<?php echo $valor_com_desconto ?>




