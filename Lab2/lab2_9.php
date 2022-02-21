<?php
    if (isset($_POST['myActionName'])) {
        if(is_numeric($_POST['number'])) {
            $number = $_POST['number'];

            for ($i = 1; $i <= 10; $i++) {
                $r = rand(0, 255);
                $g = rand(0, 255);
                $b = rand(0, 255);

                echo "<h4 style=\"color: rgb($r, $g, $b);\">$number * $i = " . $number * $i . "</h4>";
            }
        } else {
            echo "Not a number!";
        }
    }
