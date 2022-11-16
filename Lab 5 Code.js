function validate() {
	var firstPW = document.getElementById("firstPW").value;
	var secondPW = document.getElementById("secondPW").value;

	if (firstPW.length < 8) {
		alert("A password must be at least 8 characters long!");
	} else if (firstPW != secondPW) {
		alert("Both passwords must match!");
	} else {
		alert("Password accepted!");
	}
}

function prevSlide() {
	var src = document.getElementById("slideShow").src;
	var curIndex = src.charAt(src.length - 5);
	if (curIndex == "1") {
		document.getElementById("slideShow").src = "images/5.png";
	} else {
		var newIndex = parseInt(curIndex) - 1;
		document.getElementById("slideShow").src = "images/" + newIndex.toString() + ".png";
	}
}

function nextSlide() {
	var src = document.getElementById("slideShow").src;
	var curIndex = src.charAt(src.length - 5);
	if (curIndex == "5") {
		document.getElementById("slideShow").src = "images/1.png";
	} else {
		var newIndex = parseInt(curIndex) + 1;
		document.getElementById("slideShow").src = "images/" + newIndex.toString() + ".png";
	}
}

function updateValues() {
	var colorInputs = [];
	colorInputs[0] = document.getElementById("borderRed").value;
	colorInputs[1] = document.getElementById("borderGreen").value;
	colorInputs[2] = document.getElementById("borderBlue").value;
	colorInputs[3] = document.getElementById("backgroundRed").value;
	colorInputs[4] = document.getElementById("backgroundGreen").value;
	colorInputs[5] = document.getElementById("backgroundBlue").value;
	var inputWidth = document.getElementById("borderWidth").value;
	for (let i = 0; i < 6; i++) {
		if (colorInputs[i] == "") {
			colorInputs[i] = "0";
		}
	}
	document.getElementById("dummyText").style.borderStyle = "solid";
	document.getElementById("dummyText").style.borderWidth = inputWidth + "px";
	document.getElementById("dummyText").style.borderColor = "rgb(" + colorInputs[0] + ", " + colorInputs[1] + ", " + colorInputs[2] + ")";
	document.getElementById("dummyText").style.backgroundColor = "rgb(" + colorInputs[3] + ", " + colorInputs[4] + ", " + colorInputs[5] + ")";
}