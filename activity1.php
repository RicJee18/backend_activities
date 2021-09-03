

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Display</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Enter Your Username:</label>
        <input type="text" name="username">
        <button type="submit" name="submit">Enter</button>      
    </form>
    <?php
  
   if(isset($_POST['submit'])){

    $username = $_POST['username'];
    echo "Username: <b>".$username."</b>";

   }
?>
</body>
</html>