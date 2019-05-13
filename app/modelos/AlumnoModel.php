<?php
/**
 * Created by PhpStorm.
 * User: CHARLY
 * Date: 08/04/2019
 * Time: 01:25 AM
 */
include_once '../modelos/Dao.php';
include_once '../modelos/PersonaModel.php';
include_once '../modelos/DirecionModel.php';
class AlumnoModel
{
    public static $db = null;
    private static $persona = null;
    private static $direcion = null;
    public function __construct()
    {
        $this->db = new Dao();
        $this->db->connect();
        $this->persona = new PersonaModel();
        $this->direcion = new DirecionModel();
    }

    public function crear($num){
        $persona = $this->db->insert("persona",["null"],"idPersona");
        $dere = $this->db->insert("Estudiante",[$persona,$num],"persona,madre");


       
        //return ['persona'=> $persona,'derechohabiente'=> $dere,"dir"=>$dir];
        return ['persona'=>$persona,'alumno'=>$dere];
    }
    public function setuser($nombre,$ap,$num,$mail){
        $u= $this->db->insert("usuario",["null",$nombre,$ap.$num,1,$mail],"idUsuario,usuario,password,rol,email");
        $this->db->update('derechohabiente',[$u],["usuario"],"numtrabajador = '$num'");

        //return ['persona'=> $persona,'derechohabiente'=> $dere,"dir"=>$dir];
        return $u;
    }


    function exite($num){
        $r = $this->db->select('derechohabiente','*',"numtrabajador = $num",null);
        if ($this->db->getResult()){

            return $this->db->getResult()[0]['numtrabajador'];
        }else{
            return false;
        }
    }

    function getbyId($num){
        $r = $this->db->select('estudiante','*',"idestudiante = $num",null);
        $alumno = $this->db->getResult()[0];
        if ($alumno){
            $persona = $this->persona->getbyid($alumno['persona']);

            return ["persona"=>$persona,"estudiante"=>$alumno];
        }else{
            return false;
        }
    }

    public function getEstado($num){
        $r = $this->db->select('derechohabiente','idtrabajadora,estado',"numtrabajador = $num",null);
        if ($this->db->getResult()){

            return $this->db->getResult()[0]['estado'];
        }else{
            return false;
        }
    }
    public function setEstado($num,$id){
        $d = $this->db->update('derechohabiente',[$num],['estado'],"numtrabajador = '$id' ");
        return $d;
    }


    public function update ($table,$values,$rows = null,$where){
        return $this->db->update($table,$values,$rows,$where);
    }

}