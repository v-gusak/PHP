<?php
    if (isset($_POST['myActionName'])) {
        if ($_POST['login'] != null &&
            $_POST['password'] != null &&
            $_POST['name'] != null &&
            $_POST['birth'] != null &&
            $_POST['sex'] != null &&
            $_POST['country'] != null &&
            $_POST['email'] != null &&
            $_POST['note'] != null) {

            $login = $_POST['login'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $birth = $_POST['birth'];
            $sex = $_POST['sex'];
            $country = $_POST['country'];
            $email = $_POST['email'];
            $note = $_POST['note'];

            echo "<br><br>
                <div class='container text-center d-flex justify-content-center mt-5'>
                    <div class='row'>
                        <div class='col-12'>";

                                $connection = new mysqli("localhost", "root", "", "mybd");

                                if($connection->connect_error) {
                                    die("Connection failed: " . $connection->connect_error);
                                }

                                $sql = "INSERT INTO kor (Login, Password, Name, DateOfBirth,
                                                         Sex, Country, Email, Note)
                                        VALUES ('$login', '$password', '$name', '$birth',
                                                '$sex', '$country', '$email', '$note')";

                                if ($connection->query($sql) === True) {
                                    echo "<h1 class='text-center' style='color: green;'>Data was successfully sent to DB</h1>";
                                } else {
                                    echo "<h1 class='text-center' style='color: red;'>Error: " . $sql . "<br>" . $connection->error . "</h1>";
                                }

                                $connection->close();

                            echo "<br><br>
                        </div>
                    </div>
            </div>";


        } else {
            echo "<br><br><h1 class='text-center' style='color: red;'>Error: Check if the entered data is correct</h1><br><br>";
        }
    }
