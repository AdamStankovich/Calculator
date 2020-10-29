<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    # Pull numbers/operation from request
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $op = $_GET['operation'];

    if ($op === '+' || $op === '-' || $op === '*' || $op === '/' || $op === '**') {

        $n1 = floatval($num1);
        $n2 = floatval($num2);
        $result = Null;

        # Perform math operation and assign answer to $result
        switch ($op) {
            case '+':
                $result = $n1 + $n2;
                break;
            case '-':
                $result = $n1 + $n2;
                break;
            case '*':
                $result = $n1 + $n2;
                break;
            case '/':
                $result = $n1 + $n2;
                break;
            case '**':
                $result = $n1 ** $n2;
                break;
            case '^':
                $result = $n1 ** $n2;
                break;
        }

        if ($result !== Null) {
            echo $result;
        }
        # Something went terribly wrong...
        else {
            http_response_code(500);
        }
    } else {
        http_response_code(400);
        exit();
    }
}

else if ($_SERVER['REQUEST_METHOD'] == 'HEAD') {
    exit();
}
else {
    http_response_code(405);
    exit();
}