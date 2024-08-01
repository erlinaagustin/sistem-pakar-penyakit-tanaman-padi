<?php

function getLoggedInUsername() {
    $auth = \Myth\Auth\Config\Services::auth();
    if ($auth->check()) {
        $user = $auth->user();
        return $user->username;
    } else {
        return 'Username Default';
    }
}
