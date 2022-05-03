<?php
    class User {
        private $lastName;
        private $firstName;
        private $age;
        private $email;

        function __construct($lastName, $firstName, $age, $email) {
            $this->lastName = $lastName;
            $this->firstName = $firstName;
            $this->age = $age;
            $this->email = $email;
        }

        function print() {
            echo "
                <table class='table table-bordered table-striped'>
                    <tr>
                        <th style='padding: 10px'>
                            Last name
                        </th>
                        <td style='padding: 10px'>
                            $this->lastName
                        </td>
                    </tr>
                    <tr>
                        <th style='padding: 10px'>
                            First name
                        </th>
                        <td style='padding: 10px'>
                            $this->firstName
                        </td>
                    </tr>
                    <tr>
                        <th style='padding: 10px'>
                            Age
                        </th>
                        <td style='padding: 10px'>
                            $this->age
                        </td>
                    </tr>
                    <tr>
                        <th style='padding: 10px'>
                            Email
                        </th>
                        <td style='padding: 10px'>
                            $this->email
                        </td>
                    </tr>
                </table><br>";
        }
    }

    echo "<br><br>
        <div class='container text-center d-flex justify-content-center'>
            <div class='row'>
                <div class='col-12'>";

                    if (isset($_POST['myActionName'])) {
                        if ($_POST['lastName'] != null && $_POST['firstName'] != null &&
                            $_POST['age'] != null && $_POST['email'] != null) {

                                $user = new User($_POST['lastName'], $_POST['firstName'],
                                                 $_POST['age'], $_POST['email']);

                                $user->print();

                        } else {
                            echo "<h2 style='color: red'>Check if the entered data is correct</h2>";
                        }
                    }

    echo"       </div>
            </div>
    </div>";
?>
