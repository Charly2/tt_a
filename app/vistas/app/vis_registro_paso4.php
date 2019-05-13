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
            <div class="mb-0 headerform" data-acc-title>Documentación requerida </div>
            <div data-acc-content>
                <div class="my-3">

                    <table id="tabla" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                        <tr>
                            <th>Documento</th>
                            <th width="20%">Acción</th>
                            <th width="20%">Estatus</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Oficio del centro de trabajo solicitando la prestación*:</td>
                            <td align="center"><button class="btn btn-primary" onclick="setSend(this,'doc1','Oficio del centro de trabajo solicitando la prestación')" >Subir</button></td>
                            <td id="est_doc1"><?=$data[0]['estadoTxt']?></td>
                        </tr>
                        <tr>
                            <td>Nombramiento de basse (FUB)*:</td>
                            <td align="center"><button class="btn btn-primary" onclick="setSend(this,'doc2','Nombramiento de basse (FUB)')">Subir</button></td>
                            <td id="est_doc2"><?=$data[1]['estadoTxt']?></td>
                        </tr>
                        <tr>
                            <td>Nombramieto de base con minimo 18 horas para las trabajadoras académicas*:</td>
                            <td align="center"><button class="btn btn-primary" onclick="setSend(this,'doc3','Nombramieto de base con minimo 18 horas para las trabajadoras académicas')">Subir</button></td>
                            <td id="est_doc3"><?=$data[2]['estadoTxt']?></td>
                        </tr>
                        <tr>
                            <td>Constancia de horario de trabajo, expedida por la autoridad correspondiente*:</td>
                            <td align="center"><button class="btn btn-primary" onclick="setSend(this,'doc4','Constancia de horario de trabajo, expedida por la autoridad correspondiente')">Subir</button></td>
                            <td id="est_doc4"><?=$data[3]['estadoTxt']?></td>
                        </tr>
                        <tr>
                            <td>Copia del último comprobante de percepciones y descuentos (Talón de Pago)*:</td>
                            <td align="center"><button class="btn btn-primary" onclick="setSend(this,'doc5','Copia del último comprobante de percepciones y descuentos (Talón de Pago)')">Subir</button></td>
                            <td id="est_doc5"><?=$data[4]['estadoTxt']?></td>
                        </tr>
                        <tr>
                            <td>Copia del Acta de Nacimiento del menor certificada por el jefe de Capital Humano*:</td>
                            <td align="center"><button class="btn btn-primary" onclick="setSend(this,'doc6','Copia del Acta de Nacimiento del menor certificada por el jefe de Capital Humano')">Subir</button></td>
                            <td id="est_doc6"><?=$data[5]['estadoTxt']?></td>
                        </tr>
                        </tbody>

                    </table>



                </div>
            </div>
        </div>


    </div>

</div>



<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="tipoDoc">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="#" method="GET" class="form demo_form">
                    <input type="hidden" name="user" value="Algo">
                    <div class="upload" data-upload-options='{"action":"<?=_setUrl('app/alumno/fileUpload/doc')?>"}'></div>
                    <div class="filelists">
                        <ol class="filelist complete">
                            <li data-index="0"><span class="content"><span class="file" style="color: rgb(255, 255, 255);"><?=$data['derecho']['evidencia_a']?></span></span><span class="bar" style="width: 100%; background: rgb(47, 191, 65);"></span></li>
                        </ol>
                        <ol class="filelist queue">
                        </ol>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="cerrarmodal" data-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>



<script>

    function setSend(t,tipo,titulo){
        $('#tipoDoc').html(titulo);
        TIPOVAL = tipo;
        $('.filelists ol').each(function (e,t) {
            $(this).html("");
        });
        $('#cerrarmodal').removeClass('btn-success').addClass('btn-danger').html("Cerrar").data('tr','est_'+tipo);
        $('#myModal').modal('show');
    }

    $(document).ready(function() {


        $(".upload").each(function (e,f) {

            $(this).upload({
                maxSize: 1073741824,
                maxConcurrent:1,

                beforeSend: onBeforeSendDoc
            }).on("start.upload", onStart)
                .on("complete.upload", onCompleteDoc)
                .on("filestart.upload", onFileStart)
                .on("fileprogress.upload", onFileProgress)
                .on("filecomplete.upload", onCompleteFile)
                .on("fileerror.upload", onFileError)
                .on("chunkstart.upload", onChunkStart)
                .on("chunkprogress.upload", onChunkProgress)
                .on("chunkcomplete.upload", onChunkComplete)
                .on("chunkerror.upload", onChunkError)
                .on("queued.upload", onQueued);

        });


    });
    var TIPOVAL = "";
    var ESTADODOC = false;

    function onBeforeSendDoc(formData, file) {
        ESTADODOC = false;
        console.log("Before Send");
        formData.append("tipoVal", TIPOVAL);
        if (TIPOVAL.length<1){
            return false;
        }

        return (file.name.indexOf(".jpg") < -1) || (file.name.indexOf(".pdf") < -1) ? false : formData; // cancel all jpgs

    }


    function  onCompleteDoc(e) {
        console.log(e)
    }

    function onCompleteFile(e, file, response) {
        console.dir(e);
        console.log(response);
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
            b.css('background','#2fbf41');
            ESTADODOC = true;
            $('#cerrarmodal').html("Aceptar").removeClass('btn-danger').addClass('btn-success');

            console.log($('#'+$('#cerrarmodal').data('tr')).html("Cargado"))

        }
    }

</script>