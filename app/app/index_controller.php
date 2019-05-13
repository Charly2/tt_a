<?php


if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}




function index(){
    include_once '../modelos/PersonaModel.php';
    $persona = new PersonaModel();

    $p = $persona->getbyid($_SESSION['derecho']['persona']);



    setViewApp('dashboard',$p);
}


?>