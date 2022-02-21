<?php
    if (isset($_POST['myActionName']) && $_POST['login'] != null && $_POST['password']) {
            echo "<br><br>
                <div class='container text-center d-flex justify-content-center mt-5'>
                    <div class='row'>
                        <div class='col-12'>";

                            $selectValue = $_POST['select'];
                            $login = $_POST['login'];
                            $password = $_POST['password'];

                            if ($selectValue == "login") {
                                if(file_exists($login . ".txt")) {
                                    $fileContent = file_get_contents($login . ".txt", true);
                                    if ($password == $fileContent) {
                                            echo "<h1 class='text-success'>Greetings, $login!</h1>";
                                    } else {
                                            echo "<h1 class='text-danger'>Password is wrong.</h1>";
                                    }
                                } else {
                                    echo "<h1 class='text-warning'>User with this login is not registered.</h1>";
                                }
                            } else {
                                if (!file_exists($login . ".txt")) {
                                    // $fp = fopen($login . ".txt", "w");
                                    // fwrite($fp, $password);
                                    // fclose($fp);
                                    echo "<h1 class='text-success'>A new user named $login has been successfully created.</h1>";

                                    file_put_contents($login . ".txt", $password);
                                } else {
                                    echo "<h1 class='text-warning'>User with this name already exists, please try another one.</h1>";
                                }
                            }

            echo "
                        </div>
                    </div>
            </div>";


    } else {
        echo "<br><br><h1 class='text-center text-danger mt-5'>Error: Please check if you have filled all input fields correctly.</h1>";
    }
