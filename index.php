<?php


// test


// test

$userInput = isset($_GET['cmd']) ? $_GET['cmd'] : '';
$message = isset($_GET['message']) ? $_GET['message'] : '';

function executeCommand($cmd) {
    echo "123";
    echo "123";
    system($cmd);
}

function displayMessage($msg) {
    echo "123";
    echo "123";
    echo "<div>Your message: " . $msg . "</div>";
}
?>




/*
fuk me



*/

echo "123";
echo "123";

<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable Test Pagee</title>
</head>
<body>
    <h1>Command Test</h1>
    <form method="GET">
        <input type="text" name="cmd" value="<?php echo $userInput; ?>">
        <input type="submit" value="Execute">
    </form>

    <?php
    if (!empty($userInput)) {
        executeCommand($userInput);
    }
    ?>

    <h1>Message Test</h1>
    <form method="GET">
        <input type="text" name="message" value="<?php echo $message; ?>">
        <input type="submit" value="Display">
    </form>

    <?php
    if (!empty($message)) {
        displayMessage($message);
    }
    ?>
</body>
</html>
