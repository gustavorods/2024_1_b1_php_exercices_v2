<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisíveis por 4</title>
</head>
<body>
    <?php
    for($i = 20; $i >= 4; $i--) {
        if($i % 4 == 0) {
            echo "$i é divisível por 4! <br/> <br/>";
        }
    }
    ?>
</body>
</html>