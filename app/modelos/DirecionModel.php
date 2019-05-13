<?php
/**
 * Created by PhpStorm.
 * User: CHARLY
 * Date: 08/04/2019
 * Time: 01:25 AM
 */
include_once '../modelos/Dao.php';
class DirecionModel
{
    private static $db = null;
    public function __construct()
    {
        $this->db = new Dao();
        $this->db->connect();
    }

    public function crear($num="",$tipo=""){

        $result = $this->db->insert("direccion",["null"],"idDireccion");
        return $result;
    }


    function getbyid($id){
        $r = $this->db->select('direccion','*',"idDireccion = $id",null);
        if ($this->db->getResult()){
            return $this->db->getResult()[0];
        }else{
            return false;
        }
    }





}