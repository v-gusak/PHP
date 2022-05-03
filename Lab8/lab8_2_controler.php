<?php
    class Country {
        private $name;
        private $capital;
        private $population;

        function __construct($name, $capital, $population) {
            $this->name = $name;
            $this->capital = $capital;
            $this->population = $population;
        }

        function print() {
            echo "
                <table class='table table-bordered table-striped'>
                    <tr>
                        <th style='padding: 10px'>
                            Name
                        </th>
                        <td style='padding: 10px'>
                            $this->name
                        </td>
                    </tr>
                    <tr>
                        <th style='padding: 10px'>
                            Capital
                        </th>
                        <td style='padding: 10px'>
                            $this->capital
                        </td>
                    </tr>
                    <tr>
                        <th style='padding: 10px'>
                            Population in the capital
                        </th>
                        <td style='padding: 10px'>
                            $this->population
                        </td>
                    </tr>
                </table><br>";
        }
    }

    $array = array(
        new Country("Ukraine", "Kyiv", "2,962,180"),
        new Country("Germany", "Berlin", "3,571,000"),
        new Country("Poland", "Warsaw", "1,795,000"),
    );

    echo "<br><br>
        <div class='container text-center d-flex justify-content-center'>
            <div class='row'>
                <div class='col-12'>";

                    foreach ($array as $value) {
                        $value->print();
                    }

    echo"       </div>
            </div>
    </div>";
?>
