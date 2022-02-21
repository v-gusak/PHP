<?php
    if (isset($_POST['myActionName'])) {
        if ($_POST['lastname'] != null && $_POST['firstname'] != null && $_POST['age'] != null && $_POST['email'] != null) {
            $userInfo = [
                "Lastname" => "{$_POST['lastname']}",
                "Firstname" => "{$_POST['firstname']}",
                "Age" => "{$_POST['age']}",
                "Email" => "{$_POST['email']}",
            ];

            echo "<br><br>
                <div class='container text-center d-flex justify-content-center mt-5'>
                    <div class='row'>
                        <div class='col-12'>
                            <table class='table table-bordered table-striped'>";
                                foreach ($userInfo as $key => $value) {
                                    echo "
                                        <tr>
                                            <th style=\"padding: 10px;\">$key</th>
                                            <td style=\"padding: 10px;\">$value</td>
                                        </tr>
                                    ";
                                }
                            echo "</table><br><br>
                        </div>
                    </div>
            </div>";


        } else {
            echo "<br><br><h1 class='text-center' style='color: red;'>Error: Check if the entered data is correct.</h1>";
        }
    }
