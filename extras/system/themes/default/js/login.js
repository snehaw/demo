function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}

$(document).ready(function(){
	// login modal
	/* Sign In */
	$('#user-login-btn').on('click', function(){
		// var data = $( '#user-login-form' ).serializeJSON();
		// var em = false;
		// var ps = false;
		// var dat = ValidateEmail(data.user_email);
		// console.log(true);
		// console.log(data);
		// if(data.user_email  != '')
		// {
			$.ajax({
				url: app_base_url() + "/index.php/user/login",
				method: 'POST',
				dataType: 'json',
				data: $( '#user-login-form' ).serializeJSON(),
				success: function(result){
					if(result.status == false){
						// to show error message
						$.each(result.error, function(k, v){
							$('#'+v.key+'_msg1').html('<span class="error">'+v.value+'</span>');
						});
					}
				}

			});	
		// }

		// console.log( );
		
	});

	/*used to register new user*/
	$('#user-register-btn').on('click', function(){
		// console.log( );
		$.ajax({
			url: app_base_url() + "/index.php/user/register",
			method: 'POST',
			dataType: 'json',
			data: $( '#user-register-form' ).serializeJSON(),
			success: function(result){
				if(result.status == false){
					// to show error message
					$.each(result.error, function(k, v){
						$('#'+v.key+'_msg2').html('<span class="error">'+v.value+'</span>');
					});
				} else {

				}
			}

		});	
	});	
});