<?php
function multTable (int $value) {
    echo "<div style=\"margin-right: 15px; padding: 5px; border: 2px solid;\">";
    for ($i = 1; $i <= 10; $i++) {
        echo "$value * $i = " . $value * $i . "<br>";
    }
    echo "</div>";
}

    if (isset($_POST['myActionName'])) {
        echo "<div style=\"display: flex; flex-direction: row;\">";
        for($i = 2; $i <= 9; $i++) {
            multTable($i);
        }
        echo "</div>";
    }
