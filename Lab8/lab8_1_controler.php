<?php
    class MultiplicationTable {
        private $number;

        function __construct($number) {
            if(is_numeric($number)) {
                $this->number = $number;
            } else {
                $this->number = 0;
            }
        }

        function calculation() {
            if($this->number != 0) {
                echo "<h4 style='border: dashed red'>";
                for($i = 1; $i <= 10; $i++) {
                    $temp = $this->number * $i;
                    echo "<p>$this->number * $i = $temp</p>";
                }
                echo "</h4><br>";
            } else {
                echo "<h4 style='color: red'>Entered value is not a number</h4><br>";
            }
        }
    }

    $first = new MultiplicationTable(3);
    $second = new MultiplicationTable(8);
    $third = new MultiplicationTable("text");

    echo "<br><br>
        <div class='container text-center d-flex justify-content-center'>
            <div class='row'>
                <div class='col-12'>";

                    $first->calculation();
                    $second->calculation();
                    $third->calculation();

    echo "      </div>
            </div>
    </div>";
?>
