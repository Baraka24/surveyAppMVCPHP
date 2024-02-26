<?php
// src/controllers/sign_up.php

require_once('src/models/sign_up.php');

function addAccount(array $input)
{
    $name = $input['name'];
    $pswd = $input['pswd'];
    $otherInfo = $input['otherInfo'];
    $email = $input['email'];

    $success = createAccount($name, $email, $pswd, $otherInfo);

    if (!$success) {
        throw new Exception('Impossible to create an account!');
    } else {
        header('Location: index.php?success=Account created successfuly, You can log in now...');
    }

}