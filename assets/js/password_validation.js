
// password validation
	function passwordvalidation() {
	var format = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
	var myvalue = document.getElementById('new_password').value;
	if(!myvalue.match(format)){

		document.getElementById('new_error').innerHTML="Your password must have capital letter and small letter numbers and least (6-20) characters";
		return false;

	}else{

		document.getElementById('new_error').innerHTML="";
		return true;
	}

}


function form_password() {

	var new_pass = document.getElementById('new_password').value;
	var retype_pass = document.getElementById('Retype_Password').value;
	
	if (new_pass !== retype_pass) {
		document.getElementById('retype_message').innerHTML="Password Does Not Match";
		return false;
	}
	else{
		document.getElementById('retype_message').innerHTML="";
		return true;
	}

}	

function validating(){
	var format = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
	var myvalue = document.getElementById('new_password').value;
	var retype_pass = document.getElementById('Retype_Password').value;
	if(!myvalue.match(format)){

		document.getElementById('new_error').innerHTML="Your password must have capital letter and small letter numbers and least (6-20) characters";
		return false;

	}else if (new_pass !== retype_pass) {
		document.getElementById('retype_message').innerHTML="Password Does Not Match";
		return false;

	}else{
		return true;
	}

}

