<?php
    if (isset($_POST['myActionName'])) {
            echo "<br><br>
                <div class='container text-center d-flex justify-content-center'>
                    <div class='row'>
                        <div class='col-12'>
                            <h1>Information from DB:</h1> <br>
                            <table class='table table-bordered table-striped'>
                                <tr>
                                  <th>Login</th>
                                  <th>Password</th>
                                  <th>Name</th>
                                  <th>Date of birth</th>
                                  <th>Sex</th>
                                  <th>Country</th>
                                  <th>Email</th>
                                  <th>Note</th>
                                </tr>";
                                
                                $connection = new mysqli("localhost", "root", "", "mybd");

                                if($connection->connect_error) {
                                    die("Connection failed: " . $connection->connect_error);
                                }

                                $result = mysqli_query($connection, "SELECT * FROM `kor`");

                                if($result !== false) {
                                    while ($array = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        foreach ($array as $key => $value) {
                                            echo "<td style=\"padding: 10px;\">$value</td>";
                                        }
                                    }
                                }

                                $connection->close();

                            echo "</tr></table><br><br>
                        </div>
                    </div>
            </div>";
    }
