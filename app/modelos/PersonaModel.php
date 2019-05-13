<?php
/**
 * Created by PhpStorm.
 * User: CHARLY
 * Date: 08/04/2019
 * Time: 01:25 AM
 */
include_once '../modelos/Dao.php';
class PersonaModel
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

    public function update ($table,$values,$rows = null,$where){
        return $this->db->update($table,$values,$rows,$where);
    }


    function getbyid($id){
        $r = $this->db->select('persona','*',"idPersona = $id",null);
        if ($this->db->getResult()){
            return $this->db->getResult()[0];
        }else{
            return false;
        }
    }





}