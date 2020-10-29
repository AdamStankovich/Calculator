<?php

# give user mr value
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo ($_COOKIE['mr']);
}

# set mr value
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $val = $_GET['val'];
    setcookie('mr', $val);
}

# update or set mr value if null
else if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    if ($_COOKIE['mr'] !== Null) {
        $val = $_GET['val'];
        setcookie('mr', $val);
    } else {
        $val = $_GET['val'];
        setcookie('mr', $val);
    }
}

# delete mr value
else if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    setcookie('mr', '', time() - 3600);
}

# return nothing (used for header)
else if ($_SERVER['REQUEST_METHOD'] == 'HEAD') {
    exit();
}