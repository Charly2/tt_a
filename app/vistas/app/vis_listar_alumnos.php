

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
        <th>Grupo</th>
        <th>Cendi</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    <?foreach ($data as $p){?>
        <tr>
            <td><?=$p['nombre']?></td>
            <td>Maternal I</td>
            <td>-----</td>
            <td><a href="<?=_setUrl('app/alumno/edit_alumno/'.$p['idestudiante'])?>" class="btn btn-primary">Editar</a></td>
        </tr>
    <?}?>
    </tbody>

</table>

<h4>Registrar Alumno</h4>
<a href="<?=_setUrl('app/alumno/crear')?>" class="btn btn-primary">Registrar Alumno</a>