<?php
session_start();

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

    if(!isset($_SESSION['email']))
    {

        $_SESSION['email'] = $_POST['email'];
        header('Location: success.php');

    }

}
?>