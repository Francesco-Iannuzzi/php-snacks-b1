<?php

echo "<pre>";

$nameForm = $_GET['name'];
$ageForm = $_GET['number'];
$emailForm = $_GET['email'];

var_dump($nameForm);
var_dump(strlen($nameForm));


var_dump($ageForm);
var_dump(is_numeric($ageForm));


var_dump($emailForm);
var_dump(str_contains($emailForm, '.'));


if (strlen($nameForm) > 3 && is_numeric($ageForm) && str_contains($emailForm, '.')) {
    echo 'Acces';
} else {
    echo 'No Acces';
}


echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap style -->
    <title>Acces</title>
</head>

<body></body>

</html>