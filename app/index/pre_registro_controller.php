<?php


if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}






function index (){
    session_destroy();
    unset($_SESSION);
    session_start();
    setViewIndex('pre_registro');
}

function ok (){

    include_once '../modelos/DerechohabienteModel.php';
    $derechohabiente = new DerechohabienteModel();
    $r = $derechohabiente->getbyNum($_SESSION['paso1']['derechohabiente']);


    if($r['derecho']['usuario']){
        $e = $derechohabiente->setEstado('1',$_SESSION['paso1']['derechohabiente']);
        setViewIndex('pre_registro_ok',[]);
        sendMail($r['persona']['email'],$r['persona']['nombre'],"Acceso al sistema Cendi",getMailLogin($r['persona']['email'],quita_acentos($r['persona']['appaterno']).$r['derecho']['idtrabajadora'],$r['persona']['nombre']));
    }else{
        $a = $derechohabiente->setuser($r['persona']['nombre'],$r['persona']['appaterno'],$_SESSION['paso1']['derechohabiente'],$r['persona']['email']);

        $e = $derechohabiente->setEstado('1',$_SESSION['paso1']['derechohabiente']);

        setViewIndex('pre_registro_ok',[]);
        sendMail($r['persona']['email'],$r['persona']['nombre'],"Acceso al sistema Cendi",getMailLogin($r['persona']['email'],quita_acentos($r['persona']['appaterno']).$r['derecho']['idtrabajadora'],$r['persona']['nombre']));
    }

}



function create (){
    $num = $_POST['numero'];


    if($num!=""){
        include_once '../modelos/DerechohabienteModel.php';
        $derechohabiente = new DerechohabienteModel();
        $r = $derechohabiente->exite($num);

        if ($r){
            $a = $derechohabiente->getbyId($r);
            $_SESSION['paso1']['derechohabiente']=$a['derecho']['idtrabajadora'] ;
            $_SESSION['paso1']['derechohabiente_num']=$a['derecho']['numtrabajador'] ;
            $_SESSION['paso1']['persona']=$a['derecho']['idPersona'] ;
            $_SESSION['paso1']['dir']=$a['derecho']['idDireccion'] ;


            header("location: "._setUrl('pre_registro/continuar/'.$a['derecho']['idtrabajadora']));
        }else{
            $_RES=$derechohabiente->crear($num);// idDere

            $a = $derechohabiente->getbyNum($r['idtrabajadora']);
            $_SESSION['paso1']['derechohabiente']=$a['derecho']['idtrabajadora'] ;
            $_SESSION['paso1']['derechohabiente_num']=$a['derecho']['numtrabajador'] ;
            $_SESSION['paso1']['persona']=$a['derecho']['idPersona'] ;
            $_SESSION['paso1']['dir']=$a['derecho']['idDireccion'] ;
            header("location: "._setUrl('pre_registro/continuar/'.$_RES));
        }
    }else{
        echo "FALTA INFO";
    }
}

function continuar(){
    session_destroy();
    unset($_SESSION);
    session_start();
    global $_PATH;
    $num = $_PATH[2];
    include_once '../modelos/DerechohabienteModel.php';
    include_once '../modelos/DirecionModel.php';




    $derechohabiente = new DerechohabienteModel();


    $a = $derechohabiente->getbyNum($num);
    $_SESSION['paso1']['derechohabiente']=$a['derecho']['idtrabajadora'] ;
    $_SESSION['paso1']['derechohabiente_num']=$a['derecho']['numtrabajador'] ;
    $_SESSION['paso1']['persona']=$a['derecho']['idPersona'] ;
    $_SESSION['paso1']['dir']=$a['derecho']['idDireccion'] ;

    if (!$a){
        die("SIN DATOS");
    }

    //$_SESSION['paso1'] = ['persona'=>$r['persona']['idPersona'],"derechohabiente"=> $r['derecho']['idtrabajadora']];  //paso1
    if ($derechohabiente->getEstado($num)==1){
        header("location: "._setUrl('pre_registro/ok/'));
    }


    setViewIndex('pre_registro_paso2',["data"=>$a],null);
}



function update(){
    print_r($_POST);
    include_once '../modelos/Dao.php';
    $dao = new Dao();
    $dao->connect();
    $pk = "";
    switch ($_POST['model']){
        case 'persona': $pk="idPersona";break;
        case 'direccion': $pk="idDireccion";break;
        case 'derechohabiente': $pk="idtrabajadora";break;
    }
    print_r($dao->update($_POST['model'],[$_POST['value']],[$_POST['name']],"$pk = '".decryptIt($_POST['id'])."'"));


}

function init(){
    unset($_SESSION);
}
function ver(){
    print_r($_SESSION);


}
function initall(){
    session_destroy();
}


function fileUpload(){
    global $_PATH;
    $tipo = $_PATH[2];
    $dir_ok= false;

    $target_dir = "../../store/_store/_users/".$_SESSION['paso1']['derechohabiente']."/";
    if (!is_dir($target_dir)){
        if (mkdir($target_dir, 0777)){
            $dir_ok = true;
        }else{
            $dir_ok= false;
        }
    }else{
        $dir_ok = true;
    }
    if (!$dir_ok){die("--code--ERROR");}

    $ext = strtolower(pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION));


    $target_file = $target_dir . basename("evidencia_a").".".$ext;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if ($imageFileType != "jpg" && $imageFileType != "pdf"){
        echo "--code--ERROR";die();
    }


    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        include_once '../modelos/Dao.php';
        $dao = new Dao();
        $dao->connect();
        print_r($dao->update('derechohabiente',[$_FILES["file"]["name"]],['evidencia_a'],"idtrabajadora = '".$_SESSION['paso1']['derechohabiente']."'"));
        echo "--code--OK";
    } else {
        echo "--code--ERROR";
    }



}

function filePhoto(){

    global $_PATH;
    $tipo = $_PATH[2];
    $dir_ok= false;

    $target_dir = "../../store/_store/_users/".$_SESSION['paso1']['derechohabiente']."/";
    if (!is_dir($target_dir)){
        if (mkdir($target_dir, 0777)){
            $dir_ok = true;
        }else{
            $dir_ok= false;
        }
    }else{
        $dir_ok = true;
    }
    if (!$dir_ok){die("--code--ERROR");}

    $ext = strtolower(pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION));


    $target_file = $target_dir . basename("img_perfil").".".$ext;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (explode('/',$_FILES["file"]["type"])[0] != "image" ){
        echo "aqui--code--ERROR";die();
    }

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        include_once '../modelos/Dao.php';
        $dao = new Dao();
        $dao->connect();
        print_r($dao->update('derechohabiente',["1"],['evidencia_b'],"idtrabajadora = '".$_SESSION['paso1']['derechohabiente']."'"));
        echo "--code--OK";
    } else {
        echo "--code--ERROR";
    }




}



function existe(){
    include_once '../modelos/DerechohabienteModel.php';
    $derechohabiente = new DerechohabienteModel();
    $r = $derechohabiente->exite(2);
    if ($r){
        echo "existe";
    }else{
        echo "no existe";
    }

}











?>