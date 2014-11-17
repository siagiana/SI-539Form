/*
STEPS
1. find element by id using jquery
2. set event listener (on change)
3. validate selected elt
4. if fail, append message notice

*/

function validateOnChange (form){
	
}

$(document).ready(function() {
	$('#password_requirement').on('keyup', function() {
		var passwordSelector = $(this);
		console.log(passwordSelector.val());
		//validate if not valid
		if (passwordSelector.val() == "")
			if (passwordSelector.siblings('.error').length == 0) {
				$("<span class = 'error'> No Password was entered.<br></span>").insertAfter(passwordSelector);
			}
	else if (passwordSelector.val().length < 8)
		if (passwordSelector.siblings('.error').length == 0) {
			$("<span class = 'error'> Passwords must be at least 8 characters.<br></span>").insertAfter(passwordSelector)
		}
	else if (! /[a-z]/.test(passwordSelector.val() ) ||
			 ! /[A-Z]/.test(passwordSelector.val() ) ||
		     ! /[0-9]/.test(passwordSelector.val() ))
			$("<span class = 'error'> Passwords require one each of a-z, A-Z and 0-9.<br></span>").insertAfter(passwordSelector)
	else
		passwordSelector.siblings('.error').remove();
	});

});