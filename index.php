<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Nhap so : <input type="number" name="number">
    <br/>
    <input type="submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $countNum = $_POST["number"];
    $number = 2;
    function checkPrime($number)
    {
        $flag = false;
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $flag = true;
            }
        }
        if ($flag == false) {
            echo $number . " ";
        }
    }

    while ($number < $countNum) {
        checkPrime($number);
        $number++;
    }
}
?>
</body>
</html>
