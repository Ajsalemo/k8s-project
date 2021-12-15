<?php

// Change into the directory
chdir("/tmp");
// Create the directory named sessions
mkdir("sessions");
$login_session_save_path = '/tmp/sessions';

session_save_path($login_session_save_path);
session_start();
if (!isset($_COOKIE['PHPSESSID'])) {
    echo ('Start new session.');
    $_SESSION['login'] = 'dummy';
} else {
    echo ('SessionId: ' . $_COOKIE['PHPSESSID']);
    echo ('<BR>');
    echo ('LoginUser: ' . $_SESSION['login']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Apache-Sessions</title>
</head>

<body>
    <h1>PHP-Apache-Sessions</h1>
</body>
</html>