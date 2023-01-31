<?php
$length = $_POST['length'];

function password_generate($chars)
{
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($data), 0, $chars);
}
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
    <form action="./index.php" method="POST">
        <input type="text" name="length" id="pass" placeholder="inserisci lunghezza password">
        <button>INVIA</button>
        <?php
        if (isset($_POST['length']) && $_POST['length'] != '') {
            echo password_generate($length);
        }
        ?>
    </form>
</body>

</html>