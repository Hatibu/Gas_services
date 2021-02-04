
					//validating only the single field

function first_name() {

	var format = /^[A-Za-z]+$/;
	var myvalue = document.getElementById('firstname').value;
	if( !myvalue.match(format)){

		document.getElementById('first_error').innerHTML="Enter alphabet characters only";
		return false;

	}else{

		document.getElementById('first_error').innerHTML="";
		return true;
	}
}

// middle name

function middle_name() {

	var format = /^[A-Za-z]+$/;
	var myvalue = document.getElementById('middlename').value;
	if( !myvalue.match(format)){

		document.getElementById('middle_error').innerHTML="Enter alphabet characters only";
		return false;

	}else{

		document.getElementById('middle_error').innerHTML="";
		return true;
	}
}

		// last name validation

	function last_name() {

	var format = /^[A-Za-z]+$/;
	var myvalue = document.getElementById('lastname').value;
	if( !myvalue.match(format)){

		document.getElementById('last_error').innerHTML="Enter alphabet characters only";
		return false;

	}else{

		document.getElementById('last_error').innerHTML="";
		return true;
	}
}


	//email validation


	function emailvalidation() {

	var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var myvalue = document.getElementById('email').value;
	if( !myvalue.match(format)){

		document.getElementById('email_error').innerHTML="Invalid email";
		return false;

	}else{

		document.getElementById('email_error').innerHTML="";
		return true;
	}
}


//phone number validation

	function phone_number() {

	var format = /^\d{10}$/;
	var myvalue = document.getElementById('phonenumber').value;
	if( !myvalue.match(format)){

		document.getElementById('phone_error').innerHTML="Invalid phone number(least 10 numbers)";
		return false;

	}else{

		document.getElementById('phone_error').innerHTML="";
		return true;
	}
}

	//username

	function user_name() {

	var format = /^[0-9a-zA-Z]+$/;
	var myvalue = document.getElementById('username').value;
	if( !myvalue.match(format)){

		document.getElementById('user_error').innerHTML="Enter your username";
		return false;

	}else{

		document.getElementById('user_error').innerHTML="";
		return true;
	}
}


// password validation


	function passwordvalidation() {
	var format = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
	var myvalue = document.getElementById('password').value;
	if(!myvalue.match(format)){

		document.getElementById('password_error').innerHTML="Your password must have capital letter and small letter numbers and least (6-20) characters";
		return false;

	}else{

		document.getElementById('password_error').innerHTML="";
		return true;
	}

}


		//.....validation of the all empty ......

function formvalidation() {

	var first = document.getElementById('firstname').value;
	var middle = document.getElementById('middlename').value;
	var last = document.getElementById('lastname').value;
	var phone = document.getElementById('phonenumber').value;
	var user = document.getElementById('username').value;
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	var Confm = document.getElementById('Confm_Password').value;

	if (first == "") {
		document.getElementById('first_error').innerHTML="please fill your first name";
		return false;
	}
	else if (middle == "") {
		document.getElementById('middle_error').innerHTML="please fill your middle name";
		return false;
	}
	else if (last == "") {
		document.getElementById('last_error').innerHTML="please fill your last name";
		return false;
	}
	else if (phone == "") {
		document.getElementById('phone_error').innerHTML="please fill your phone number";
		return false;
	}
	else if (user == "") {
		document.getElementById('user_error').innerHTML="please fill your username";
		return false;
	}
	else if (email == "") {
		document.getElementById('email_error').innerHTML="please fill your email";
		return false;
	}
	else if (password == "") {
		document.getElementById('password_error').innerHTML="Enter your password";
		return false;
	}
	else if (Confm == "") {
		document.getElementById('confirm_error').innerHTML="Enter your confirm password";
		return false;
	}
	else if (password !== Confm) {
		document.getElementById('confirm_error').innerHTML="password does not match";
		return false;
	}
	else{

		return true;
	}

}









