<?php
    if (isset($_POST['myActionName'])) {
        if ($_POST['first'] == $_POST['second']) {
            echo "Numbers are equal";
        } else if ($_POST['first'] > $_POST['second']) {
            echo "First number is bigger";
        } else {
            echo "Second number is bigger";
        }
    }
