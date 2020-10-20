function doMath() {
	// check for valid input | disallow basic injection
	var regex = RegExp("[0-9+-/^*%]");
	// replace '^' with '**' for user input
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

// activates doMath() if uesr presses the 'enter' key
let input = document.querySelector("input");
input.addEventListener("keyup"),
	(e) => {
		if (e.keyCode === 13) {
			doMath();
		}
	};
