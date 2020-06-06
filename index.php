<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
           $firstVar = 0;
           $secondVar = 52;
           while ($firstVar < 20) {             
               echo($firstVar * $secondVar . ' ' );
               $firstVar++;
           }
        ?>
    </p>
</body>
</html>