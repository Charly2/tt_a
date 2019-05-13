<?php
/**
 * Created by PhpStorm.
 * User: CHARLY
 * Date: 08/04/2019
 * Time: 01:25 AM
 */
include_once '../modelos/Dao.php';
class UtilModel
{
    private static $db = null;
    public function __construct()
    {
        $this->db = new Dao();
        $this->db->connect();
    }

    public function crear($num,$tipo){

        $result = $this->db->insert("persona",["null"],"idPersona");
        return $result;
    }


    function getEstados(){
        $r = $this->db->select('estados','*',"",null);
        if ($this->db->getResult()){
            return $this->db->getResult();
        }else{
            return false;
        }
    }





}