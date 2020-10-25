<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calculator</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Adam Stankovich" />
    <!-- BOOTSTRAP CDN -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
</head>

<body class="center p-3 mb-2 bg-light text-dark">
    <div class="jumbotron shadow-lg p-3 mb-5 bg-white rounded" style="
				background-image: url(chalkboard.jpg);
				background-size: cover;
			">
        <div class="page-header text-light">
            <h1>Adam's Calculator</h1>
        </div>
    </div>
    <div class="container"></div>
    <div class="row"></div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-10">
        <div class="input-group shadow">
            <input type="text" id="test" class="form-control" pattern="[0-9+\-/^*% ]" placeholder="Input equation here"
                aria-label="Input equation here" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-dark" onclick="doMath()" id="input1" type="button">Go</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-cs-10">
        <div><br><br>
            <h2 id="answer"></h2>
            <button class="btn btn-dark" onclick="addToMemory()" id="memory" type="button">Remember Answer</button>
            <button class="btn btn-dark" onclick="recallMemory()" id="memoryrecall" type="button">Memory Recall</button>
        </div>
        <hr>
        <p>
            Enter the equation into the text box. Your equation can include
            any of the following:
        <ul>
            <li>Parentheses ( )</li>
            <li>Exponents ^</li>
            <li>Multiplication *</li>
            <li>Division /</li>
            <li>Addition +</li>
            <li>Subtraction -</li>
            <li>Modulo %</li>
        </ul>
        </p>
    </div>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>