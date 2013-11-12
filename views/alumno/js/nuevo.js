/**
 * Unicorn Admin Template
 * Diablo9983 -> diablo9983@gmail.com
**/
$(document).ready(function(){
	
    $('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	// Form Validation
    $("#form").validate({
		rules:{
			curso:{
				required:true
			}
		},
                messages: {
                    curso: {
                        required: "Ingrese el nombre del curso."
                    }
                },
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
});

function loadSecciones(){
	var nivel = $('#id_nivel').val(),
	grado = $('#id_grado').val();
	var options = {
		url: 'nivel/seccionesAjax/',
		data: {
			nivel: nivel,
			grado: grado
		}
	}
	var request = $.GET(options);
	request.done = function
	
}