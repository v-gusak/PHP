<?php
    if (isset($_POST['myActionName'])) {
        if(abs($_POST['number']) % 2 == 1) {
            echo "Number is odd.";
        } else {
            echo "Number is even.";
        }
    }
