<?php
session_start();
if(isset($_GET["p"])){

	$page=$_GET["p"];
	if($page=="home")
	{
		$main_content="pages/home.php";
		
	}elseif($page=="dashboard" && isset($_SESSION["level"])){
	
		$main_content="pages/dashboard.php";
		
	}elseif($page=="Edit_info"){
	
		$main_content="pages/Edit_Info.php";
	}	
	elseif($page=="logout"){
	
		$main_content="pages/logout.php";
	}
	elseif($page=="login"){
	
		$main_content="pages/login.php";
	}	
	elseif($page=="order"){
	
		$main_content="pages/ordering.php";
	}	
	elseif($page=="view"){
	
		$main_content="pages/view_order_before_paying.php";
	}	
	elseif($page=="update_order"){
	
		$main_content="pages/update_order_dealer.php";
	}	
	elseif($page=="verify"){
	
		$main_content="pages/verify.php";
	}	
	elseif($page=="payment"){
	
		$main_content="pages/payment.php";
	}	
	elseif($page=="thank"){
	
		$main_content="pages/thank_page.php";
	}	
	elseif($page=="history"){
	
		$main_content="pages/order_history.php";
	}	
	elseif($page=="productchange"){
	
		$main_content="pages/broswer_product.php";
	}
	elseif($page=="change" && isset($_SESSION["level"])){
	
		$main_content="pages/change_password.php";
	}
	elseif($page=="registr"){
	
		$main_content="pages/dealer_registration.php";
	}
	elseif($page=="view_dealer"){
	
		$main_content="pages/view_dealers.php";
	}	
	elseif($page=="add_account"){
	
		$main_content="pages/add_account.php";
	}	
	elseif($page=="view_update"){
	
		$main_content="pages/update_dealer.php";
	}	
	elseif($page=="employ"){
	
		$main_content="pages/employees.php";
	}	
	elseif($page=="view_employ"){
	
		$main_content="pages/view_employees.php";
	}		
	elseif($page=="add_employee_acc"){
	
		$main_content="pages/add_employee_acc.php";
	}
	elseif($page=="update_employee"){
	
		$main_content="pages/update_employee.php";
	}
	elseif($page=="view_order_details"){
	
		$main_content="pages/view_order_details.php";
	}
	elseif($page=="change_price"){
	
		$main_content="pages/price_change.php";
	}
	elseif($page=="edit_store"){
	
		$main_content="pages/edit_info_storekeeper.php";
	}
	elseif($page=="notifi" && isset($_SESSION["level"])){
	
		$main_content="pages/notification.php";
	}
	elseif($page=="report"){
	
		$main_content="pages/payment_report.php";
	}
	elseif($page=="view_notifi" && isset($_SESSION["level"])){
	
		$main_content="pages/view_notification.php";
	}
	elseif($page=="view_spd"){
	
		$main_content="pages/view_dealer_psd.php";
	}
	elseif($page=="process_order"){
	
		$main_content="pages/process_order.php";
	}	
	elseif($page=="processing"){
	
		$main_content="pages/view_process.php";
	}
	elseif($page=="process_detail"){
	
		$main_content="pages/process_detail.php";
	}	
	elseif($page=="Add_gas"){
	
		$main_content="pages/Add_Gas.php";
	}
	elseif($page=="view_store"){
	
		$main_content="pages/view_store.php";
	}
	elseif($page=="update_store"){
	
		$main_content="pages/Updating_store.php";
	}
	elseif($page=="store-report"){
	
		$main_content="pages/store_report.php";
	}
	elseif($page=="view_employees"){
	
		$main_content="pages/view_employees_spd.php";
	}
	elseif($page=="Edit_info_spd"){
	
		$main_content="pages/edit_info_superdealer.php";
	}
	elseif($page=="Edit_info_at"){
	
		$main_content="pages/edit_info_accountant.php";
	}
	elseif($page=="new"){
	
		$main_content="pages/registration_new_dealer.php";
	}
	elseif($page=="new_applicant"){
	
		$main_content="pages/view_new_applicant.php";
	}
	elseif($page=="view_applicant"){
	
		$main_content="pages/process_applicant.php";
	}
	elseif($page=="view_appli"){
	
		$main_content="pages/view_applicant_adm.php";
	}
	elseif($page=="add_new_deal"){
	
		$main_content="pages/add_new_dealer.php";
	}else{

		$main_content="pages/error_page.php";
	}
	
}
