<?php
function sign($value) {
        return $value >= 0 ? 1 : -1;
}

    if (isset($_POST['myActionName'])) {
        if(is_numeric($_POST['first']) && is_numeric($_POST['second'])) {
            $first = $_POST['first'];
            $second = $_POST['second'];

            if ($first > $second) {
                $temp = $second;
                $second = $first;
                $first = $temp;
            }

            if ((sign($first) == 1 && sign($second) == 1) && $first < $second) {
                $value = 1;
            } else if ((sign($first) == 1 && sign($second) == 1) && $first > $second) {
                $value = -1;
            } else if ((sign($first) == -1 && sign($second) == -1) && $first < $second) {
                $value = 1;
            } else if ((sign($first) == -1 && sign($second) == -1) && $first > $second) {
                $value = -1;
            } else if (sign($first) == -1 && sign($second) == 1) {
                $value = 1;
            } else if (sign($first) == 1 && sign($second) == -1) {
                $value = -1;
            }

            $i = $first;
            while (true) {
                if ($value == -1 && $i == $second - 1) {
                    break;
                } else if ($value == 1 && $i == $second + 1) {
                    break;
                }

                if ($i == 0) {
                    echo "<h1 style=\"color: red;\">Division by zero. Cycle have been stopped</h1>";
                    break;
                }

                echo "10 / $i = " . 10 / $i . "<br>";
                $i += $value;
            }
        } else {
            echo "Not a number!";
        }
    }
