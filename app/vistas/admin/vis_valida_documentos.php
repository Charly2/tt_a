<h1 class="text-center">Cotejar Documentación</h1>
<section class="mb-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <span class="text-muted"></span>
        </div>
    </div>
</section>


<div id="form">

    <div class="list-group noPadding">



        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform2" data-acc-title>Oficio del centro de trabajo solicitando la prestación</div>
            <div data-acc-content>
                <div class="my-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Información registrada</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Nombre</b>
                                </div>
                                <div class="col-md-6">
                                    <?=$data['nombre']." ".$data['appaterno']." ".$data['apmaterno']." "?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Fecha y lugar de nacimiento</b>
                                </div>
                                <div class="col-md-6">
                                    <?=$data['fechanac']." - ".$data['lugarnac']." "?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Centro de trabajo</b>
                                </div>
                                <div class="col-md-6">
                                    <?="Puesto:".$der['puesto']." <br> Entrada:".$der['horaentrada']." "?>
                                    <?=" <br> Salida:".$der['horasalida']." <br> Centro de Trabajo:".$der['centrodetrabajo']." "?>
                                    <?=" <br> Escolaridad:".$der['escolaridad']." <br> Horas de base:".$der['horasbase']." "?>
                                    <?=" <br> Horas de interinato:".$der['horasinter']." <br> Número de trabajador:".$der['numtrabajador']." "?>
                                </div>
                            </div>
                            <div class="row mt-3 p-3">
                                <div class="form-group ">
                                    <label>Observaciones*:</label>
                                    <textarea name="" class="form-control" id="ob1" cols="50" rows="3"></textarea>
                                    <span id="ob1_s" class="text-danger"></span>
                                </div>

                                <div class="col-md-6">
                                    <button class="btn btn-success " id="ac1" onclick="acepta_doc(this,'re1',<?=$docs[0]['idValidadocumentos']?>,'ob1')">Aceptar</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-warning " id="re1" onclick="rechaza_doc(this,'ac1',<?=$docs[0]['idValidadocumentos']?>,'ob1')" >Pendiente</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Documento adjunto</h6>
                            <iframe src="<?=URL_BASE?>store/_store/_users/<?=$data['madre']?>/<?=$data['idestudiante']?>/<?=$docs[0]['doc']?>" style="width: 100%; height:  540px;" frameborder="0"></iframe>﻿
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform2" data-acc-title>Nombramiento de base (FUB)</div>
            <div data-acc-content>
                <div class="my-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Información registrada</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Nombre</b>
                                </div>
                                <div class="col-md-6">
                                    <?=$der['nombre']." ".$der['appaterno']." ".$der['apmaterno']." "?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Fecha y lugar de nacimiento</b>
                                </div>
                                <div class="col-md-6">
                                    <?=$der['fechanac']." - ".$der['lugarnac']." "?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Centro de trabajo</b>
                                </div>
                                <div class="col-md-6">
                                    <?="Puesto:".$der['puesto']." <br> Entrada:".$der['horaentrada']." "?>
                                    <?=" <br> Salida:".$der['horasalida']." <br> Centro de Trabajo:".$der['centrodetrabajo']." "?>
                                    <?=" <br> Escolaridad:".$der['escolaridad']." <br> Horas de base:".$der['horasbase']." "?>
                                    <?=" <br> Horas de interinato:".$der['horasinter']." <br> Número de trabajador:".$der['numtrabajador']." "?>
                                </div>
                            </div>
                            <div class="row mt-3 p-3">
                                <div class="form-group ">
                                    <label>Observaciones*:</label>
                                    <textarea name="" class="form-control" id="ob2" cols="50" rows="3"></textarea>
                                    <span id="ob2_s" class="text-danger"></span>
                                </div>

                                <div class="col-md-6">
                                    <button class="btn btn-success " id="ac2" onclick="acepta_doc(this,'re2',<?=$docs[1]['idValidadocumentos']?>,'ob2')">Aceptar</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-warning " id="re2" onclick="rechaza_doc(this,'ac2',<?=$docs[1]['idValidadocumentos']?>,'ob2')" >Pendiente</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Documento adjunto</h6>
                            <iframe src="<?=URL_BASE?>store/_store/_users/<?=$data['madre']?>/<?=$data['idestudiante']?>/<?=$docs[1]['doc']?>" style="width: 100%; height:  540px;" frameborder="0"></iframe>﻿
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform2" data-acc-title>Nombramiento de base con minimo 18 horas para las trabajadoras académicas</div>
            <div data-acc-content>
                <div class="my-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Información registrada</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Nombre</b>
                                </div>
                                <div class="col-md-6">
                                    <?=$data['nombre']." ".$data['appaterno']." ".$data['apmaterno']." "?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Fecha y lugar de nacimiento</b>
                                </div>
                                <div class="col-md-6">
                                    <?=$data['fechanac']." - ".$data['lugarnac']." "?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Centro de trabajo</b>
                                </div>
                                <div class="col-md-6">
                                    <?="Puesto:".$der['puesto']." <br> Entrada:".$der['horaentrada']." "?>
                                    <?=" <br> Salida:".$der['horasalida']." <br> Centro de Trabajo:".$der['centrodetrabajo']." "?>
                                    <?=" <br> Escolaridad:".$der['escolaridad']." <br> Horas de base:".$der['horasbase']." "?>
                                    <?=" <br> Horas de interinato:".$der['horasinter']." <br> Número de trabajador:".$der['numtrabajador']." "?>
                                </div>
                            </div>
                            <div class="row mt-3 p-3">
                                <div class="form-group ">
                                    <label>Observaciones*:</label>
                                    <textarea name="" class="form-control" id="ob3" cols="50" rows="3"></textarea>
                                    <span id="ob3_s" class="text-danger"></span>
                                </div>

                                <div class="col-md-6">
                                    <button class="btn btn-success " id="ac3" onclick="acepta_doc(this,'re3',<?=$docs[2]['idValidadocumentos']?>,'ob3')">Aceptar</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-warning " id="re3" onclick="rechaza_doc(this,'ac3',<?=$docs[2]['idValidadocumentos']?>,'ob3')" >Pendiente</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Documento adjunto</h6>
                            <iframe src="<?=URL_BASE?>store/_store/_users/<?=$data['madre']?>/<?=$data['idestudiante']?>/<?=$docs[2]['doc']?>" style="width: 100%; height:  540px;" frameborder="0"></iframe>﻿
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform2" data-acc-title>Constancia de horario de trabajo, expedida por la autoridad correspondiente</div>
            <div data-acc-content>
                <div class="my-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Información registrada</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Nombre</b>
                                </div>
                                <div class="col-md-6">
                                    <?=$data['nombre']." ".$data['appaterno']." ".$data['apmaterno']." "?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Fecha y lugar de nacimiento</b>
                                </div>
                                <div class="col-md-6">
                                    <?=$data['fechanac']." - ".$data['lugarnac']." "?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Centro de trabajo</b>
                                </div>
                                <div class="col-md-6">
                                    <?="Puesto:".$der['puesto']." <br> Entrada:".$der['horaentrada']." "?>
                                    <?=" <br> Salida:".$der['horasalida']." <br> Centro de Trabajo:".$der['centrodetrabajo']." "?>
                                    <?=" <br> Escolaridad:".$der['escolaridad']." <br> Horas de base:".$der['horasbase']." "?>
                                    <?=" <br> Horas de interinato:".$der['horasinter']." <br> Número de trabajador:".$der['numtrabajador']." "?>
                                </div>
                            </div>
                            <div class="row mt-3 p-3">
                                <div class="form-group ">
                                    <label>Observaciones*:</label>
                                    <textarea name="" class="form-control" id="ob4" cols="50" rows="3"></textarea>
                                    <span id="ob4_s" class="text-danger"></span>
                                </div>

                                <div class="col-md-6">
                                    <button class="btn btn-success " id="ac4" onclick="acepta_doc(this,'re4',<?=$docs[3]['idValidadocumentos']?>,'ob4')">Aceptar</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-warning " id="re4" onclick="rechaza_doc(this,'ac4',<?=$docs[3]['idValidadocumentos']?>,'ob4')" >Pendiente</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Documento adjunto</h6>
                            <iframe src="<?=URL_BASE?>store/_store/_users/<?=$data['madre']?>/<?=$data['idestudiante']?>/<?=$docs[3]['doc']?>" style="width: 100%; height:  540px;" frameborder="0"></iframe>﻿
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform2" data-acc-title>Copia del último comprobante de percepciones y descuentos (Talón de Pago)</div>
            <div data-acc-content>
                <div class="my-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Información registrada</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Nombre</b>
                                </div>
                                <div class="col-md-6">
                                    <?=$data['nombre']." ".$data['appaterno']." ".$data['apmaterno']." "?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Fecha y lugar de nacimiento</b>
                                </div>
                                <div class="col-md-6">
                                    <?=$data['fechanac']." - ".$data['lugarnac']." "?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Centro de trabajo</b>
                                </div>
                                <div class="col-md-6">
                                    <?="Puesto:".$der['puesto']." <br> Entrada:".$der['horaentrada']." "?>
                                    <?=" <br> Salida:".$der['horasalida']." <br> Centro de Trabajo:".$der['centrodetrabajo']." "?>
                                    <?=" <br> Escolaridad:".$der['escolaridad']." <br> Horas de base:".$der['horasbase']." "?>
                                    <?=" <br> Horas de interinato:".$der['horasinter']." <br> Número de trabajador:".$der['numtrabajador']." "?>
                                </div>
                            </div>
                            <div class="row mt-3 p-3">
                                <div class="form-group ">
                                    <label>Observaciones*:</label>
                                    <textarea name="" class="form-control" id="ob5" cols="50" rows="3"></textarea>
                                    <span id="ob5_s" class="text-danger"></span>
                                </div>

                                <div class="col-md-6">
                                    <button class="btn btn-success " id="ac5" onclick="acepta_doc(this,'re5',<?=$docs[4]['idValidadocumentos']?>,'ob5')">Aceptar</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-warning " id="re5" onclick="rechaza_doc(this,'ac5',<?=$docs[4]['idValidadocumentos']?>,'ob5')" >Pendiente</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Documento adjunto</h6>
                            <iframe src="<?=URL_BASE?>store/_store/_users/<?=$data['madre']?>/<?=$data['idestudiante']?>/<?=$docs[4]['doc']?>" style="width: 100%; height:  540px;" frameborder="0"></iframe>﻿
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform2" data-acc-title>Copia de la credencial vigente del I.P.N.</div>
            <div data-acc-content>
                <div class="my-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Información registrada</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Nombre</b>
                                </div>
                                <div class="col-md-6">
                                    <?=$data['nombre']." ".$data['appaterno']." ".$data['apmaterno']." "?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Fecha y lugar de nacimiento</b>
                                </div>
                                <div class="col-md-6">
                                    <?=$data['fechanac']." - ".$data['lugarnac']." "?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Centro de trabajo</b>
                                </div>
                                <div class="col-md-6">
                                    <?="Puesto:".$der['puesto']." <br> Entrada:".$der['horaentrada']." "?>
                                    <?=" <br> Salida:".$der['horasalida']." <br> Centro de Trabajo:".$der['centrodetrabajo']." "?>
                                    <?=" <br> Escolaridad:".$der['escolaridad']." <br> Horas de base:".$der['horasbase']." "?>
                                    <?=" <br> Horas de interinato:".$der['horasinter']." <br> Número de trabajador:".$der['numtrabajador']." "?>
                                </div>
                            </div>
                            <div class="row mt-3 p-3">
                                <div class="form-group ">
                                    <label>Observaciones*:</label>
                                    <textarea name="" class="form-control" id="ob6" cols="50" rows="3"></textarea>
                                    <span id="ob6_s" class="text-danger"></span>
                                </div>

                                <div class="col-md-6">
                                    <button class="btn btn-success " id="ac6" onclick="acepta_doc(this,'re6',<?=$docs[5]['idValidadocumentos']?>,'ob6')">Aceptar</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-warning " id="re6" onclick="rechaza_doc(this,'ac6',<?=$docs[5]['idValidadocumentos']?>,'ob6')" >Pendiente</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Documento adjunto</h6>
                            <iframe src="<?=URL_BASE?>store/_store/_users/<?=$data['madre']?>/<?=$data['idestudiante']?>/<?=$docs[5]['doc']?>" style="width: 100%; height:  540px;" frameborder="0"></iframe>﻿
                        </div>
                    </div>
                </div>
            </div>
        </div>


      <!--  <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform2" data-acc-title>Copia del Acta de Nacimiento del menor certificada por el jefe de Capital Humano</div>
            <div data-acc-content>
                <div class="my-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Información registrada</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Clave</b>
                                </div>
                                <div class="col-md-6">
                                    Valor
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Clave</b>
                                </div>
                                <div class="col-md-6">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Clave</b>
                                </div>
                                <div class="col-md-6">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button class="btn btn-success">Aceptar</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-warning">Pendiente</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Documento adjunto</h6>
                            <iframe src="https://docs.google.com/gview?url=http://static.googleusercontent.com/media/research.google.com/en//pubs/archive/43934.pdf&embedded=true" style="width: 100%; height:  540px;" frameborder="0"></iframe>﻿
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform2" data-acc-title>Certificado Médico del menor</div>
            <div data-acc-content>
                <div class="my-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Información registrada</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Clave</b>
                                </div>
                                <div class="col-md-6">
                                    Valor
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Clave</b>
                                </div>
                                <div class="col-md-6">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Clave</b>
                                </div>
                                <div class="col-md-6">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button class="btn btn-success">Aceptar</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-warning">Pendiente</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Documento adjunto</h6>
                            <iframe src="https://docs.google.com/gview?url=http://static.googleusercontent.com/media/research.google.com/en//pubs/archive/43934.pdf&embedded=true" style="width: 100%; height:  540px;" frameborder="0"></iframe>﻿
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform2" data-acc-title>Estudio socioeconómico</div>
            <div data-acc-content>
                <div class="my-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Información registrada</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Clave</b>
                                </div>
                                <div class="col-md-6">
                                    Valor
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Clave</b>
                                </div>
                                <div class="col-md-6">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b>Clave</b>
                                </div>
                                <div class="col-md-6">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button class="btn btn-success">Aceptar</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-warning">Pendiente</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>Documento adjunto</h6>
                            <iframe src="https://docs.google.com/gview?url=http://static.googleusercontent.com/media/research.google.com/en//pubs/archive/43934.pdf&embedded=true" style="width: 100%; height:  540px;" frameborder="0"></iframe>﻿
                        </div>
                    </div>
                </div>
            </div>
        </div>

-->






    </div>

</div>

<script src="<?=URL_BASE?>public/js/jquery.accordion-wizard.min.js"></script>
<script>


    function acepta_doc(t,r,id,ob) {
        $('#'+r).attr("disabled", true);
        $.post( "<?=URL_BASE?>admin/validadocumentos/update", {
            val: 1,
            ob: $('#'+ob).val(),
            id: id
        }).done(function( data ) {
            console.log(data);
        });
        console.log($('#'+ob).val());
    }
    function rechaza_doc(t,r,id,ob) {
        if ($('#'+ob).val()){
            $('#'+ob+"_s").html("");
            $('#'+r).attr("disabled", true);
            console.log(id);
            $.post( "<?=URL_BASE?>admin/validadocumentos/update", {
                val: 2,
                ob: $('#'+ob).val(),
                id: id
            }).done(function( data ) {
                    console.log(data);
            });
        }else{
            $('#'+ob+"_s").html("Debes ingresar una observación");
        }


    }
    
    var options = {
        mode: 'wizard',
        autoButtonsNextClass: 'btn btn-primary float-right btnnet',
        autoButtonsPrevClass: 'btn btn-light mr-1 btnbac',
        stepNumberClass: 'badge badge-pill badge-primary-gin mr-1',
        autoButtonsSubmitText:'Finalizar',
        onSubmit: function() {
            alert("asdas");
            window.location.href = "/cendi/admin/validadocumentos/"
            return false;
        }
    }
    $(document).ready(function() {
        $( "#form" ).accWizard(options);
        $('input.btn.btn-primary.float-right.btnnet').click(function (e) {
            e.preventDefault();
            window.location.href = "/cendi/admin/validadocumentos/"

            //btn  btn-disabled
        });
    } );



</script>
