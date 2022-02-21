<?php
    $tags = [];
    $description = [];

    $file = fopen("tags.txt", "r");

    if ($file) {
        $i = 0;
        while (($buffer = fgets($file)) !== false) {
            if($i % 2 == 0) {
                $tags[] = $buffer;
            } else {
                $description[] = $buffer;
            }
                $i++;
            }
        }

    fclose($file);

    $tags_count = count($tags);

    echo "<br><br>
        <div class='container text-center d-flex justify-content-center mt-5'>
            <div class='row'>
                <div class='col-12'>
                    <table class='table table-bordered table-striped'><tr>";

                        foreach ($tags as $value) {
                            echo "<th style=\"padding: 10px;\">$value</th>";
                        }

                        echo"</tr><tr>";

                        foreach ($description as $value) {
                            echo "<td style=\"padding: 10px;\">$value</td>";
                        }


    echo "          </tr></table><br><br>
                    <h2 class='text-success mt-5'>Всего в файле описано $tags_count тэгов</h2>
                </div>
            </div>
    </div>";
