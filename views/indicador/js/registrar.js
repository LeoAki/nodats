/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
	
    $('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	// Form Validation
    $("#form").validate({
		rules:{
			txtcriterio:{
				required:true
			}
		},
                messages: {
                    txtcriterio: {
                        required: "Ingrese el nombre del indicador."
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