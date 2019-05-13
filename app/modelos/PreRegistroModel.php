<?php
/**
 * Created by PhpStorm.
 * User: CHARLY
 * Date: 08/04/2019
 * Time: 01:25 AM
 */
include_once '../modelos/Dao.php';
class PreRegistroModel
{
    private static $db = null;
    public function __construct()
    {
        $this->db = new Dao();
        $this->db->connect();
    }

    public function crearPreregistro($num,$tipo){

        $result = $this->db->insert("Inscripcion",["null"],"idinscripcion");
        print_r($result);
    }




}