<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 ">
            <h2 class="text-center">Preregistro</h2>
            <div class="login">

                <form class="login-form" action="<?=_setUrl('pre_registro/create');?>" method="post">
                    <label class="lavllo" for="login-name">Número de empleado:</label>
                    <div class="form-group">
                        <input type="text" class="form-control login-field" value="" placeholder="Ingresa tu usuario" autocomplete="off" name="numero">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    <label class="lavllo" for="login-pass">Tipo de empleado:</label>
                    <div class="form-group">
                        <select type="text" class="form-control login-field" value="" placeholder="Ingresa tu Password"  name="tipo">
                            <option value="d">Docente</option>
                            <option value="p">PAE</option>
                        </select>
                        <label class="login-field-icon fui" for="login-pass"></label>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" >Ingresar</button>

                </form>
            </div>
        </div>
    </div>
</div>

