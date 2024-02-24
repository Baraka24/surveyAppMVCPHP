<?php
//index.php

require_once('src/controllers/login.php');

try {
    if (isset($_GET['page']) && $_GET['page'] !== '') {

    } else {
        login();
    }
} catch (Exception $e) {
    echo 'Erreur : '. $e->getMessage();
}

