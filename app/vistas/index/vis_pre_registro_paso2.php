
<div class="container">
    <h1 class="text-center">Pre-registro de Inscripción</h1>
    <h3>Ficha de Identificación</h3>

    <section class="mb-3">
        <div class="row">
            <div class="col-md-12 text-right">
                <span class="text-muted"><?=date('h-i-s, j-m-y, it is w Day')?></span>
            </div>
        </div>
    </section>
    <div id="form">

        <div class="list-group noPadding">



            <div class="list-group-item py-3 noPadding" data-acc-stepx>
                <div class="mb-0 headerform" data-acc-titlex>Datos del Derechohabiente </div>

                <div data-acc-contentx>
                    <div class="my-3">
                        <span class="subtitlereg">Datos Generales</span>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Nombre (s)*:</label>
                                    <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("persona","nombre",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['nombre'],4,25)?>    placeholder="Escribe aquí tu nombre" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Primer apellido*:</label>
                                    <input type="text"   <?=autoUpdate("persona","appaterno",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['appaterno'],4,25)?> class="form-control autoupdate req_this" placeholder="Escribe aquí tu primer apellido" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Segundo apellido*:</label>
                                    <input type="text"  class="form-control autoupdate req_this" <?=autoUpdate("persona","apmaterno",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['apmaterno'],4,25)?> placeholder="Escribe aquí tu segundo apellido"/>
                                </div>
                            </div>
                        </div>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Lugar de nacimiento*:</label>
                                    <select type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("persona","lugarnac",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['lugarnac'],4,25)?>  >
                                        <?=getSelectEstados($data['persona']['lugarnac']);?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Fecha de nacimiento*:</label>
                                    <input type="text"  class="form-control fecha autoupdate req_this" <?=autoUpdate("persona","fechanac",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['fechanac'],4,25)?> placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>CURP*:</label>
                                    <input type="text" class="form-control autoupdate req_this"  data-valido="curpValido" <?=autoUpdate("persona","curp",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['curp'],4,25)?> placeholder="Escribe aquí tu CURP"/>
                                </div>
                            </div>
                        </div>



                        <span class="subtitlereg">Estado Civil</span>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Género*:</label>
                                    <select type="text"  class="form-control autoupdate req_this" id="genero" data-callback="muestraAlertGenero" <?=autoUpdate("persona","genero",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['genero'],4,25)?> >
                                        <option value="masculino" <?=$data['persona']['genero']=="masculino"?'selected':''?> >Masculino</option>
                                        <option value="femenino" <?=$data['persona']['genero']=="femenino"?'selected':''?> >Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Estado Civil*:</label>
                                    <select type="text"  class="form-control autoupdate req_this" id="edocivil" data-valido="validaedoCivil" <?=autoUpdate("persona","estadocivil",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['estadocivil'],4,25)?> >
                                        <option value="casado" <?=$data['persona']['estadocivil']=="casado"?'selected':''?>>Casada</option>
                                        <option value="soltero" <?=$data['persona']['estadocivil']=="soltero"?'selected':''?>>Soltero</option>
                                        <option value="viudo" <?=$data['persona']['estadocivil']=="viudo"?'selected:':''?>>Viudo</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row rowjc hide" id="fileuploadedocivil">
                            <div class="col-md-8">
                                <div class="form-group ">
                                    <label>Adjuntar evidencia*:</label>
                                    <form action="#" method="GET" class="form demo_form">
                                        <div class="upload" data-upload-options='{"action":"<?=_setUrl('pre_registro/fileUpload/edocivil')?>"}'></div>
                                        <div class="filelists">
                                            <ol class="filelist complete">
                                                <li data-index="0"><span class="content"><span class="file" style="color: rgb(255, 255, 255);"><?=$data['derecho']['evidencia_a']?></span></span><span class="bar" style="width: 100%; background: rgb(47, 191, 65);"></span></li>
                                            </ol>
                                            <ol class="filelist queue">
                                            </ol>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>





                        <span class="subtitlereg">Datos de Contacto</span>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Correo electrónico*:</label>
                                    <input type="text"  class="form-control autoupdate req_this" placeholder="user@domain.com" data-valido="correo" <?=autoUpdate("persona","email",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['email'],4,50)?> />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Telefono celular*:</label>
                                    <input type="text" data-valido="numtelefono" <?=autoUpdate("persona","telefono_celular",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['telefono_celular'],4,25)?> class="form-control autoupdate req_this"  placeholder="Escribe aquí tu número interior"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Telefono Fijo*:</label>
                                    <input type="text" name="" class="form-control autoupdate req_this" data-valido="numtelefono" <?=autoUpdate("persona","telefono_fijo",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['telefono_fijo'],4,25)?> placeholder="Escribe aquí tu número interior"/>
                                </div>
                            </div>
                        </div>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Telefono de Trabajo*:</label>
                                    <div class="d-flex">
                                        <input type="text" name="" class="form-control w180 autoupdate req_this" placeholder="xx-xx-xx-xx" data-valido="numtelefono" <?=autoUpdate("persona","telefono_trabajo ",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['telefono_trabajo'],4,25)?> />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <span class="subtitlereg">Datos del Domicilio</span>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Domicilio / Calle*:</label>
                                    <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("direccion","calle ",encryptIt($data['dir']['idDireccion']),'pre_registro/update',$data['dir']['calle'],4,25)?> placeholder="Escribe aquí tu domicilio" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Número exterior*:</label>
                                    <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("direccion","num_exterior ",encryptIt($data['dir']['idDireccion']),'pre_registro/update',$data['dir']['num_exterior'],1,4)?>  placeholder="Escribe aquí tu número exterior" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Número interior*:</label>
                                    <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("direccion","num_interior ",encryptIt($data['dir']['idDireccion']),'pre_registro/update',$data['dir']['num_interior'],1,4)?>  placeholder="Escribe aquí tu número interior"/>
                                </div>
                            </div>
                        </div>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Código Postal*:</label>
                                    <input type="text" name="" class="form-control autoupdate req_this" data-valido="numeric" <?=autoUpdate("direccion","cp",encryptIt($data['dir']['idDireccion']),'pre_registro/update',$data['dir']['cp'],4,5)?>  id="CP" placeholder="Escribe aquí tu CP"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Alcaldía / Municipio*:</label>
                                    <input type="text" name="" class="form-control autoupdate req_this" id="MU" placeholder="" <?=autoUpdate("direccion","municipio ",encryptIt($data['dir']['idDireccion']),'pre_registro/update',$data['dir']['municipio'],4,25)?>  value="Gustavo A. Madero" disabled="disabled"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Entidad Federativa*:</label>
                                    <input type="text" name="" class="form-control autoupdate req_this" id="EN" placeholder="" <?=autoUpdate("direccion","estado",encryptIt($data['dir']['idDireccion']),'pre_registro/update',$data['dir']['estado'],4,25)?> value="México" disabled="disabled"/>
                                </div>
                            </div>
                        </div>
                        <div class="row rowjc">

                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Colonia*:</label>
                                    <select type="text"  class="form-control autoupdate req_this" id="colonias"  <?=autoUpdate("direccion","colonia",encryptIt($data['dir']['idDireccion']),'pre_registro/update',$data['dir']['colonia'],4,null)?> >
                                        <option value="<?=$data['dir']['colonia']?>"><?=$data['dir']['colonia']?></option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <span class="subtitlereg">Datos del Centro de Trabajo</span>




                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Centro de Trabajo*:</label>
                                    <select class="form-control select select-primary autoupdate req_this" data-toggle="select" <?=autoUpdate("derechohabiente","centrodetrabajo",encryptIt($data['derecho']['idtrabajadora']),'pre_registro/update',$data['derecho']['centrodetrabajo'],null,null)?>>
                                        <option value="1">ESIME</option>
                                        <option value="2">UPIITA</option>
                                        <option value="3">UPIICSA</option>
                                        <option value="4" selected>ESCOM</option>
                                        <option value="5">CECYT 2</option>
                                        <option value="5">CECYT 1</option>
                                        <option value="5">CECYT 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Puesto*:</label>
                                    <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("derechohabiente","puesto",encryptIt($data['derecho']['idtrabajadora']),'pre_registro/update',$data['derecho']['puesto'],4,25)?> placeholder="Escribe aquí tu puesto" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Escolaridad*:</label>
                                    <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("persona","escolaridad",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['escolaridad'],4,25)?> placeholder="Escribe aquí tu escolaridad" />
                                </div>
                            </div>
                        </div>
                        <div class="row rowjc">

                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Hora de entrada*:</label>
                                    <input type="text" name="" class="form-control hora autoupdate req_this" <?=autoUpdate("derechohabiente","horaentrada",encryptIt($data['derecho']['idtrabajadora']),'pre_registro/update',$data['derecho']['horaentrada'],null,null)?> placeholder="Escribe aquí tu hora de entrada" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Hora de salida*:</label>
                                    <input type="text" name="" class="form-control hora autoupdate req_this" <?=autoUpdate("derechohabiente","horasalida",encryptIt($data['derecho']['idtrabajadora']),'pre_registro/update',$data['derecho']['horasalida'],null,null)?> placeholder="Escribe aquí tu hora de salida" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Horas de base*:</label>
                                    <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("derechohabiente","horasbase",encryptIt($data['derecho']['idtrabajadora']),'pre_registro/update',$data['derecho']['horasbase'],null,null)?> placeholder="Escribe aquí tus horas de base" />
                                </div>
                            </div>
                        </div>
                        <div class="row rowjc">


                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Horas de Interinato*:</label>
                                    <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("derechohabiente","horasinter",encryptIt($data['derecho']['idtrabajadora']),'pre_registro/update',$data['derecho']['horasinter'],null,null)?> placeholder="Escribe aquí tus horas de base" />
                                </div>
                            </div>
                        </div>


                        <span class="subtitlereg">Fotografía</span>

                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <label class="lw100">Adjuntar Fotografía*:</label>
                                    <form action="#" method="GET" class="form demo_form">
                                        <div class="upload" data-upload-options='{"action":"<?=_setUrl('pre_registro/filePhoto')?>"}'></div>
                                        <div class="filelists">
                                            <ol class="filelist complete">

                                            </ol>
                                            <ol class="filelist queue">
                                            </ol>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input type="submit" id="finalizar" class="btn btn-primary float-right btnnet" value="Finalizar">

        </div>

    </div>
</div>

<style>
   
</style>
<script>
    $(document).ready(function() {
            $(".upload").upload({
            maxSize: 1073741824,
            maxConcurrent:1,

            beforeSend: onBeforeSend
        }).on("start.upload", onStart)
            .on("complete.upload", onCompleteEdoCivilAll)
            .on("filestart.upload", onFileStart)
            .on("fileprogress.upload", onFileProgress)
            .on("filecomplete.upload", onCompleteEdoCivil)
            .on("fileerror.upload", onFileError)
            .on("chunkstart.upload", onChunkStart)
            .on("chunkprogress.upload", onChunkProgress)
            .on("chunkcomplete.upload", onChunkComplete)
            .on("chunkerror.upload", onChunkError)
            .on("queued.upload", onQueued);



    });


    function  onCompleteEdoCivilAll(e) {
        console.log(e)
    }

    function onCompleteEdoCivil(e, file, response) {
        response = response.split("--code--")[1];
        if (response.trim() != "OK" ) {
            $(this).parents("form").find(".filelist.complete")
                .find("li[data-index=" + file.index + "]").addClass("error")
                .find(".progress").text(response.trim());
        } else {
            var $target = $(this).parents("form").find(".filelist.complete").find("li[data-index=" + file.index + "]");
            $target.find(".file").text(file.name);
            $target.find(".progress").remove();
            $target.find(".cancel").remove();
            //$target.appendTo($(this).parents("form").find(".filelist.complete"));
            $(this).parents("form").find(".filelist.complete").html($target);
            var a = $(this).parents("form").find(".filelist.complete .content .file")
            var b = $(this).parents("form").find(".filelist.complete .bar ")
            a.css('color','white')
            b.css('background','#2fbf41')
        }
    }



</script>
<script src="<?=URL_BASE?>/public/js/jquery.accordion-wizard.min.js"></script>

<script src="<?=URL_BASE?>/public/js/index/pre_registro_paso2.js"></script>