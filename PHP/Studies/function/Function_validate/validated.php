<?php

require_once ("function_validate_login.php");



$login_user = $_POST['login'];
$senha_user = $_POST['senha'];


$validated_user = validate_login($login_user, $senha_user);

if( $validated_user ){
    echo "You Pass!";
}else{ 
    echo "Wrong User or Pass!";
}



?>