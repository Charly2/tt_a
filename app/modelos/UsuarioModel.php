<?php
/**
 * Created by PhpStorm.
 * User: CHARLY
 * Date: 08/04/2019
 * Time: 01:25 AM
 */
include_once '../modelos/Dao.php';
class UsuarioModel
{
    private static $db = null;
    public function __construct()
    {
        $this->db = new Dao();
        $this->db->connect();
    }

    public function login($user,$password){
        $where= "email = '$user' and password = '$password'";
        //echo $where;
        $result = $this->db->select('usuario','*',$where);
        if ($result === true){
            $r  = $this->db->getResult();
            if ($r != NULL){
                return [true,$r];
            }else{
                $_ERROR['tipo'] = "login";
                $_ERROR['mensaje'] = "Usuario y/o password incorrectos";
                $_ERROR['user'] = $user;
                $_ERROR['pass'] = $password;
                return [false,$_ERROR];
            }
        }
    }




    public function saluda(){
        $this->db->select('usuario');
        return $this->db->getResult();
    }

    public function getInfo($us){
        $this->db->select('derechohabiente','idtrabajadora,persona,numtrabajador',"usuario = '$us'",null,false);
        return $this->db->getResult()[0];
    }
}