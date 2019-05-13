<h1>Bienvenidos a la plataforma del CENDI </h1>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="well well-sm">
            <div class="row">
                <div class="col-sm-6 col-md-4 text-center">
                    <img src="<?=URL_BASE."store/_store/_users/".$_SESSION['derecho']['idtrabajadora']."/img_perfil.jpg"?>" style="width: 230px" alt="" class="img-rounded img-responsive" />
                </div>
                <div class="col-sm-6 col-md-8">
                    <h4>
                        <?=$nombre." ".$appaterno." ".$apmaterno?>  </h4>
                    <small>
                        <cite title="">
                            <?=$curp?>
                        </cite>
                    </small>
                    <p>
                        <i class="glyphicon glyphicon-envelope"></i><?=$email?>
                        <br />
                        <i class="glyphicon glyphicon-envelope"></i><?=$telefono_fijo?>
                        <br />
                        <i class="glyphicon glyphicon-gift"></i><?=$fechanac?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


