<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    header("LOCATION: index.php?msg=Usuario deslogado");
?>

</body>
</html>