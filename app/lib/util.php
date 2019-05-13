<?php
/**
 * Created by PhpStorm.
 * User: CHARLY
 * Date: 07/04/2019
 * Time: 11:51 PM
 */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$_TIPODOC = ['doc1'=>1,'doc1'=>1,'doc2'=>2,'doc3'=>3,'doc4'=>4,'doc5'=>5,'doc6'=>6,'doc7'=>7,'doc8'=>8,'doc9'=>9];

function setViewIndex($view,$args="",$ver = false){
    if ($ver){
        print_r($args);
    }
    extract($args);
    $_VIEW = $view;
    include_once '../vistas/layout_index.php';
}

function setViewApp($view,$args="",$ver = false){
    if ($ver){
        print_r($args);
    }
    extract($args);
    $_VIEW = $view;
    include_once '../vistas/layout_app.php';
}
function setViewAdmin($view,$args="",$ver = false){
    if ($ver){
        print_r($args);
    }
    extract($args);
    $_VIEW = $view;
    include_once '../vistas/layout_admin.php';
}


function _setUrl($url){
    return URL_BASE.$url;
}

function encryptIt( $q ) {

    return base64_encode( $q );
}

function decryptIt( $q ) {
    return base64_decode( $q );
}


function autoUpdate($model, $name, $id , $controller,$value,$min,$max){
    $url = _setUrl($controller);
    return "data-model='$model' data-name='$name' data-id='$id' data-controller='$url' value='$value' data-min='$min' data-max='$max'";
}

function prEx($r){
    print_r($r);
    die("-----AQUI SALI -----");
}


include_once '../modelos/UtilModel.php';
$Util = new UtilModel();
$_ESTADOS = $Util->getEstados();








function getSelectEstados($a)
{
    global $_ESTADOS;
    $ret = "";
    foreach ($_ESTADOS as $estado) {
        $nombre = $estado['estado'];
        $se = $a==$nombre?"selected":"";
        $ret .= "<option value='$nombre' $se >$nombre</option>";
    }
    return $ret;
}


function getParentesco($a)
{
    $ret = "";
    $arr = [['MADRE','Madre'],['PADRE','Padre'],['TIA','Tía(o)'],['HERMANA','Hermana(o)'],['ABUELA','Abuela(o)'],['OTRO','Otro']];
    foreach ($arr as $ar){
        $t = $ar[0]==$a?"selected":"";
        $ret .= "<option value='".$ar[0]."' $t >".$ar[1]."</option>";
    }
    return $ret;
}


function sendMail ($to,$name,$sub,$html){



//Load composer's autoloader
    require '../vendor/autoload.php';

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'cendicontacto@gmail.com';                 // SMTP username
        $mail->Password = 'Charly123.';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('cendicontacto@gmail.com', 'Mailer');
        $mail->addAddress($to, $name);     // Add a recipient
        //$mail->addReplyTo('info@example.com', 'Information');


        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name




        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $sub;
        $mail->Body    = $html;

        $mail->send();
        return true;
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        return false;
    }
}


function getMailLogin($mail,$pass,$nombre){
    return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Demo Email</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">	
		<tr>
			<td style="padding: 30px 30px 30px 30px;">
				<table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
					<tr>
						<td align="center" bgcolor="#6C1D45" style="padding: 1px 1px 1px 1px; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
							<img src="/cendi/public/images/logo/cover_logo.jpg" alt="Cover-IPN" width="100%" height="90" style="display: block; border: 1px solid rgb(108, 29, 69);box-sizing: border-box;" />
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
										<b>B i e n v e n i d o '.$nombre.'</b>
									</td>
								</tr>
								<tr>
									<td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
										¡Estás a un paso de terminar tu prerregistro! <br>
										Accede al sistema para continuar con el proceso.
									</td>
								</tr>
							</table>
						</td>
					</tr>

					<tr>
						<td align="center" bgcolor="#ffffff" style="padding: 5px 10px 5px 10px;">
							<table border="0" cellpadding="0" cellspacing="0" width="90%">
								<tr>
									<td align="center" style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
										
										Usuario: '.$mail.' <br> 
										Contraseña: '.$pass.' <br> 
										

									</td>
								</tr>
								<tr>
									<td align="center" style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
										<a href="/cendi/login" style="color: #ffffff;    color: #ffffff;display: block;background: #6c1d45;text-decoration: none;width: 160px;line-height: 3;">
										    Ingresa al Sistema
										</a>
									</td>
								</tr>
							</table>
						</td>
					</tr>

					<tr>
						<td align="center" bgcolor="#ffffff" style="padding: 5px 10px 5px 10px;">
							<table border="0" cellpadding="0" cellspacing="0" width="90%">
								<tr>
									<td align="left" style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
										Atentamente, <br> 
										El equipo de COCENDI.
									</td>
								</tr>
								</tr>
							</table>
						</td>
					</tr>

					<tr>
						<td bgcolor="#6C1D45" style="padding: 30px 30px 30px 30px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
										&reg; ESCOM, IPN 2019<br/>
										<a href="#" style="color: #ffffff;"><font color="#ffffff">Unsubscribe</font></a> to this newsletter instantly
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>';

}

function quita_acentos($cadena) {
    $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
    $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
    $texto = str_replace($no_permitidas, $permitidas ,$cadena);
    return $texto;
}


?>