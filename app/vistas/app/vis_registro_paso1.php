<h1 class="text-center">Pre-registro de Inscripción</h1>
<h3>Ficha de Identificación</h3>
<section class="mb-3">
    <div class="row">
        <div class="col-md-12 text-right">
            <span class="text-muted"><?=date("d/m/Y")?></span>
        </div>
    </div>
</section>



<div id="form">

    <div class="list-group noPadding">

        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform" data-acc-title>Datos del Niño o de la Niña</div>
            <div data-acc-content>
                <div class="my-3">
                    <div class="row rowjc">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Nombre (s)*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("persona","nombre",encryptIt($data['persona']['idPersona']),'app/alumno/update',$data['persona']['nombre'],4,25)?> placeholder="Escribe aquí tu nombre" value=""/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Primer apellido*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("persona","appaterno",encryptIt($data['persona']['idPersona']),'app/alumno/update',$data['persona']['appaterno'],4,25)?> placeholder="Escribe aquí tu primer apellido" value=""/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Segundo apellido*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("persona","apmaterno",encryptIt($data['persona']['idPersona']),'app/alumno/update',$data['persona']['apmaterno'],4,25)?> placeholder="Escribe aquí tu segundo apellido"/>
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
                                <input type="text" name="" class="form-control fecha autoupdate req_this" <?=autoUpdate("persona","fechanac",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['fechanac'],4,25)?>  placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>CURP*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this"  data-valido="curpValido" <?=autoUpdate("persona","curp",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['curp'],4,25)?>  placeholder="Escribe aquí tu CURP"/>
                            </div>
                        </div>
                    </div>
                    <div class="row rowjc">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Grupo sanguíneo y Rh:*:</label>
                                <select type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("persona","gruposan",encryptIt($data['persona']['idPersona']),'pre_registro/update',$data['persona']['gruposan'],null,null)?> >
                                    <option <?=$data['persona']['gruposan']=="o+"?"selected":""?> value="o+">O+</option>
                                    <option <?=$data['persona']['gruposan']=="o-"?"selected":""?> value=o->O-</option>
                                    <option <?=$data['persona']['gruposan']=="a+"?"selected":""?> value="a+">A+</option>
                                    <option <?=$data['persona']['gruposan']=="o-"?"selected":""?> value="o-">A-</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <input type="submit" id="finalizar" class="btn btn-primary float-right btnnet" value="Siguiente">
        </div>




        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform" data-acc-title>Datos del Cónyugue </div>
        </div>
        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform" data-acc-title>Persona en caso necesario, pueda recoger al niño o niña</div>
        </div>
        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform" data-acc-title>Documentación requerida</div>
        </div>

    </div>

</div>



<script src="<?=URL_BASE?>public/js/jquery.accordion-wizard.min.js"></script>

<script>


    $( function() {
        $('.fecha').datepicker({
            timepicker: false,
            language: 'es',
            maxHours: 18,
            onSelect: function (fd, d, picker) {
                $(picker.el).trigger('change')
            }
        });
        $('.hora').datepicker({
            timepicker: true,
            onlyTimepicker: true,
            language: 'es',
            maxHours: 18,
            onSelect: function (fd, d, picker) {
                $(picker.el).trigger('change')
            }
        });

    });

    $('#finalizar').click(function (e) {

        $_Err = 0;
        $('.req_this').each(function (e) {
            if (this.value == "" ){4
                $_Err +=1;
                $(this).parent().setEstatus('error')
            }
        });
        console.log($_Err)
        if ($_Err > 0){
            console.log("Errores")
        } else{
            window.location.href = "<?=URL_BASE?>app/alumno/reg_conyuge/<?=$data['estudiante']['idestudiante']?>"

        }

    });
</script>