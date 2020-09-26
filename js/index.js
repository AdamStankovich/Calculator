function doMath() {
	var regex = RegExp("[0-9+-/^*%]");
	if (regex.test(document.getElementById("test").value.replace("^", "**"))) {
		var answer = eval(
			document.getElementById("test").value.replace("^", "**")
		);
		if (answer !== undefined) {
			document.getElementById("answer").innerHTML = answer;
		} else {
			document.getElementById("answer").innerHTML =
				"Please enter an equation into the text field.";
		}
	} else {
		document.getElementById("answer").innerHTML =
			"Please enter a valid equation.";
	}
}

let input = document.querySelector("input");
input.addEventListener("keyup"),
	(e) => {
		if (e.keyCode === 13) {
			doMath();
		}
	};
