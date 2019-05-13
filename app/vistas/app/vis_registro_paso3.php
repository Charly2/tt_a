<h1 class="text-center">Pre-registro de Inscripción</h1>
<h3>Ficha de Identificación</h3>
<section class="mb-3">
    <div class="row">
        <div class="col-md-12 text-right">
            <span class="text-muted">09-19-13, 26-03-19, 1931 1913 2 Tueam19</span>
        </div>
    </div>
</section>


<div id="form">

    <div class="list-group noPadding">

        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform" data-acc-title>Persona en caso necesario, pueda recoger al niño o niña </div>
            <div data-acc-content>
                <div class="my-3">
                    <div class="row rowjc">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Nombre (s)*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("persona","nombre",encryptIt($data['persona']['idPersona']),'app/alumno/update',$data['persona']['nombre'],4,25)?> placeholder="Escribe aquí tu nombre" />
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
                                <select type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("persona","lugarnac",encryptIt($data['persona']['idPersona']),'app/alumno/update',$data['persona']['lugarnac'],4,25)?>  >
                                    <?=getSelectEstados($data['persona']['lugarnac']);?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Fecha de nacimiento*:</label>
                                <input type="text" name="" class="form-control fecha autoupdate req_this" <?=autoUpdate("persona","fechanac",encryptIt($data['persona']['idPersona']),'app/alumno/update',$data['persona']['fechanac'],4,25)?>  placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>CURP*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this"  data-valido="curpValido" <?=autoUpdate("persona","curp",encryptIt($data['persona']['idPersona']),'app/alumno/update',$data['persona']['curp'],4,25)?>  placeholder="Escribe aquí tu CURP"/>
                            </div>
                        </div>
                    </div>
                    <div class="row rowjc">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Parentesco*:</label>
                                <select type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("personaautorizada","parentesco",encryptIt($data['personaautorizada']['idPersonaAutorizada']),'app/alumno/update',$data['personaautorizada']['parentesco'],1,25)?> placeholder="Escribe aquí el parentesco" >
                                    <?=getParentesco($data['personaautorizada']['parentesco'])?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Sexo*:</label>
                                <select type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("persona","genero",encryptIt($data['persona']['idPersona']),'app/alumno/update',$data['persona']['genero'],1,25)?>>
                                    <option value="M" <?=$data['persona']['genero']=="M"?"selected":""?> >Hombre</option>
                                    <option value="F" <?=$data['persona']['genero']=="F"?"selected":""?>>Mujer</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Estado civil*:</label>
                                <select type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("persona","estadocivil",encryptIt($data['persona']['idPersona']),'app/alumno/update',$data['persona']['estadocivil'],1,25)?>>
                                    <option <?=$data['persona']['estadocivil']=="casado"?"selected":""?> value="casado">Casado</option>
                                    <option <?=$data['persona']['estadocivil']=="soltero"?"selected":""?> value="soltero">Soltero</option>
                                    <option <?=$data['persona']['estadocivil']=="divorciado"?"selected":""?> value="divorciado">Divorciado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row rowjc">

                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Ocupación*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("personaautorizada","ocupacion",encryptIt($data['personaautorizada']['idPersonaAutorizada']),'app/alumno/update',$data['personaautorizada']['ocupacion'],1,25)?> placeholder="Escribe aquí tu Ocupación" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Escolaridad*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("persona","escolaridad",encryptIt($data['persona']['idPersona']),'app/alumno/update',$data['persona']['escolaridad'],4,25)?>  placeholder="Escribe aquí tu escolaridad" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Correo electrónico*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" data-valido="correo" <?=autoUpdate("persona","email",encryptIt($data['persona']['idPersona']),'app/alumno/update',$data['persona']['email'],4,25)?> placeholder="Escribe aquí tu escolaridad" />
                            </div>
                        </div>
                    </div>
                    <div class="row rowjc">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Teléfono fijo*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" data-valido="numeric" <?=autoUpdate("persona","telefono_fijo",encryptIt($data['persona']['idPersona']),'app/alumno/update',$data['persona']['telefono_fijo'],4,16)?> placeholder="Escribe aquí tu escolaridad" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Teléfono celular*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" data-valido="numeric" <?=autoUpdate("persona","telefono_celular",encryptIt($data['persona']['idPersona']),'app/alumno/update',$data['persona']['telefono_celular'],4,16)?> placeholder="Escribe aquí tu escolaridad" />
                            </div>
                        </div>
                    </div>

                    <span class="subtitlereg">Domicilio Particular</span> <!--Direccion-->

                    <div class="row rowjc">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Domicilio / Calle*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("direccion","calle ",encryptIt($data['direccion']['idDireccion']),'pre_registro/update',$data['direccion']['calle'],4,25)?> placeholder="Escribe aquí tu domicilio" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Número exterior*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("direccion","num_exterior ",encryptIt($data['direccion']['idDireccion']),'app/alumno/update',$data['direccion']['num_exterior'],1,4)?>  placeholder="Escribe aquí tu número exterior" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Número interior*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("direccion","num_interior ",encryptIt($data['direccion']['idDireccion']),'app/alumno/update',$data['direccion']['num_interior'],1,4)?>  placeholder="Escribe aquí tu número interior"/>
                            </div>
                        </div>
                    </div>
                    <div class="row rowjc">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Código Postal*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" data-valido="numeric" <?=autoUpdate("direccion","cp",encryptIt($data['direccion']['idDireccion']),'app/alumno/update',$data['direccion']['cp'],4,5)?>  id="CP" placeholder="Escribe aquí tu CP"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Alcaldía / Municipio*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" id="MU" placeholder="" <?=autoUpdate("direccion","municipio ",encryptIt($data['direccion']['idDireccion']),'app/alumno/update',$data['direccion']['municipio'],4,25)?>  value="Gustavo A. Madero" disabled="disabled"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Entidad Federativa*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" id="EN" placeholder="" <?=autoUpdate("direccion","estado",encryptIt($data['direccion']['idDireccion']),'app/alumno/update',$data['direccion']['estado'],4,25)?> value="México" disabled="disabled"/>
                            </div>
                        </div>
                    </div>
                    <div class="row rowjc">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Colonia*:</label>
                                <select type="text"  class="form-control autoupdate req_this" id="colonias"  <?=autoUpdate("direccion","colonia",encryptIt($data['direccion']['idDireccion']),'app/alumno/update',$data['direccion']['colonia'],4,null)?> >
                                    <option value="<?=$data['direccion']['colonia']?>"><?=$data['direccion']['colonia']?></option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <span class="subtitlereg">Domicilio del Trabajo</span>


                    <div class="row rowjc">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Domicilio / Calle*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("direccion","calle ",encryptIt($data['direcciontrabajo']['idDireccion']),'pre_registro/update',$data['direcciontrabajo']['calle'],4,25)?> placeholder="Escribe aquí tu domicilio" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Número exterior*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("direccion","num_exterior ",encryptIt($data['direcciontrabajo']['idDireccion']),'app/alumno/update',$data['direcciontrabajo']['num_exterior'],1,4)?>  placeholder="Escribe aquí tu número exterior" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Número interior*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" <?=autoUpdate("direccion","num_interior ",encryptIt($data['direcciontrabajo']['idDireccion']),'app/alumno/update',$data['direcciontrabajo']['num_interior'],1,4)?>  placeholder="Escribe aquí tu número interior"/>
                            </div>
                        </div>
                    </div>
                    <div class="row rowjc">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Código Postal*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" data-valido="numeric" <?=autoUpdate("direccion","cp",encryptIt($data['direcciontrabajo']['idDireccion']),'app/alumno/update',$data['direcciontrabajo']['cp'],4,5)?>  id="CP2" placeholder="Escribe aquí tu CP"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Alcaldía / Municipio*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" id="MU2" placeholder="" <?=autoUpdate("direccion","municipio ",encryptIt($data['direcciontrabajo']['idDireccion']),'app/alumno/update',$data['direcciontrabajo']['municipio'],4,25)?>  value="Gustavo A. Madero" disabled="disabled"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Entidad Federativa*:</label>
                                <input type="text" name="" class="form-control autoupdate req_this" id="EN2" placeholder="" <?=autoUpdate("direccion","estado",encryptIt($data['direcciontrabajo']['idDireccion']),'app/alumno/update',$data['direcciontrabajo']['estado'],4,25)?> value="México" disabled="disabled"/>
                            </div>
                        </div>
                    </div>
                    <div class="row rowjc">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Colonia*:</label>
                                <select type="text"  class="form-control autoupdate req_this" id="colonias2"  <?=autoUpdate("direccion","colonia",encryptIt($data['direcciontrabajo']['idDireccion']),'app/alumno/update',$data['direcciontrabajo']['colonia'],4,null)?> >
                                    <option value="<?=$data['direcciontrabajo']['colonia']?>"><?=$data['direcciontrabajo']['colonia']?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Horario de entrada de trabajo*:</label>
                                <input type="text" name="" class="form-control hora autoupdate req_this" <?=autoUpdate("personaautorizada","entrada ",encryptIt($data['personaautorizada']['idPersonaAutorizada']),'app/alumno/update',$data['personaautorizada']['entrada'],1,15)?>  placeholder="Escribe aquí tu Horario de entrada"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Horario de salida de trabajo*:</label>
                                <input type="text" name="" class="form-control hora autoupdate req_this" <?=autoUpdate("personaautorizada","salida ",encryptIt($data['personaautorizada']['idPersonaAutorizada']),'app/alumno/update',$data['personaautorizada']['salida'],1,15)?>  placeholder="Escribe aquí tu Horario de salida"/>
                            </div>
                        </div>
                    </div>
                    <div class="row rowjc">

                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Teléfono  trabajo*:</label>
                                <input type="text" name="" class="form-control  autoupdate req_this" data-validate="numeric" <?=autoUpdate("persona","telefono_trabajo",encryptIt($data['persona']['idPersona']),'app/alumno/update',$data['persona']['telefono_trabajo'],4,16)?>  placeholder="Escribe aquí tu Horario de salida"/>
                            </div>
                        </div>
                    </div>

                </div>
                <input type="submit" id="finalizar" class="btn btn-primary float-right btnnet" value="Siguiente">
            </div>
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
                window.location.href = "<?=URL_BASE?>app/alumno/reg_documentos/<?=$alumnno['estudiante']['idestudiante']?>"

            }

        });


        $('#CP').change(function (e) {

            fetch('https://api-codigos-postales.herokuapp.com/codigo_postal/'+this.value)
                .then(function(response) {
                    return response.json();
                })
                .then(function(myJson) {
                    console.log(myJson);
                    $('#MU').val(myJson[0].municipio).trigger('change');
                    $('#EN').val(myJson[0].estado).trigger('change');

                    var $_html = "";

                    myJson.forEach(function (e,t) {
                        $_html += "<option value='"+e.colonia+"'>"+e.colonia+"</option>";
                        console.log(e)
                    });

                    $('#colonias').html($_html).trigger('change');
                    console.log($_html);
                });

        });

        $('#CP2').change(function (e) {

            fetch('https://api-codigos-postales.herokuapp.com/codigo_postal/'+this.value)
                .then(function(response) {
                    return response.json();
                })
                .then(function(myJson) {
                    console.log(myJson);
                    $('#MU2').val(myJson[0].municipio).trigger('change');
                    $('#EN2').val(myJson[0].estado).trigger('change');

                    var $_html = "";

                    myJson.forEach(function (e,t) {
                        $_html += "<option value='"+e.colonia+"'>"+e.colonia+"</option>";
                        console.log(e)
                    });

                    $('#colonias2').html($_html).trigger('change');
                    console.log($_html);
                });

        });


    });
</script>