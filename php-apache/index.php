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
        echo ('LoginUser: ' . $_SESSION['login']);
    }
