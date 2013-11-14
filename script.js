$(document).ready(function(){

	$('#contact-form').jqTransform();



	$("button").click(function(){



		$(".formError").hide();



	});



	var use_ajax=true;

	$.validationEngine.settings={};



	$("#contact-form").validationEngine({

		inlineValidation: false,

		promptPosition: "centerRight",

		success :  function(){use_ajax=true},

		failure : function(){use_ajax=false;}

	 })



	$("#contact-form").submit(function(e){
//alert("rishi");
			var text_val=$('#message').val();
			var chk = 1;
			if(!$('#subject').val().length)

			{

				$.validationEngine.buildPrompt(".jqTransformSelectWrapper","* This field is required","error")

				chk = 0;

			}
			if(text_val == "")

			{

				$.validationEngine.buildPrompt("#message","* This message is required","error")
				chk = 0;


			}
			
			if(chk == 0)
			return false;
			/*alert("rishi");
			if($('#message').val() == "")

			{

				$.validationEngine.buildPrompt(".jqTransformSelectWrapper","* This field is required","error")

				return false;

			}*/

			

			if(use_ajax)

			{

				$('#loading').css('visibility','visible');

				$.post('submit.php',$(this).serialize()+'&ajax=1',

				

					function(data){

						if(parseInt(data)==-1)

							$.validationEngine.buildPrompt("#captcha","* Wrong verification number!","error");

							

						else

						{

							$("#contact-form").hide('slow').after('<h1>Thank you!</h1>');

						}

						

						$('#loading').css('visibility','hidden');

					}

				

				);

			}

			e.preventDefault();

	})



});