<?php
    $number = rand(0, 3);

    if (isset($_POST['myActionName'])) {
        if ($_POST['number'] == $number) {
            echo "<h1 style=\"color:red; font-size: 100px;\">Correct!</h1>";
        } else {
            echo "<h1>Number " . $_POST['number'] . " is incorrect</h1>";
            echo "<h1>Try again!</h1>";
        }
    }
