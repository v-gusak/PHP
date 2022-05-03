<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lab 8.5</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center d-flex justify-content-center mt-5">
        <div class="row">
            <div class="col-12">
                <form action="lab8_5.php" name="myActionName" method="POST">
                   <input type="text" class="form-control" name="firstNumber" placeholder="First number" /> <br> <br>
                   <input type="text" class="form-control" name="secondNumber" placeholder="Second number" /> <br> <br>
                   <input name="myActionName" class="btn btn-outline-success" type="submit" value="Calculate" /> <br> <br>
               </form>
            </div>
        </div>
    </div>

    <?php
        include $_SERVER["DOCUMENT_ROOT"]."/Lab8/lab8_5_controler.php";
    ?>
</body>
</html>
