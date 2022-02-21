<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lab 3.3</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center d-flex justify-content-center mt-5">
        <div class="row">
            <div class="col-12">
                <form action="lab3_3.php" name="myActionName" method="POST">
                   <input type="text" class="form-control" name="lastname" placeholder="Enter lastname" /> <br> <br>
                   <input type="text" class="form-control" name="firstname" placeholder="Enter firstname" /> <br> <br>
                   <input type="text" class="form-control" name="age" placeholder="Enter age" /> <br> <br>
                   <input type="text" class="form-control" name="email" placeholder="Enter email" /> <br> <br>
                   <input name="myActionName" class="btn btn-outline-success" type="submit" value="Do it!" />
               </form>
            </div>
        </div>
    </div>
              <?php
                  include $_SERVER["DOCUMENT_ROOT"]."/Lab3/lab3_3_controler.php";
              ?>

</body>
</html>
