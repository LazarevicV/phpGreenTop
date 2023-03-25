<?php

require_once "connection/connection.php";

function validateData($username, $password, $confirm_password, $email, $phone, $pol) {

    if (!isset($username) or !isset($password) or !isset($confirm_password) or !isset($email) or !isset($phone) or !isset($pol)) {
        return false;
    }

    $stmt = $connection->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $ucitani_username = $stmt->fetch();
    $stmt->close();

    if ($ucitani_username) {
        return false;
    }



}