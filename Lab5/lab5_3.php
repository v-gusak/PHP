<?php
    function validate($phoneNumber) {
        $pattern = "/^\+\d{2}\(\d{3}\)\d{2}-\d{2}-\d{3}$/";

        if(preg_match($pattern, $phoneNumber)) {
            echo "<span style='color: green'>Entered phone number is correct</span> <b>$phoneNumber</b><br>";
        } else {
            echo "<span style='color: red'>Entered phone number is incorrect</span> <b>$phoneNumber</b><br>";
        }
    }

    validate("+38(097)65-94-888"); // correct
    validate("+38(044)555-55-55"); // incorrect
    validate("+380738545541"); // incorrect
?>
