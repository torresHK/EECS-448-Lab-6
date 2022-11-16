function validate() {
	var valid = true;
	var username = document.getElementById("username").value;
	if (!(username.includes("@")) || !(username.includes(".com"))) {
		alert("Username must be an email!");
		valid = false;
	}
	var password = document.getElementById("password").value;
	if (password == "") {
		alert("Password cannot be blank!");
		valid = false;
	}

	var mouseAmount = document.getElementById("mouse").value;
	if (mouseAmount == "" || mouseAmount < 0) {
		alert("Please enter a valid mouse quantity!");
		valid = false;
	}
	var keyboardAmount= document.getElementById("keyboard").value;
	if (keyboardAmount == "" || keyboardAmount < 0) {
		alert("Please enter a valid keyboard quantity!");
		valid = false;
	}
	var headphoneAmount = document.getElementById("headphones").value;
	if (headphoneAmount == "" || headphoneAmount < 0) {
		alert("Please enter a valid headphone quantity!");
		valid = false;
	}

	var shippingRadios = document.getElementsByName("shipping");
	var selected = "";
	for(i = 0; i < shippingRadios.length; i++) {
		if(shippingRadios[i].checked) { selected = shippingRadios[i].value; }
	}

	if (selected == "") {
		alert("A shipping option must be selected!");
		valid = false;
	}
	
	if (!valid) {
		window.history.back();
		return false;
	} else {
		return true;
	}
}

function reset() {
	var username = document.getElementById("username").value = "";
	var password = document.getElementById("password").value = "";
	var mouseAmount = document.getElementById("mouse").value = 0
	var keyboardAmount= document.getElementById("keyboard").value = 0
	var headphoneAmount = document.getElementById("headphones").value = 0;
	var shippingRadios = document.getElementsByName("shipping");
	for(i = 0; i < shippingRadios.length; i++) { shippingRadios[i].checked == false; }
}
