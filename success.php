<?php
session_start();
require_once('includes/new-connection.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Validation with a Database</title>
    <link rel="stylesheet" href="css/styles.css"/>

</head>
<body>

<div id="wrapper">

    <h1>Success!</h1>

    <p class="success">The email address you entered (<strong><?php echo $_SESSION['email']; ?></strong>) is a VALID email address.<br />
    Thank you!</p>

    <h3>Email Addresses Entered</h3>

    <p>&nbsp;</p>

    <p><a href="reset.php">Reset Session and Go Home</a></p>

</div>

</body>
</html>