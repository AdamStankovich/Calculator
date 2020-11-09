<?php

# User requests memory recall GET request
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    # Get token from header
    $headers = apache_request_headers();
    $token = $headers['Authorization'];

    # validate token
    if ($token !== 'bob') {
        http_response_code(401);
        exit();
    }

    # if token was valid, return memory recall value
    else {
        echo ($_COOKIE['mr']);
    }
}

# User requests memory recall POST (update) request
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    # Get token from header
    $headers = apache_request_headers();
    $token = $headers['Authorization'];

    # validate token
    if ($token !== 'bob') {
        http_response_code(401);
        exit();
    }

    # if token was valid, return memory recall value
    else {
        $val = $_GET['val'];
        setcookie('mr', $val);
    }
}

# update or set mr value if null
else if ($_SERVER['REQUEST_METHOD'] == 'PUT') {

    # Get token from header
    $headers = apache_request_headers();
    $token = $headers['Authorization'];

    # validate token
    if ($token !== 'bob') {
        http_response_code(401);
        exit();
    }

    # if token was valid, proceed with PUT request
    else {
        if ($_COOKIE['mr'] !== Null) {
            $val = $_GET['val'];
            setcookie('mr', $val);
        } else {
            $val = $_GET['val'];
            setcookie('mr', $val);
        }
    }
}

# User requests memory recall DELETE request
else if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

    # Get token from header
    $headers = apache_request_headers();
    $token = $headers['Authorization'];

    # validate token
    if ($token !== 'bob') {
        http_response_code(401);
        exit();
    }

    # if token was valid, return memory recall value
    else {
        setcookie('mr', '', time() - 3600);
    }
}

# return nothing (used for header)
else if ($_SERVER['REQUEST_METHOD'] == 'HEAD') {
    exit();
}