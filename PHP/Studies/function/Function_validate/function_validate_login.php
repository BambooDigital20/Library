<?php



function validate_login($login, $senha){

    //validar direto em banco de dados

    $login_bd = 'edu_edu';

    $senha_bd = '123';

    if($login == $login_bd && $senha == $senha_bd){
        return true;
    }
    
    return false;

}



?>