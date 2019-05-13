<?php


if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}


function index(){
    include_once '../modelos/Dao.php';
    $model = new Dao();
    $model->connect();
    $n = $_SESSION['derecho']['idtrabajadora'];
    $model->query("SELECT * FROM estudiante e INNER JOIN persona p ON p.idPersona=e.persona WHERE madre = '$n'");
    $alumnos=$model->getResult();

    /*echo "<pre>";
    print_r($alumnos);
    echo "</pre>";*/

    setViewApp('listar_alumnos',['data'=>$alumnos]);
}

function crear(){


    include_once '../modelos/AlumnoModel.php';
    $persona = new AlumnoModel();

    include_once '../modelos/Dao.php';
    $dao = new Dao();
    $dao->connect();

    $alumno = $persona->crear($_SESSION['derecho']['idtrabajadora']);
    $dere = $dao->insert("inscripcion",[$alumno['alumno'],date('Y-m-d')],"idestudiante,fechaalta");
    $a = $dao->insert("procesoinscripcion",[$dere],"inscripcion");


    $_SESSION['alumno'] = $alumno;

    print_r($alumno);

    //setViewApp('registro_paso1');

    header("location: "._setUrl('app/alumno/edit_alumno/'.$alumno['alumno']));
}




function reg_alumno(){

    setViewApp('registro_paso2');
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
        case 'personaautorizada': $pk="idPersonaAutorizada";break;
        case 'conyuge': $pk="idPadre";break;
    }

    print_r($dao->update($_POST['model'],[$_POST['value']],[$_POST['name']],"$pk = '".decryptIt($_POST['id'])."'",true));


}

//cendi/app/
function edit_alumno(){
    global $_PATH;

    include_once '../modelos/AlumnoModel.php';
    $persona = new AlumnoModel();

    $p = $persona->getbyId($_PATH[2]);


    setViewApp('registro_paso1',["data"=>$p]);
}

function reg_persona_autorizada(){
    global $_PATH;

    include_once '../modelos/AlumnoModel.php';
    include_once '../modelos/PersonaAutorizadaModel.php';
    $persona = new AlumnoModel();
    $personaAutorizada = new PersonaAutorizadaModel();

    $p = $persona->getbyId($_PATH[2]);


    if (!$p['estudiante']['personaautorizada']){
        $p['estudiante']['idestudiante'] = $personaAutorizada->crear($p['estudiante']['idestudiante']);
    }


    $perat = $personaAutorizada->getbyid($p['estudiante']['personaautorizada']);


    setViewApp('registro_paso3',['data'=>$perat,'alumnno'=>$p]);
}

function reg_conyuge(){

    global $_PATH;

    include_once '../modelos/AlumnoModel.php';
    include_once '../modelos/ConyugeModel.php';
    include_once '../modelos/DerechohabienteModel.php';
    $persona = new AlumnoModel();
    $con = new ConyugeModel();
    $der = new DerechohabienteModel();

    $p = $persona->getbyId($_PATH[2]);





    if (!$p['estudiante']['padre']){
        $p['estudiante']['padre'] =  $con->crear($p['estudiante']['idestudiante']);
    }



    $perat = $con->getbyid($p['estudiante']['padre']);



    $dirDer = $der->getDireccion($_SESSION['derecho']['numtrabajador']);

    setViewApp('registro_paso2',['data'=>$perat,'dir_top'=>$dirDer,'alumnno'=>$p]);
}


function reg_documentos(){
    global $_PATH;

    include_once '../modelos/Dao.php';
    $dao = new Dao();
    $dao->connect();

    $dao->query("SELECT idprocesoinscripcion from inscripcion i INNER JOIN procesoinscripcion p ON p.inscripcion = i.idinscripcion  where idestudiante = '".$_PATH[2]."';");
    $pr =$dao->getResult()[0]['idprocesoinscripcion'];

    $docs = $dao->selectRet('validadocumentos','*',"proceso='$pr'");
    $documentos = array();
    for ($i = 0; $i <=6;$i++){
        if ($docs[$i]){

            switch ($docs[$i]['estado']){
                case '0':  $docs[$i]['estadoTxt'] = "Cargado"; break;
                case '1':  $docs[$i]['estadoTxt'] = "Válido"; break;
                case '2':  $docs[$i]['estadoTxt'] = "Error"; break;
            }
            $documentos[$i] = $docs[$i];
        }else{
            $documentos[$i] = ['estadoTxt'=>'Sin Subir'];
        }
    }







    $_SESSION['fileKey'] = $_PATH[2];

    setViewApp('registro_paso4',['data'=>$documentos]);
}
function fileUpload(){
    global $_PATH;
    global $_TIPODOC;

    print_r($_POST);
    $tipo =$_POST['tipoVal'];
    $dir_ok= false;
    include_once '../modelos/Dao.php';
    $dao = new Dao();
    $dao->connect();

    $dao->query("SELECT idprocesoinscripcion from inscripcion i INNER JOIN procesoinscripcion p ON p.inscripcion = i.idinscripcion  where idestudiante = '".$_SESSION['fileKey']."';");
    $pr =$dao->getResult()[0]['idprocesoinscripcion'];


    $target_dir = "../../store/_store/_users/".$_SESSION['derecho']['idtrabajadora']."/".$_SESSION['fileKey']."/";
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


    $target_file = $target_dir . basename($tipo).".".$ext;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if ($imageFileType != "jpg" && $imageFileType != "pdf"&& $imageFileType != "png"){
        echo "--code--ERROR";die();
    }


    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $tipoBase = $_TIPODOC[$tipo];
        if($dao->selectRet('validadocumentos','*',"proceso='$pr' and tipo = '$tipoBase'")){
            $dao->update('validadocumentos',[$ext],['ext'],"proceso='$pr' and tipo = '$tipoBase'");
        }else{
            $dao->insert('validadocumentos',[$pr,$tipoBase,"0",$ext],"proceso,tipo,estado,ext");
        }


        echo "--code--OK";
    } else {
        echo "--code--ERROR";
    }

}


?>