
// updating dealers information ................
function edit_info(){
	var dealer_id = $("#dealer_id").val();
	var fname = $("#fname").val();
	var mname = $("#m_name").val();
	var lname = $("#lname").val();
	var age = $("#age").val();
	var nati = $("#nati").val();
	var locat = $("#lot").val();
	var phon = $("#phone").val();
	var email = $("#email").val();

	if (fname==''){
		alert("Please Enter Your First Name");
		return false;
	} else if( mname==''){
		alert("Please Enter Your Middle Name");
		return false;
	} else if(lname ==''){

		alert("Please Enter Your Last Name");
		return false;
	}else if(age==''){

		alert("Please Enter Your Age Name");
		return false;
	}else if(nati==''){
		alert("Please Enter Your Natinality");
		return false;
	}else if(phon==''){
		alert("Please Enter Your Phone Number");
		return false;
	}else if(email ==''){
		alert("Please Enter Your Email");
		return false;
	}else if(locat==''){
		alert("Please Enter Your location");
		return false;
	}else{
		$.post('ajax_function/update_dealer_info.php',{fname:fname,mname:mname,lname:lname,age:age,nati:nati,
			locat:locat,phon:phon,email:email,dealer_id:dealer_id},
			function(data){
				$("#get_message").html(data);
		});
	}

}

// adding the product total for type 01 and type 02 in ordering page................

function adding_type1(){

	var quntity = $("#Qnt1").val();
	var price = $("#price1").val();
	var amount1 = $("#amount1").val();
	var amount2 = $("#amount2").val();
	var total = price*quntity;
	$("#amount1").val(total);

	$.post('ajax_function/summation.php',{summation1:1,price:price,quntity:quntity,amount2:amount2,amount1:amount1},
		function(data){
			$("#Total_amount").val(data);
		});
}

function adding_type2(){

	var quntity = $("#Qnt2").val();
	var price = $("#price2").val();
	var amount1 = $("#amount1").val();
	var amount2 = $("#amount2").val();
	var total = price*quntity;
	$("#amount2").val(total);

	$.post('ajax_function/summation.php',{summation2:1,price:price,quntity:quntity,amount2:amount2,amount1:amount1},
		function(data){
			$("#Total_amount").val(data);
		});
}

// send the orders to the database ....................!

// updating the dealer orders into the database................!!!!!

function update_order(){

 	var dealer_id = $("#dealer_id").val();
	var type1 = $("#type1").val();
	var type2 = $("#type2").val();
	var quntity2 = $("#Qnt2").val();
	var quntity1 = $("#Qnt1").val();
	var amount2 = $("#amount2").val();
	var amount1 = $("#amount1").val();
	var total = $("#Total_amount").val();

	$.post('ajax_function/update_dealer_order_fun.php',{type1:type1,type2:type2,quntity2:quntity2,quntity1:quntity1,amount2:amount2,
		amount1:amount1,total:total,dealer_id:dealer_id},
		function(data){
			$("#get_message").html(data);
	});
	

}

// verify the payment send reduction of money to the M pesa account of gas company .......................!
function payment(){
	var dealer_id = $("#dealer_id").val();
	var customer_account = $("#customer_account").val();
	var password = $("#password").val();
	var phone = $("#phone").val();

	$.post('ajax_function/verify_payment_fun.php',{dealer_id:dealer_id,customer_account:customer_account,
		password:password,phone:phone},
		function(data){
			$("#get_message").html(data);
	});
	
}

// updating the price from the accountant...............

function add_type1(){
	var new_price = $("#price").val();
	var type1 = $("#type1").val();

	$.post('ajax_function/change_price_fun.php',{update1:1,type1:type1,new_price:new_price},
		function(data){
		$("#get_message1").html(data);
	});
	
}

function add_type2(){

	var new_price = $("#price02").val();
	var type2 = $("#type2").val();

	$.post('ajax_function/change_price_fun.php',{update2:1,type2:type2,new_price:new_price},
		function(data){
		$("#get_message2").html(data);
	});
	
}


// notification .................

function notification(){
	var user_id = $("#user_id").val();
	var user = $("#user").val();
	$.post('ajax_function/notification_loading_fun.php',{OutBox:1,user_id:user_id,user:user},
		function(data){
		$("#OutBox_notification").html(data);
	});
}

function OutBox_notification(){
	var user_id = $("#user_id").val();
	var user = $("#user").val();
	$.post('ajax_function/notification_loading_fun.php',{InBox:1,user:user,user_id:user_id},
		function(data){
		$("#InBox_notification").html(data);
	});
}

function count_notification(){
	var user_id = $("#user_id").val();
	var user = $("#user").val();
	$.post('ajax_function/notification_count_fun.php',{count:1,user:user,user_id:user_id},
		function(data){
		$("#count").html(data);
	});
}


setInterval(function(){
	count_notification();
}, 5000);


function now_notification(){
	var user = $("#user").val();
	var user_id = $("#user_id").val();
	$.post('ajax_function/notification_view_now_fun.php',{now:1,user:user,user_id:user_id},
		function(data){
		$(".dropdown-menu").html(data);
	});
}


// send the request for the report.......................

function report(){
	var time = $("#time").val();
	$.post('ajax_function/report_request_fun.php',{request:1,time:time},
		function(data){
		$("#first_request").html(data);
	});
}

function generate_report(){
	var date = $("#date_time").val();
	var month = $("#month").val();
	var from_date = $("#From").val();
	var time = $("#time").val();
	var to_date = $("#To").val();

	if(date == ''){
		alert("Please Choose A Date");
		return false;
	}
	else if (month == ''){
		alert("Please Choose A Month");
		return false;
	}
	else if(from_date == '' || to_date == ''){
		alert("Please Choose A Date");
		return false;
	}
	else if (time == ''){
		alert("Please Your Must Choose Any Option Below");
		return false;
	}
	else{

		$.post('ajax_function/generate_report_fun.php',{date:date,month:month,from_date:from_date,to_date:to_date},
			function(data){
			$("#get_report").html(data);
		});
	}
	
}

// search of an order  ......................
function search_fun(){
	var search = $("#search").val();
	$.post("ajax_function/search_order_fun.php",{search:search},
		function(data){
		$("#get_order").html(data);
	});
}

// process of an order  ......................
function process(){
	var order_id = $("#order_id").val();
	var dealer_id = $("#dealer_id").val();
	var fname = $("#first_name").val();
	var lname = $("#lname").val();
	var location = $("#location").val();
	var Quntity1 = $("#Quntity1").val();
	var Quntity2 = $("#Quntity2").val();
	
	$.post("ajax_function/process_order_fun.php",{order_id:order_id,dealer_id:dealer_id,fname:fname,lname:lname,location:location,
		Quntity1:Quntity1,Quntity2:Quntity2},
		function(data){
		$("#get_message").html(data);
	});

}

// report process of an order  ......................
function report_order(){
	var dealer_id =$("#dealer_id").val();
	var order_id = $("#order_id").val();
	var process_id = $("#process_id").val();
	var when = $("#when").val();
	if(when==""){
		alert("Please Your Must Fill The date");
		return false;
		
	}else{
		
		$.post("ajax_function/report_order_fun.php",{order_id:order_id,dealer_id:dealer_id,when:when,process_id:process_id,},
			function(data){
			$("#get_message").html(data);
		});
	}

}


// generate a store report................
function store_report(){
	
	var date = $("#date_time").val();
	var month = $("#month").val();
	var from_date = $("#From").val();
	var time = $("#time").val();
	var to_date = $("#To").val();

	if(date == ''){
		alert("Please Choose A Date");
		return false;
	}
	else if (month == ''){
		alert("Please Choose A Month");
		return false;
	}
	else if(from_date == '' || to_date == ''){
		alert("Please Choose A Date");
		return false;
	}
	else if (time == ''){
		alert("Please Your Must Choose Any Option Below");
		return false;
	}
	else{

		$.post('ajax_function/generate_store_report_fun.php',{date:date,month:month,from_date:from_date,to_date:to_date},
			function(data){
			$("#get_report").html(data);
		});
	}
	
}

// delete the notifications............

$(document).ready(function(){

   $("body").delegate("#delete","click",function(event){
		event.preventDefault();
		var not_id = $(this).attr('remove_id');
		$.post('ajax_function/delete_notification_fun.php',{not_id:not_id},
			function(data){
			$("#message_info").html(data);
			notification();
		});
	});

    $("body").delegate("#delete_inbo","click",function(event){
		event.preventDefault();
		var not_id = $(this).attr('remove_id');
		$.post('ajax_function/delete_notification_fun.php',{not_id:not_id},
			function(data){
			$("#message").html(data);
			OutBox_notification();
		});
	});

	$("body").delegate("#view_inbo","click",function(event){
		event.preventDefault();
		var not_id = $(this).attr('view_id');
		var user_level = $(this).attr('user_level');
		var From = $(this).attr('from');
		var username = $(this).attr('username');
		$.post('ajax_function/reply_notification_fun.php',{not_id:not_id,user_level:user_level,From:From,username:username},
			function(data){
			$("#reply_message").html(data);
		});
	});

});

function reply_fu(){
	var notfi_id = $("#notfi_id").val();
	var From = $("#From").val();
	var To = $("#To").val();
	var message =$("#message").val();
	var username =$("#username").val();

	$.post('ajax_function/reply_send_notification_fun.php',{notfi_id:notfi_id,From:From,To:To,message:message,username:username},
		function(data){
		$("#get_message").html(data);
	});


}

// search of an process_id ......................
function search(){
	var process_id =$("#process_id").val();
	$.post("ajax_function/search_order_fun.php",{process_id:process_id},
		function(data){
		$("#Processing_order").html(data);
	});
}

// search of new dealer by super dealer ......................
function search_new(){
	var new_dealer =$("#new_dealer").val();
	$.post("ajax_function/search_order_fun.php",{new_dealer:new_dealer},
		function(data){
		$("#get_new").html(data);
	});
}

// search of new dealer by admini......................
function search_admn(){
	var new_id =$("#new_id").val();
	$.post("ajax_function/search_order_fun.php",{new_id:new_id},
		function(data){
		$("#get_info").html(data);
	});
}

// search of find dealer by admini......................
function search_dealer(){
	var dealer =$("#dealer").val();
	$.post("ajax_function/search_order_fun.php",{dealer:dealer},
		function(data){
		$("#get_dealer").html(data);
	});
}