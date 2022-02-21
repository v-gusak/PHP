<?php
    if (isset($_POST['myActionName'])) {
        if (is_numeric($_POST['number'])) {
            if (abs($_POST['number']) % 2 == 1) {
                echo "Number is odd.";
            } else {
                echo "Number is even.";
            }
        } else {
            echo "It's not a number.";
        }
    }
