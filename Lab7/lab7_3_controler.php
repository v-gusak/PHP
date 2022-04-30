<?php
    if (isset($_GET['myActionName'])) {
         if ($_GET['id'] != null) {
            echo "<br><br>
                <div class='container text-center d-flex justify-content-center'>
                    <div class='row'>
                        <div class='col-12'>
                            <h2>Article with ID {$_GET['id']}:</h2> <br>
                            <table class='table table-bordered table-striped'>
                                <tr>
                                  <th>Tittle</th>
                                  <th>Text</th>
                                </tr>";

                                $connection = new mysqli("localhost", "root", "", "mysitedb");

                                if($connection->connect_error) {
                                    die("Connection failed: " . $connection->connect_error);
                                }

                                $result = mysqli_query($connection, "SELECT title, text FROM `articles` WHERE id={$_GET['id']}");

                                if($result !== false) {
                                    while ($array = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        foreach ($array as $key => $value) {
                                            echo "<td style=\"padding: 10px;\">$value</td>";
                                        }
                                    }
                                }

                            echo "</tr></table><br><br>
                                <h2>Comments for article with ID {$_GET['id']}:</h2> <br>";

                                $result = mysqli_query($connection, "SELECT * FROM `comments` WHERE article_id={$_GET['id']}");

                                if($result !== false) {
                                    while ($info = mysqli_fetch_assoc($result)) {
                                        $users = mysqli_query($connection, "SELECT * FROM `users` WHERE id={$info['user_id']}");
                                        $array = mysqli_fetch_assoc($users);
                                        echo "<p><b> | " . $array['name'] . " | </b>  {$info['text']} <br></p>";
                                    }
                                }

                                $connection->close();

                        echo "<br></div>
                    </div>
            </div>";
        } else {
            echo "<br><br><h1 class='text-center' style='color: red;'>Error: Check if the entered data is correct</h1><br><br>";
        }
    }
