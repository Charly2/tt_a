

<h1 class="text-center">Lista de Alumnos</h1>
<section class="mb-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <span class="text-muted">A continuación se muestran sus hijos inscritos en el sistema Cendi</span>
        </div>
    </div>
</section>
<h4>Lista de Alumnos Inscritos</h4>
<table id="tabla" class="table table-striped table-bordered" style="width: 100%;">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    <?foreach ($data as $p){?>
        <tr>
            <td><?=$p['nombre']." ".$p['appaterno']." ".$p['apmaterno']?> </td>
            <td><a href="<?=_setUrl('admin/validadocumentos/validadocumentos/'.$p['idprocesoinscripcion'])?>" class="btn btn-primary bg-primary2">Validar</a></td>
        </tr>
    <?}?>
    </tbody>

</table>

