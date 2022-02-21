<?php
    $number = 2;

    if (isset($_POST['myActionName'])) {
        if ($_POST['number'] == $number) {
            echo "<h1 style=\"color:red; font-size: 100px;\">Correct!</h1>";
        } else {
            if($number > $_POST['number']) {
                echo "<h1>Correct number is greater than " . $_POST['number'] . "</h1>";
            } else {
                echo "<h1>Correct number is less than " . $_POST['number'] . "</h1>";
            }
            echo "<h1>Try again!</h1>";
        }
    }
