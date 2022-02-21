<?php
    $countries = [
        "Georgia" => "4,085,565 / Tbilisi",
        "Ukraine" => "44,291,413 / Kyiv",
        "Switzerland" => "8,685,688 / Bern",
    ];

    // 3 x 2
    echo "<h2>3 x 2</h2><table border=3 style=\"border-collapse: collapse;\">";
        foreach ($countries as $key => $value) {

            echo "
                <tr>
                    <th style=\"padding: 10px;\">$key</th>
                    <td style=\"padding: 10px;\">$value</td>
                </tr>
            ";

        }
    echo "</table><br><br>";

    // 2 x 3
    echo "<h2>2 x 3</h2><table border=3 style=\"border-collapse: collapse;\"><tr>";
        foreach ($countries as $key => $value) {
            echo "<th style=\"padding: 10px;\">$key</th>";
        }

        echo "<tr>";

        foreach ($countries as $key => $value) {

            echo "<td style=\"padding: 10px;;\">$value</td>";
        }

    echo "</tr></table>";
