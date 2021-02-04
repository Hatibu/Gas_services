
var req;


function initRequest() {
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		req = new XMLHttpRequest();
	} else if (window.ActiveXObject) {
		isIE = true;
		// code for IE6, IE5
		req = new ActiveXObject("Microsoft.XMLHTTP");
	}
}

function loadtime() {
	initRequest();
	var time = document.getElementById("time").value;

	var url = "pages/find_bus.php?time=" + time;

	req.onreadystatechange = update_bus;
	req.open("GET",url,true);
	req.send(null);
}

function update_bus(){
	if(req.readyState == 4){
		if(req.status == 200){
			document.getElementById("busnumber").innerHTML = req.responseText;
		}else{
			console.log("Failure");
		}
	}
}
