<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lab 4.4</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center d-flex justify-content-center mt-5">
        <div class="row">
            <div class="col-12">
                <form action="lab4_4.php" name="myActionName" method="POST">
                   <input type="text" class="form-control" name="login" placeholder="Enter login" /> <br> <br>
                   <input type="text" class="form-control" name="password" placeholder="Enter password" /> <br> <br>
                   <select class="form-select" name="select">
                       <option value="login">Sign in</option>
                       <option value="register">Sign up</option>
                   </select> <br> <br>
                   <input name="myActionName" class="btn btn-outline-success" type="submit" value="Do it!" />
               </form>
            </div>
        </div>
    </div>
              <?php
                  include $_SERVER["DOCUMENT_ROOT"]."/Lab4/4_4/lab4_4_controler.php";
              ?>

</body>
</html>
