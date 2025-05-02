<?php

// Force to string to match cookie data
$id = (string) $_POST['id']; 

if (isset($_COOKIE['recent_logout_users'])) {

    $decoded_logout_users = json_decode($_COOKIE['recent_logout_users']);

    if (($key = array_search($id, $decoded_logout_users, true)) !== false) {
        unset($decoded_logout_users[$key]);
        $decoded_logout_users = array_values($decoded_logout_users); // Reindex
    }

    $encoded_logout_users = json_encode($decoded_logout_users);

    setcookie(
        "recent_logout_users",
        $encoded_logout_users,
        time() + (60 * 60 * 24 * 7),
        "/",
        "",     // Domain
        false,  // Secure
        true    // HttpOnly
    );

}

?>
