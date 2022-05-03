<?php
    class Calculator {
        private $firstNumber;
        private $secondNumber;

        function __construct($firstNumber, $secondNumber) {
            if(is_numeric($firstNumber) && is_numeric($secondNumber)) {
                $this->firstNumber = $firstNumber;
                $this->secondNumber = $secondNumber;
            } else {
                $this->firstNumber = 0;
                $this->secondNumber = 0;
            }
        }

        function addition() {
            $result = $this->firstNumber + $this->secondNumber;
            echo "<h5>$this->firstNumber + $this->secondNumber = $result</h5>";
        }

        function subtraction() {
            $result = $this->firstNumber - $this->secondNumber;
            echo "<h5>$this->firstNumber - $this->secondNumber = $result</h5>";
        }

        function division() {
            if($this->secondNumber != 0) {
                $result = $this->firstNumber / $this->secondNumber;
                echo "<h5>$this->firstNumber / $this->secondNumber = $result</h5>";
            } else {
                echo "<h4 style='color: red'>(/)<br>Error! Divison by zero</h4>";
            }
        }

        function modularDivison() {
            if($this->secondNumber != 0) {
                $result = $this->firstNumber % $this->secondNumber;
                echo "<h5>$this->firstNumber % $this->secondNumber = $result</h5>";
            } else {
                echo "<h4 style='color: red'>(%)<br>Error! Divison by zero</h4>";
            }
        }

        function rootExtraction() {
            if($this->firstNumber >= 0 && $this->secondNumber >= 0) {
                echo "<h5>sqrt($this->firstNumber) = " . round(sqrt($this->firstNumber), 3) . "</h5>";
                echo "<h5>sqrt($this->secondNumber) = " . round(sqrt($this->secondNumber), 3) . "</h5>";
            } else {
                echo "<h4 style='color: red'>(sqrt)<br>Error! Numbers must be >= 0</h4>";
            }
        }

        function pow() {
            $result = pow($this->firstNumber, $this->secondNumber);
            echo "<h5>$this->firstNumber ^ $this->secondNumber = $result</h5>";
        }

        function test() {
            echo "<div style='border: dashed red; padding: 15px'>";
                $this->addition();
                $this->subtraction();
                $this->division();
                $this->modularDivison();
                $this->rootExtraction();
                $this->pow();
            echo "</div><br>";
        }
    }

    $first = new Calculator(4, 2);
    $second = new Calculator(-1, 0);

    echo "<br><br>
        <div class='container text-center d-flex justify-content-center'>
            <div class='row'>
                <div class='col-12'>";

                    $first->test();
                    $second->test();

    echo"       </div>
            </div>
    </div>";
?>
