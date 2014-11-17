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
	checkPassword('#password_requirement')
	samePassword('#password_requirement', '#password')

});

function checkPassword(passwordId) {
	$(passwordId).on('keyup', function() {
		var passwordSelector = $(this);
		// console.log(passwordSelector.val());
		var errorSelector = passwordSelector.siblings('.error');
		//validate if not valid
		if (passwordSelector.val() == "") {
			// console.log('1')
			errorSelector.text("").text("No Password was entered");
		}
		else if (! /[a-z]/.test(passwordSelector.val() ) ||
				 ! /[A-Z]/.test(passwordSelector.val() ) ||
			     ! /[0-9]/.test(passwordSelector.val() )) {
				// console.log('3')
				errorSelector.text("").text("Passwords require one each of a-z, A-Z and 0-9");
		}
		else if (passwordSelector.val().length < 8) {
			// console.log('2')
			errorSelector.text("").text("Passwords must be at least 8 characters");
		}
		else {
			// console.log('4')
			errorSelector.text("");
		}
	});
}

function samePassword(passwordId, passwordID2){

	$(passwordID2).on('change', function() {
			console.log("babi")
		var passwordSelector2 = $(this);
		var passwordSelector1 = $(passwordId);
		var errorSelector1 = passwordSelector1.siblings('.error');
		var errorSelector2 = passwordSelector2.siblings('.error');

		console.log(passwordSelector1.val());
		console.log(passwordSelector2.val());

		if (errorSelector1.text()) {
			errorSelector2.text("").text("Your password does not satisfy the requirements");
		}
		else if (passwordSelector2.val() == "" || passwordSelector1.val() != passwordSelector2.val()) {
			errorSelector2.text("").text("The two passwords MUST match");
		}
		else{
			errorSelector2.text("");
		}
	});

}




