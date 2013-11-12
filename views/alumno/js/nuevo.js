/**
 * Unicorn Admin Template
 * Diablo9983 -> diablo9983@gmail.com
 **/
$(document).ready(function() {

    $('input[type=checkbox],input[type=radio],input[type=file]').uniform();
    // Form Validation
    $("#form").validate({
        rules: {
            curso: {
                required: true
            }
        },
        messages: {
            curso: {
                required: "Ingrese el nombre del curso."
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
});

function loadSecciones() {
    var nivel = $('#id_nivel').val(),
            grado = $('#id_grado').val();
    var options = {
        type: "GET",
        dataType: 'json',
        url: '/nodats/nivel/seccionesAjax/',
        data: {
            nivel: nivel,
            grado: grado
        },
        async: true,
        ajaxSend: function(data, textStatus, jqXHR) {
            $('#id_cod_seccion').html('Cargando...');
        }
    };
    var posting = $.ajax(options);

    posting.done(function(data, textStatus, jqXHR) {
        var combo = $('#id_cod_seccion'),
        opt=null;
        combo.empty();
        $.each(data, function(k, v) {
            opt = '<option value="' + v['codigo'] + '"> ' + v['nombreseccion'] + ' </option>';
            combo.append(opt);
        });
    })
            .fail(function(data, textStatus, jqXHR) {
        $('#id_cod_seccion').empty();
    });
}

$('#id_nivel').on('change', function(e){
    loadSecciones();
});

$('#id_grado').on('change', function(e){
    loadSecciones();
});