<?php


if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}


function update(){
    print_r($_POST);

    include_once '../modelos/Dao.php';
    $dao = new Dao();
    $dao->connect();



    print_r($dao->update('validadocumentos',[$_POST['val'],$_POST['ob']],['estado','observaciones'],"idValidadocumentos = '".$_POST['id']."'",false));


}



function index(){
    include_once '../modelos/Dao.php';

    $dao = new Dao();
    $dao->connect();




    $dao->query("SELECT * from inscripcion i INNER JOIN procesoinscripcion p ON p.inscripcion = i.idinscripcion INNER JOIN estudiante e ON i.idestudiante= e.idestudiante  INNER JOIN persona per ON e.persona = per.idPersona");
    $pr =$dao->getResult();



    setViewAdmin('listar_alumnos',['data'=>$pr]);

}

function validadocumentos(){
    global $_PATH;
    $pp = $_PATH[2];


    include_once '../modelos/Dao.php';

    $dao = new Dao();
    $dao->connect();

    $dao->query("SELECT * from inscripcion i INNER JOIN procesoinscripcion p ON p.inscripcion = i.idinscripcion INNER JOIN estudiante e ON i.idestudiante= e.idestudiante  INNER JOIN persona per ON e.persona = per.idPersona where p.idprocesoinscripcion = '$pp'");
    $pr =$dao->getResult();


    $der = $dao->query("SELECT * from derechohabiente d INNER JOIN persona p ON d.persona = p.idPersona  where idtrabajadora = '".$pr[0]['madre']."'",true);
    $der =$dao->getResult();


    $derx = $dao->query("SELECT * FROM validadocumentos where proceso = '$pp'",true);
    $docs = $dao->getResult();




    for ($i = 0; $i <=6;$i++){
        if ($docs[$i]){

            $docs[$i]['doc'] = "doc".($i+1).".".$docs[$i]['ext'];
            $documentos[$i] = $docs[$i];
        }else{
            $documentos[$i] = ['doc'=>'NO'];
        }
    }


    setViewAdmin('valida_documentos',['data'=>$pr[0],'der'=>$der[0],'docs'=>$documentos]);



}


?>