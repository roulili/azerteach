$("form").submit(function(e){
	"use strict";
	var user = $("#user").val();
	var msg = $("#usermsg").val();
	
	if(grecaptcha.getResponse())
	{
		$.post("includes/avis/send.php",{
			user:user, 
			msg:msg
		},function(data){
			$(".return").html(data).slideDown();
			$("#user").val("");
			$("#usermsg").val("");
			recupAvis();
		});
	return false;
	}
	else
	{
		if(!$("#addAvis span.error").length)
		{
			$("#addAvis form").append('<span class="error">Veuillez remplir le captcha.</span>');
		}
		return false;
	}
});

function recupAvis(){
	"use strict";
	$.post("includes/avis/recup.php",function(data){
		$("#avis-box").html(data);	
	});
}

setInterval(recupAvis,1000);
