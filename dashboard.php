<?php
include("auth_session.php");
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <div class="form">
            <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
            <p>You are now on the user dashboard page.</p>
            <p><a href="logout.php">Log out!!!</a></p>
        </div>
    </body>
</html>