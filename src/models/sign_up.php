<?php
// src/models/sign_up.php

function createAccount(string $name, string $email, string $pswd, string $otherInfo)
{
    $database = dbConnect();
    $statement = $database->prepare(
        'INSERT INTO `user`(`id`, `name`, `email`, `password`, `other_info`) VALUES (?,?,?,?,?)'
    );
    $affectedLines = $statement->execute([NULL,$name, $email, $pswd, $otherInfo]);
    return ($affectedLines > 0);
}
function dbConnect()
{
    $database = new PDO('mysql:host=localhost;dbname=survey_db;charset=utf8', 'root', '');

    return $database;
}
