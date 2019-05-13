<?php


if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}




function index(){
    setViewApp('dashboard');
}

function logout(){
    echo "adios";

    session_destroy();
    header("Location: ".URL_BASE."");
}

?>