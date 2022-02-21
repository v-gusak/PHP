<?php
    if (isset($_POST['myActionName'])) {
      $first = $_POST['first'];
      $second = $_POST['second'];

      $plus = $first + $second;
      $minus = $first - $second;
      $mult = $first * $second;
      if($second != 0) {
        $div = $first / $second;
        $moduloDiv = $first % $second;
      } else {
        $div = "Error (division by zero)";
        $moduloDiv = "Error (division by zero)";
      }

      echo "$first + $second = " . $plus . "<br>";
      echo "$first - $second = " . $minus . "<br>";
      echo "$first * $second = " . $mult . "<br>";
      echo "$first / $second = " . $div . "<br>";
      echo "$first % $second = " . $moduloDiv;
    }
