<?php
    $login_session_save_path = '/tmp';

    session_save_path($login_session_save_path);
    session_start();
    if (!isset($_COOKIE['PHPSESSID'])) {
        echo ('Start new session.');
        $_SESSION['login'] = 'dummy';
    } else {
        echo ('SessionId: ' . $_COOKIE['PHPSESSID']);
        echo ('<br/>');
        echo ('LoginUser: ' . $_SESSION['login']);
    }
