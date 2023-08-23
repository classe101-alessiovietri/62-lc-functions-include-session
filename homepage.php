<?php
    session_start();

    var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
    </head>
    <body>
        <?php
            if (
                !empty($_SESSION['user_name'])
                &&
                !empty($_SESSION['user_email'])
            ) {
                echo 'Sei loggato come '.$_SESSION['user_name'];
                echo '<a href="logout.php">Logout</a>';
            }
            else {
                echo 'Non sei loggato';
            }
        ?>
    </body>
</html>