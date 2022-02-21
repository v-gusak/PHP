<?php
    if (isset($_POST['myActionName'])) {
        if ($_POST['filename'] != null) {

            $filename = $_POST['filename'];
            if(file_exists($filename)) {
                $stat = stat($filename);
                $size = $stat['size'];
                $createTime = date("F d Y, H:i", filectime($filename));
                $modifyTime = date("F d Y, H:i", filemtime($filename));
                $fileContent = file_get_contents($filename, true);
            }

            echo "<br><br>
                <div class='container text-center d-flex justify-content-center mt-5'>
                    <div class='row'>
                        <div class='col-12'>";

                            if(file_exists($filename)) {
                                echo "<h1 class='text-success'>File $filename exists in the current directory.</h1>
                                    <h3 class='text-primary mt-4'>Size: $size bytes
                                        <br>Create: $createTime
                                        <br>Last modify: $modifyTime <br><br>
                                        File contents: <br> <span class='text-info'>$fileContent</span>
                                    </h3>
                                ";
                            } else {
                                echo "<h1 class='text-warning'>File $filename does not exist in current directory.</h1>";
                            }

            echo "
                        </div>
                    </div>
            </div>";

        } else {
            echo "<br><br><h1 class='text-center text-danger mt-5'>Error: Please check if you have filled the input field.</h1>";
        }
    }
