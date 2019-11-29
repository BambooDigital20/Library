<html>

<head>
<title>
Funcao Calculo
</title>

<link rel="stylesheet" href="style.css"/>
</head>

<body>




<div class="container">
<!-- tabela de valores e descontos -->
<div class="container2">

<div class="table">
<table>
    <tr>
        <th>BASE DE CALCULO</th>
        <th>ALIQUOTA</th>
    </tr>
    <tr>
        <td>Ate 1.903.98</td>
        <td>Isento</td>
    <tr>
        <td>De R$ 1.903.98 ate R$ 2.826.65</td>
        <td>7,5%</td>
    </tr>
    <tr>
        <td>De R$ 2.826.65 ate R$  </td>
        <td>15%</td>
    </tr>
    <tr>
        <td>De R$ 3.751.05 ate R$ 4.664.68</td>
        <td>22,5%</td>
    </tr>
    <tr>
        <td>Acima de R$ 4.664.68</td>
        <td>27,5%</td>
    </tr>
</table>
</div>
<!-- tabela de valores e descontos -->

<!-- Valor do salario e resultado do calculo -->
<?php 
if (isset($_POST['salario']) && empty ($_POST['salario']) ){
    echo 'Preencha o valor do salario';
}

?>
<div class="formulario">
<span>Digite abaixo o valor do seu salario:</span></br>
<form action="resultado.php" method="POST">
<input type="number" step="0.01" name="salario">
<input type="submit" value="resultado">
</div>

</div>
</div>
</body>
</html>