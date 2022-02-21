<?php
    echo "
        <html style=''>
            <head>
                <title>Таблица умножения</title>
            </head>
            <body>
                <h1>Таблица умножения</h1>    
                <table border=2>
                    <tr bgcolor='orange'> 
                        <td></td>";

                        for ($i = 1; $i <= 9; $i++) {
                            echo "<td> $i </td>";
                        }
                    echo "</tr>";

                    for ($i = 1; $i <= 9; $i++) {
                        echo "<tr><td  bgcolor='orange'> $i </td>";

                        for ($j = 1; $j <= 9; $j++) {
                            echo "<td bgcolor='yellow'>" . $i * $j .  "</td>";
                        }

                        echo "</tr>";
                    }

                echo "</table>
            </body>
        </html>";