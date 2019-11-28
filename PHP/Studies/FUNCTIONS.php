<?php


function first(){
    echo 'curso de php';
}

first();



//function without return

function where_are_you(){
    echo "where are you?";

}

where_are_you();



//function with return

function are_you_here(){
    return 'here'.'you'.'are!';
}

echo are_you_here();


function welcome($name){
  echo "Welcome to PHP".$name;
}


welcome('Jon');


//function com parametros:


function calcular($num1, $num2){
    return $num1+$num2;
}

echo calcular(5, 6);
?>