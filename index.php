<!doctype html>
<html lang="en">

<head>
    <title>Calculator</title>
    <meta charset="UTF-8">
    <meta name="author" content="Adam Stankovich">
    <link rel="stylesheet" href="index.css">
</head>

<body class="center">
    <header>
        <h1>Adam's Calculator</h1>
    </header>
    <input type="text" id="input" pattern="[0-9+\-/^*% ]" placeholder="Input equation here">
    <button type="button" onclick="doMath()" id="inputbutton">Go</button>
    <p id="answer"></p>
    <p>Enter the equation into the text box. Your equation can include any of the following:<br>
        Addition +, Subtraction -, Division /, Exponents ^, Multiplication *, & Modulo %</p>
    <script src="index.js"></script>
</body>

</html>