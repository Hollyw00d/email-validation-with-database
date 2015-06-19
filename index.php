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

    <h1>Email Validation with a Database</h1>

    <form action="process.php" method="post">

        <p><em>Please enter your email and click submit.</em></p>

        <p>Email: <input type="text" name="email"/></p>

        <p><input type="submit" value="Submit"/></p>

    </form>

    <?php
    if(isset($_SESSION['errors']))
    {

        foreach ($_SESSION['errors'] as $error)
        {
            echo '<p class="error">' . $error . '</p>';
        }

    }
    ?>

    <?php
    if(isset($_SESSION['email']))
    {
        echo 'The email you entered is: ' . $_SESSION['email'];
    }
    ?>

    <p>&nbsp;</p>

    <p><a href="reset.php">Reset Session</a></p>

</div>

</body>
</html>