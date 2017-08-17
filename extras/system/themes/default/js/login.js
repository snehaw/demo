$(document).ready(function(){
	// login modal
	/* Sign In */
	$('#user-login-btn').on('click', function(){
		// console.log( );
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