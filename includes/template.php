<?php

require ("includes/links.php");
if(isset($_SESSION["username"])){
	
	require ("includes/header.php");
	require ("includes/navigation.php");		
	
	if(isset($main_content)){

		require ($main_content);
	}

}else{

	if(isset($main_content)){
		require ($main_content);
	}else{

	require ("pages/home.php");
	}
}

require ("includes/footer.php");

?>