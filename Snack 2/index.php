<?php

/*
## Snack 2

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
- che name sia più lungo di 3 caratteri,
- che mail contenga un punto e una chiocciola
- che age sia un numero.

Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap style -->
    <title>Snack 2</title>
</head>

<body>

    <div class="container py-5">
        <h1 class="text-center">Form</h1>
        <form action="myscript.php" method="GET">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control w-25" name="name" id="name" placeholder="Insert a name">
            </div>

            <!-- /input name -->

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control w-25" name="age" id="age" placeholder="Insert your age">
            </div>

            <!-- /input age -->

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control w-25" name="email" id="email" placeholder="Insert a email">
            </div>

            <!-- /input email -->



            <div class="d-flex gap-4">
                <button type="submit" class="btn rounded-4 btn-primary">Submit</button>
                <button type="reset" class="btn rounded-4 btn-secondary">Reset</button>
            </div>
            <!-- /buttons -->
        </form>
    </div>

</body>

</html>