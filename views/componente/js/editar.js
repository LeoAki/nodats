/**
 * Unicorn Admin Template
 * Diablo9983 -> diablo9983@gmail.com
**/
$(document).ready(function(){
	
    $('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	// Form Validation
    $("#form").validate({
		rules:{
			sinature:{
				required:true
			},
                        bimestre:{
				required:true
			},
                        nrocomponente:{
				required:true,
                                number: true
			},
                        componente:{
				required:true
			},
                        criterios:{
				required:true,
                                number: true
			}
		},
                messages: {
                    sinature: {
                        required: "Ingrese el nombre de sinature."
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