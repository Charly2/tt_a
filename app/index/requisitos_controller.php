<?php

if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}




function index (){
    setViewIndex('requisitos');
}






?>