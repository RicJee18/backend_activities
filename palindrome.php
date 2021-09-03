<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Check</title>
</head>
<body>
    <form action="" method="post">
        <label for="userInput">Enter a word:</label>
        <input type="text" name="userInput">
        <button type="submit" name="submit">Check</button>      
    </form>

    <?php

    function check_palindrome($string) 
    {
    if ($string == strrev($string))
        return $string." is a <b>palindrome</b>";
    else
        return $string." is not a <b>palindrome</b>";
    }
     
    if(isset($_POST['submit'])){

        echo check_palindrome($_POST['userInput'])."\n";

    }

    ?>
</body>
</html>