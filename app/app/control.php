<?php
/**
 * Created by PhpStorm.
 * User: CHARLY
 * Date: 07/04/2019
 * Time: 10:41 PM
 */

session_start();

     error_reporting(0);
//

if(!$_SESSION['app']){
   header('Location: /cendi/login');
}

include_once '../config/config.php';
include_once '../lib/util.php';




$_PATH = explode('/',$_GET{'url'});
$_PATH[1] = $_PATH[1]?$_PATH[1]:'index';
$_PATH[0] = $_PATH[0]?$_PATH[0]:'index';

include_once $_PATH[0].'_controller.php';
?>
