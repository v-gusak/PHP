<?php
    function validate($email) {
        $pattern = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/";

        if(preg_match($pattern, $email)) {
            echo "<span style='color: green'>Entered email is correct</span> <b>$email</b><br>";
        } else {
            echo "<span style='color: red'>Entered email is incorrect</span> <b>$email</b><br>";
        }
    }

    validate("email@example.com"); // correct
    validate("test@sdf"); // incorrect
    validate("123sdf"); // incorrect
?>
