<?php
    if (isset($_POST['myActionName'])) {
        $first = $_POST['first'];
        $second = $_POST['second'];

        if ($first > $second) {
            $temp = $second;
            $second = $first;
            $first = $temp;
        }

        $i = $first;
        $j = 1;
        do {
            if($i > $second) {
                break;
            }
            echo "$j. An hour has passed, we have " . "$i" .  " bacteria <br>";
            $i *= 2;
            $j += 1;
        } while ($i != $second);
    }
