$(document).ready(function (e) {
    $('.autoupdate').change(function (e) {
        let ESTADO = 0;
        var $this = this;
        var input = $($(this).parent());

        if (this.dataset.min){if (!(this.value.length >= this.dataset.min)) {ESTADO++}}
        if (this.dataset.max){if (!(this.value.length <= this.dataset.max)) {ESTADO++}}



        if (this.dataset.valido){
            eval("ESTADO += " +this.dataset.valido+"('"+this.value+"')");
        }

        if(ESTADO<1){
            $data = this.dataset;
            $data.value = this.value;
            $.post( $data.controller,  $data ).done(function( data ) {
                console.log(data);
                if ($this.dataset.callback){
                    eval($this.dataset.callback+"($this,data)");
                }
                input.setEstatus(undefined);
            });
        }else{
            console.log("ERROS");
            input.setEstatus('error');
        }






    });
});

function curpValido(rfc) {

    var patternPM = "^(([A-ZÑ&]{3})([0-9]{2})([0][13578]|[1][02])(([0][1-9]|[12][\\d])|[3][01])([A-Z0-9]{3}))|" +
        "(([A-ZÑ&]{3})([0-9]{2})([0][13456789]|[1][012])(([0][1-9]|[12][\\d])|[3][0])([A-Z0-9]{3}))|" +
        "(([A-ZÑ&]{3})([02468][048]|[13579][26])[0][2]([0][1-9]|[12][\\d])([A-Z0-9]{3}))|" +
        "(([A-ZÑ&]{3})([0-9]{2})[0][2]([0][1-9]|[1][0-9]|[2][0-8])([A-Z0-9]{3}))$";
    var patternPF = "^(([A-ZÑ&]{4})([0-9]{2})([0][13578]|[1][02])(([0][1-9]|[12][\\d])|[3][01])([A-Z0-9]{3}))|" +
        "(([A-ZÑ&]{4})([0-9]{2})([0][13456789]|[1][012])(([0][1-9]|[12][\\d])|[3][0])([A-Z0-9]{3}))|" +
        "(([A-ZÑ&]{4})([02468][048]|[13579][26])[0][2]([0][1-9]|[12][\\d])([A-Z0-9]{3}))|" +
        "(([A-ZÑ&]{4})([0-9]{2})[0][2]([0][1-9]|[1][0-9]|[2][0-8])([A-Z0-9]{3}))$";

    if (rfc.match(patternPM) || rfc.match(patternPF)) {
        return 0;
    } else {
        return 1;
    }
}

function muestraAlertGenero(t,d){
    $($('#edocivil').parent()).setEstatus()
    $('#fileuploadedocivil').hide();
   if (t.value=="femenino"){
       $('#edocivil').children()[0].innerHTML="Casada";
       $('#edocivil').children()[0].selected=true;
       $('#edocivil').children()[1].innerHTML="Soltera";
       $('#edocivil').children()[2].innerHTML="Viuda";

   } else{
       $('#edocivil').children()[0].innerHTML="Casado";
       $('#edocivil').children()[0].selected=true;
       $('#edocivil').children()[1].innerHTML="Soltero";
       $('#edocivil').children()[2].innerHTML="Viudo";
       $($('#edocivil').parent()).setEstatus('error')
   }
    $('#edocivil').trigger('change');
}


function validaedoCivil(t){
    $('#fileuploadedocivil').hide();
    if ( $('#genero').val() =="masculino" && $('#edocivil').val() =="viudo" ){
        $('#fileuploadedocivil').fadeIn();
        return 0;
    }
    if ( $('#genero').val() =="masculino" && $('#edocivil').val() !="viudo" ){

        return 1;
    }
    return 0;
}
function correo(t){
    var patternPM = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if (t.match(patternPM)){
        return 0;
    }else{
        return 1;
    }
}

function numtelefono(t){
    var patternPM =/^([0-9])*$/;
    if (t.match(patternPM)){
        return 0;
    }else{
        return 1;
    }
}

function numeric(t){
    var patternPM =/^([0-9])*$/;
    if (t.match(patternPM)){
        return 0;
    }else{
        return 1;
    }
}





$.fn.setEstatus = function(e){
    if (e!=""){
        $(this).removeClass('has-success').removeClass('has-error').addClass('has-'+e);
    }else{
        $(this).removeClass('has-success').removeClass('has-error');
    }
}



