<?php
//incluye el dao con la información de la BD:
include_once 'connection.php';

function saveInfo($matricula, $name, $email)
{
    $sentence_sql = "INSERT INTO users ( matricula, name, email) VALUES
        ('" . $matricula . "','" . $name . "','" . $email . "');";
    return execute_query($sentence_sql);
}
function getUsers()
{
    $sentence_sql = "SELECT * FROM users";
    $users = execute_query($sentence_sql);
    return $users;
}
function getUser($matricula)
{
    $sentence_sql = "SELECT * FROM users WHERE matricula='$matricula';";
    $users = execute_query($sentence_sql);
    return $users;
}
function updateUser($matricula, $name, $email)
{
    $sentence_sql = "UPDATE users SET name ='$name', email ='$email' WHERE matricula = '$matricula'";
    $users = execute_query($sentence_sql);
    return $users;
}


?>
