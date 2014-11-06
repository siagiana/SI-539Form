function validateFirstName(field) {
	if (field == "") return "No First Name was entered.\n"
	return ""
}

function validateLastName(field) {
	if (field == "") return "No Last Name was entered.\n"
	return ""
}

function validateEmail(field) {
	if (field == "") return "No Email was entered.\n"
		else if (!((field.indexOf(".") > 0) &&
			       (field.indexOf("@") > 0)) ||
			       /[^a-zA-Z0-9.@_-]/.test(field))
		return "The Email address is invalid.\n"
	return ""
}

function validateSameEmail(field) {
	if (field.value != document.getElementById('email_address').value) {
		field.setCustomValidity('The two email addresses must match.');
		} 
	else {
		 // input is valid -- reset the error message
		 input.setCustomValidity('');
	}
}

function PasswordRequirement(field){
	if (field == "") return "No Password was entered.\n"
	else if (field.length < 8)
		return "Passwords must be at least 8 characters.\n"
	else if (! /[a-z]/.test(field) ||
			 ! /[A-Z]/.test(field) ||
		     ! /[0-9]/.test(field))
		return "Passwords require one each of a-z, A-Z and 0-9.\n"
return ""
}


function validatePassword(field) {
	if (field.value != document.getElementById('password').value) {
		field.setCustomValidity('The two passwords must match.');
		} else {
		 	// input is valid -- reset the error message
		 	field.setCustomValidity('');
		}
}

function validateNickname(field) {
	if (field == "") return "No nickname was entered.\n"
	else if (field.length < 5)
		return "Nicknames must be at least 5 characters.\n"
	else if (/[^a-zA-Z0-9_-]/.test(field))
		return "Only a-z, A-Z, 0-9, - and _ allowed in Nicknames.\n"
	return ""
}

function validateZip(field) {
	if (field == "") return "No Zipcode was entered.\n"
	else if (field.length != 5)
		return "Zipcode must be 5 characters.\n"
	else if (/[^0-9_-]/.test(field))
		return "Only 0-9 allowed in Zipcode.\n"
	return ""
	}
}

function showText()
{
		var popup_message = "Welcome to Kuzines, " + document.getElementById("first_name").value + "!";
		alert(popup_message);
}
