<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lab 2.12</title>
</head>
<body>
  <form action="lab2_12.php" name="myActionName" method="POST">
       <p>Try to guess a number (0 - 5): </p>
       <input type="text" name="number" placeholder="Enter number" /> <br> <br>
       <input name="myActionName" type="submit" value="Check" />
  </form>

  <?php
      include $_SERVER["DOCUMENT_ROOT"]."/Lab2/lab2_12_controler.php";
  ?>
</body>
</html>
