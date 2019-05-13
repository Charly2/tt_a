<?php


if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}



function prueba(){

}


function index (){
    setViewIndex('index');
}



function saves(){
  echo "Hola";
  print_r($_GET);
};















?>