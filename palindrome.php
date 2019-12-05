<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>palindrome</title>
</head>
<body>
    <?php
    $name = "Chris";
    if (strrev($name) == $name) {
        echo "The name is Palindrome";
    } elseif(strrev($name) !== $name){
        echo "The name is not Palindrome";
    }
    ?>
</body>
</html>