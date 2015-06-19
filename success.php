<?php
session_start();
require_once('includes/new-connection.php');

$email_table_query = "SELECT * FROM emails";

$emails = fetch($email_table_query);
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

    <table id="email-addresses">
    <?php
    foreach(array_reverse($emails) as $record)
    {
        echo "
        <tr>
            <td>{$record['email']}</td>
            <td>{$record['updated_at']}</td>
        </tr>
        ";
    }
    ?>
    </table>

    <p>&nbsp;</p>

    <p><a href="reset.php">Reset Session and Go Home</a></p>

</div>

</body>
</html>