<?php
    class Calculator {
        private $firstNumber;
        private $secondNumber;

        function __construct() {
            $this->firstNumber = 0;
            $this->secondNumber = 0;
        }

        function setNumbers($first, $second) {
            if(is_numeric($first) && is_numeric($second)) {
                $this->firstNumber = $first;
                $this->secondNumber = $second;
            } else {
                $this->first = 0;
                $this->second = 0;
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
    }

    class Dispatcher {
        protected $calculator;

        function __construct(Calculator $calculator) {
            $this->calculator = $calculator;
        }

        function dispatch() {
            if (isset($_POST['myActionName'])) {
                if ($_POST['firstNumber'] != null && $_POST['secondNumber'] != null &&
                    is_numeric($_POST['firstNumber']) && is_numeric($_POST['secondNumber'])) {

                        $this->calculator->setNumbers($_POST['firstNumber'], $_POST['secondNumber']);

                        return true;

                } else {
                    echo "<h2 style='color: red'>Check if the entered data is correct</h2>";

                    return false;
                }
            }
        }

        function display() {
            echo "<div style='border: dashed red; padding: 15px'>";
                $this->calculator->addition();
                $this->calculator->subtraction();
                $this->calculator->division();
                $this->calculator->modularDivison();
                $this->calculator->rootExtraction();
                $this->calculator->pow();
            echo "</div><br>";
        }
    }

    $calculator = new Calculator;
    $dispatcher = new Dispatcher($calculator);

    echo "<br><br>
        <div class='container text-center d-flex justify-content-center'>
            <div class='row'>
                <div class='col-12'>";

                    if($dispatcher->dispatch()) {
                        $dispatcher->display();
                    }

    echo"       </div>
            </div>
    </div>";
?>
