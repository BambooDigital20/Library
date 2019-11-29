<?php



if (empty  ($_POST ['user'])){
     echo "Enter an User Name";
 }
 if (empty  ($_POST ['pass'])){
    echo "Enter a Password";
}

require "cadastro.php";

$user = $_POST ['user'];
$pass = $_POST ['pass'];

function validate($user, $pass){
    $user_ = "edu@edu";
    $pass_ = "123";

    if ( $user == $user_ && $pass == $pass_){
        echo "You enter!";
    }else{
        echo "Wrong User name or Password!";
    }



}




?>