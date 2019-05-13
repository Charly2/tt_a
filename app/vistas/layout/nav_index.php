<nav class="nav-gob ">
    <dgm-navbar></dgm-navbar>
</nav>


<div class="headerLN">
    <div class=" ipnLogo-enlace">
        <a href="index" class="linklandinipn">
            <p class="ipn-logo">
                <img src="<?=URL_BASE?>public/images/logo/logo-ipn.png" class="img-fluid" alt="Logotipo del Instituto Politécnico Nacional">
            </p>
            <p class="ipnLogo-slogan">
                <span class="u-fw600">Sistema para la Gestión de los Procesos de </span><br>
                <span class="slogan">Inscripción y Reinscripción de COCENDI</span>
            </p>
        </a>
    </div>
</div>

<nav class="navbar navbar-inverse navbar-embossed navbar-expand-lg " role="navigation" id="navin_1">
    <a class="navbar-brand" href="index">
        <img src="<?=URL_BASE?>public/images/logo/logo_header.png" class="logo_h"  alt="">
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-01"></button>
    <div class="collapse navbar-collapse" id="navbar-collapse-01">
        <ul class="nav navbar-nav mr-auto">
            <li><a href="<?=_setUrl('index');?>" class="<?=$url=='index'?'active':''?>">Inicio</a></li>
            <li><a href="#fakelink">¿Quiénes somos?</a></li>
            <li><a href="<?=_setUrl('requisitos');?>" class="<?=$url=='requisitos'?'active':''?>">Requisitos de Inscripción</a></li>
            <li><a href="<?=_setUrl('pre_registro');?>" class="<?=$url=='preregistro'||$url=='pre_registro'||$url=='registrocompleto'?'active':''?>">Preregistro</a></li>
        </ul>

        <div class="navbar-form form-inline my-2 my-lg-0">
            <ul class="nav navbar-nav mr-auto">
                <li><a href="<?=_setUrl('login');?>" class="<?=$url=='login'?'active':''?>">Login</a></li>
            </ul>
        </div>
    </div><!-- /.navbar-collapse -->
</nav><!-- /navbar -->



<!--
PARA EL LOGOUT
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages</a>
    <span class="dropdown-arrow"></span>
    <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
    </ul>
</li>-->