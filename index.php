<?php

$userInput = isset($_GET['cmd']) ? $_GET['cmd'] : '';
$message = isset($_GET['message']) ? $_GET['message'] : '';

<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable Test Pagee</title>
</head>
<body>
    echo $message;
</body>
</html>
