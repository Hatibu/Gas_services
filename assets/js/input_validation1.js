
 // validating the order form ......
function input_order() {

	var format = /^[0-9]+$/;
	var myvalue = document.getElementById('Qnt1').value;
	if( !myvalue.match(format)){

		document.getElementById('Quantity1_error').innerHTML="Please Enter Only Number";
		return false;

	}else{

		document.getElementById('Quantity1_error').innerHTML="";
		return true;
	}
}

function input_order1() {
	var format = /^[0-9]+$/;
	var myvalue = document.getElementById('Qnt2').value;
	if( !myvalue.match(format)){

		document.getElementById('Quantity2_error').innerHTML="Please Enter Only Number";
		return false;

	}else{

		document.getElementById('Quantity2_error').innerHTML="";
		return true;
	}
}

function check_order(){

	var Quantity1 = document.getElementById('Qnt1').value;
	var Quantity2 = document.getElementById('Qnt2').value;
	var format = /^[0-9]+$/;

	if (Quantity1 == "") {

		document.getElementById('Quantity1_error').innerHTML="Please Your Must Fill These Field";
		return false;
	}
	else if (Quantity2 == "") {

		document.getElementById('Quantity2_error').innerHTML="Please Your Must Fill These Field";
		return false;

	}else if( !Quantity2.match(format)){

		document.getElementById('Quantity2_error').innerHTML="Please Enter Only Number";
		return false;

	}else if(!Quantity1.match(format)){

		document.getElementById('Quantity1_error').innerHTML="Please Enter Only Number";
		return false;

	}else{

		return true;
	}	

}

 //  ending of validating the order form ......

 // validating of the add gas input into add gas page

 function add_gas(){

	var Quantity1 = document.getElementById('Qnt1').value;
	var Quantity2 = document.getElementById('Qnt2').value;
	var format = /^[0-9]+$/;

	if (Quantity1 == "") {

		document.getElementById('Quantity1_error').innerHTML="Please Your Must Fill These Field";
		return false;
	}
	else if (Quantity2 == "") {

		document.getElementById('Quantity2_error').innerHTML="Please Your Must Fill These Field";
		return false;

	}else if( !Quantity2.match(format)){

		document.getElementById('Quantity2_error').innerHTML="Please Enter Only Number";
		return false;

	}else if(!Quantity1.match(format)){

		document.getElementById('Quantity1_error').innerHTML="Please Enter Only Number";
		return false;

	}else{

		return true;
	}	

}

function Quant() {
	var format = /^[0-9]+$/;
	var myvalue = document.getElementById('Qnt1').value;
	if( !myvalue.match(format)){

		document.getElementById('Quantity1_error').innerHTML="Please Enter Only Number";
		return false;

	}else{

		document.getElementById('Quantity1_error').innerHTML="";
		return true;
	}
}

function Quantity() {
	var format = /^[0-9]+$/;
	var myvalue = document.getElementById('Qnt2').value;
	if( !myvalue.match(format)){

		document.getElementById('Quantity2_error').innerHTML="Please Enter Only Number";
		return false;

	}else{

		document.getElementById('Quantity2_error').innerHTML="";
		return true;
	}
}

// ending of validating of the add gas And update gas input into add gas page and Update gas page

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

function Location_name() {

	var format = /^[A-Za-z]+$/;
	var myvalue = document.getElementById('Location').value;
	if( !myvalue.match(format)){

		document.getElementById('lotion_error').innerHTML="Enter alphabet characters only";
		return false;

	}else{

		document.getElementById('lotion_error').innerHTML="";
		return true;
	}

}

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

	

function email_validation() {

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

function dealer_fun() {

	var format = /^[A-Za-z]+$/;
	var format1 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var format2 = /^\d{10}$/;
	var first = document.getElementById('firstname').value;
	var middle = document.getElementById('middlename').value;
	var last = document.getElementById('lastname').value;
	var Location = document.getElementById('Location').value;
	var phone = document.getElementById('phonenumber').value;
	var email = document.getElementById('email').value;
	

	if (first == "") {
		document.getElementById('first_error').innerHTML="please fill first name";
		return false;
	}
	else if(!first.match(format)){

		document.getElementById('first_error').innerHTML="Enter alphabet characters only";
		return false;

	}
	else if (middle == "") {
		document.getElementById('middle_error').innerHTML="please fill middle name";
		return false;
	}
	else if(!middle.match(format)){

		document.getElementById('middle_error').innerHTML="Enter alphabet characters only";
		return false;

	}
	else if (last == "") {
		document.getElementById('last_error').innerHTML="please fill last name";
		return false;
	}
	else if(!last.match(format)){

		document.getElementById('last_error').innerHTML="Enter alphabet characters only";
		return false;

	}
	else if (Location == "") {
		document.getElementById('lotion_error').innerHTML="please fill Location";
		return false;
	}
	else if(!Location.match(format)){

		document.getElementById('last_error').innerHTML="Enter alphabet characters only";
		return false;

	}
	else if (email == "") {
		document.getElementById('email_error').innerHTML="please fill Location";
		return false;
	}
	else if(!email.match(format1)){

		document.getElementById('last_error').innerHTML="Invalid Email";
		return false;

	}
	else if (phone == "") {
		document.getElementById('phone_error').innerHTML="please fill Location";
		return false;
	}
	else if(!phone.match(format2)){

		document.getElementById('phone_error').innerHTML="Invalid phone number(least 10 numbers)s";
		return false;

	}
	else{

		return true;
	}

}	

// regustrationg of the employeeees............

function first() {

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

function middle() {

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

function last() {

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

function Nationa() {

	var format = /^[A-Za-z]+$/;
	var myvalue = document.getElementById('Nationality').value;
	if( !myvalue.match(format)){

		document.getElementById('lotion_error').innerHTML="Enter alphabet characters only";
		return false;

	}else{

		document.getElementById('lotion_error').innerHTML="";
		return true;
	}
}


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


function email_valida() {

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

function position() {

	var format = /^[A-Za-z]+$/;
	var myvalue = document.getElementById('Position').value;
	if( !myvalue.match(format)){

		document.getElementById('position_error').innerHTML="Enter alphabet characters only";
		return false;

	}else{

		document.getElementById('position_error').innerHTML="";
		return true;
	}
}


function employee_fun() {

	var format = /^[A-Za-z]+$/;
	var format1 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var format2 = /^\d{10}$/;
	var first = document.getElementById('firstname').value;
	var middle = document.getElementById('middlename').value;
	var last = document.getElementById('lastname').value;
	var phone = document.getElementById('phonenumber').value;
	var email = document.getElementById('email').value;
	var position = document.getElementById('Position').value;
	

	if (first == "") {
		document.getElementById('first_error').innerHTML="please fill first name";
		return false;
	}
	if (position == "") {
		document.getElementById('position_error').innerHTML="please fill first name";
		return false;
	}
	else if(!first.match(format)){

		document.getElementById('first_error').innerHTML="Enter alphabet characters only";
		return false;

	}
	else if(!position.match(format)){

		document.getElementById('position_error').innerHTML="Enter alphabet characters only";
		return false;

	}
	else if (middle == "") {
		document.getElementById('middle_error').innerHTML="please fill middle name";
		return false;
	}
	else if(!middle.match(format)){

		document.getElementById('middle_error').innerHTML="Enter alphabet characters only";
		return false;

	}
	else if (last == "") {
		document.getElementById('last_error').innerHTML="please fill last name";
		return false;
	}
	else if(!last.match(format)){

		document.getElementById('last_error').innerHTML="Enter alphabet characters only";
		return false;

	}
	else if (email == "") {
		document.getElementById('email_error').innerHTML="please fill Location";
		return false;
	}
	else if(!email.match(format1)){

		document.getElementById('last_error').innerHTML="Invalid Email";
		return false;

	}
	else if (phone == "") {
		document.getElementById('phone_error').innerHTML="please fill Location";
		return false;
	}
	else if(!phone.match(format2)){

		document.getElementById('phone_error').innerHTML="Invalid phone number(least 10 numbers)";
		return false;

	}
	else{

		return true;
	}

}	

/// new dealer

function fir_name() {

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

function midd_name() {

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

function las_name() {

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

function locat_name() {

	var format = /^[A-Za-z]+$/;
	var myvalue = document.getElementById('location').value;
	if( !myvalue.match(format)){

		document.getElementById('locatio_error').innerHTML="Enter alphabet characters only";
		return false;

	}else{

		document.getElementById('locatio_error').innerHTML="";
		return true;
	}
}


function phone_numb() {

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


function email_valid() {

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


function validating(){

	var format = /^[A-Za-z]+$/;
	var format1 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var format2 = /^\d{10}$/;
	var first = document.getElementById('firstname').value;
	var middle = document.getElementById('middlename').value;
	var last = document.getElementById('lastname').value;
	var phone = document.getElementById('phonenumber').value;
	var email = document.getElementById('email').value;
	var Capital = document.getElementById('Capital').value;
	var location = document.getElementById('location').value;

	if (first == "") {
		document.getElementById('first_error').innerHTML="please fill first name";
		return false;
	}
	else if (location == ""){
		document.getElementById('locatio_error').innerHTML="please fill first name";
		return false;
	}
	else if(!first.match(format)){

		document.getElementById('first_error').innerHTML="Enter alphabet characters only";
		return false;

	}
	else if(!location.match(format)){

		document.getElementById('locatio_error').innerHTML="Enter alphabet characters only";
		return false;

	}
	else if (middle == "") {
		document.getElementById('middle_error').innerHTML="please fill middle name";
		return false;
	}
	else if(!middle.match(format)){

		document.getElementById('middle_error').innerHTML="Enter alphabet characters only";
		return false;

	}
	else if (last == "") {
		document.getElementById('last_error').innerHTML="please fill last name";
		return false;
	}
	else if(!last.match(format)){

		document.getElementById('last_error').innerHTML="Enter alphabet characters only";
		return false;

	}
	else if (email == "") {
		document.getElementById('email_error').innerHTML="please fill Location";
		return false;
	}
	else if(!email.match(format1)){

		document.getElementById('last_error').innerHTML="Invalid Email";
		return false;

	}
	else if (phone == "") {
		document.getElementById('phone_error').innerHTML="please fill Location";
		return false;
	}
	else if(!phone.match(format2)){

		document.getElementById('phone_error').innerHTML="Invalid phone number(least 10 numbers)";
		return false;

	}
	else{

		return true;
	}

}	
