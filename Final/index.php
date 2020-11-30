<?php

$x = "";
$y = "";

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    # Validate input
    $x = intval($_POST['x']);
    $y = intval($_POST['y']);

    # Build the JSON string
    $ary = array('x' => $x, 'y' => $y);
    $json = json_encode($ary);

    # Call API
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://us-east1-speedy-cargo-286917.cloudfunctions.net/TriangleArea",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $json,
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    # Check the response (e.g. 200, 400, 500, ...)


    # Display answer
    $answer = "The area of the triangle is: " . $response;
}

?>

<!doctype html>
<html>

<head>
    <title>Adam Stankovich IT5236 Final</title>
    <meta charset="utf-8" name="Adam Stankovich" content="Final">
</head>

<body>
    <form action="index.php" method="post">
        <label for="x">Enter the triangles base and height</label><br>
        <input type="number" step=".01" id="x" name="x" value="<?php echo $x; ?>">
        <input type="number" step=".01" id="y" name="y" value="<?php echo $y; ?>">
        <input type="submit" value="Calc">
    </form>
    <p id="answer"><?php echo $answer; ?></p>
</body>

</html>