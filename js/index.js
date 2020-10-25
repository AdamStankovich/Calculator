
var lastanswer;

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
			lastanswer = answer;
		} else {
			document.getElementById("answer").innerHTML =
				"Please enter an equation into the text field.";
		}
	} else {
		document.getElementById("answer").innerHTML =
			"Please enter a valid equation.";
	}
}

var memory;
function addToMemory() {
	memory = lastanswer;
}

function recallMemory() {
	document.getElementById("test").value = memory;
}

// activates doMath() if uesr presses the 'enter' key
let input = document.querySelector("input");
input.addEventListener("keyup", function (e) {
		if (e.key === "Enter") {
			doMath();
		}
	});	