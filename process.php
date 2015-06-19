<?php
session_start();
require_once('includes/new-connection.php');
// Create empty $errors array
$errors = [];

if(!isset($_POST['email']) || $_POST['email'] == NULL)
{
    $errors[] = 'Please enter an email.';
}
elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email.';

}

if($errors != NULL)
{
    $_SESSION['errors'] = $errors;
    header('Location: index.php');
}
else
{

    if(!isset($_SESSION['email']) && !isset($_SESSION['email_db_insert']))
    {

        $_SESSION['email'] = $_POST['email'];

        // MySQL string to insert email into DB
        $insert_email_query = "INSERT INTO emails(email, created_at, updated_at) VALUES ('{$_SESSION['email']}', NOW(), NOW())";

        // Function to execute inserting email into DB
        $insert_email_execute = run_mysql_query($insert_email_query);


        header('Location: success.php');

    }

}
?>