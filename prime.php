
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Check</title>
</head>
<body>

    <form action="" method="post">
        <label for="userInput">Enter a number:</label>
        <input type="number" name="userInput">
        <button type="submit" name="submit">Check</button>      
    </form>

	<?php

		// function to check the number is Prime or Not
		function primeCheck($number){
			if ($number == 1)
			return 0;

			for ($i = 2; $i <= $number/2; $i++){
				if ($number % $i == 0)
					return 0;
			}
			return 1;
		}

        if(isset($_POST['submit'])){

			$number = $_POST['userInput'];
			$flag = primeCheck($number);

			if ($flag == 1)
				echo $number. " is a Prime Number";
			else
				echo $number. " is not a Prime Number";
		}
		
	?>

</body>
</html>
