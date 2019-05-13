<?php
/**
 * Created by PhpStorm.
 * User: CHARLY
 * Date: 08/04/2019
 * Time: 01:25 AM
 */
include_once '../modelos/Dao.php';
include_once '../modelos/PersonaModel.php';
class PersonaAutorizadaModel
{
    private static $db = null;
    private static $persona = null;

    public function __construct()
    {
        $this->db = new Dao();
        $this->db->connect();
        $this->persona = new PersonaModel();
    }

    public function crear($alumno){
        $persona = $this->db->insert("persona",["null"],"idPersona");
        $dirper = $this->db->insert("direccion",["null"],"idDireccion");
        $this->db->update('persona',[$dirper],["direccion"],"idPersona = '$persona'");
        $dir = $this->db->insert("direccion",["null"],"idDireccion");
        $result = $this->db->insert("personaautorizada",[$persona,$dir],"persona,direcciontrabajo");
        $this->db->update('estudiante',[$result],["personaautorizada"],"idestudiante = '$alumno'");
        return $result;
    }

    public function update ($table,$values,$rows = null,$where){
        return $this->db->update($table,$values,$rows,$where);
    }


    function getbyid($id)
    {
        $pa = $this->db->selectRet('personaautorizada', '*', "idPersonaAutorizada = $id", null)[0];
        $p = $this->db->selectRet('persona', '*', "idPersona ='".$pa['persona']."'", null)[0];
        $d= $this->db->selectRet('direccion', '*', "idDireccion ='".$p['direccion']."'", null)[0];
        $dt= $this->db->selectRet('direccion', '*', "idDireccion ='".$pa['direcciontrabajo']."'", null)[0];

        return ['personaautorizada'=> $pa,"persona"=>$p, 'direccion' => $d , 'direcciontrabajo' => $dt];


    }





}