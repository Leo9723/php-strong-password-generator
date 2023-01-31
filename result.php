<?php
session_start();

include __DIR__ . '/functions.php';


$_SESSION['length'] = $_POST['length'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        if (isset($_SESSION['length']) && $_SESSION['length'] != '') {
            echo 'La password da te generata è: ' . password_generate($_SESSION['length']);
        }
        ?>
    </div>
</body>

</html>