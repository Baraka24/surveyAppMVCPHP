<?php
//index.php

require_once('src/controllers/login.php');
require_once('src/controllers/sign_up.php');

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if (isset($_GET['action']) && $_GET['action'] === 'createAccount') {
            addAccount($_POST);

            login();
        }
    } else {
        login();
    }
} catch (Exception $e) {
    echo 'Erreur : '. $e->getMessage();
}

