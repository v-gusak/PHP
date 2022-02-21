<?php
    $users['log1'] = "Савельев Юлиан Натанович";
    $users['log2'] = "Иванков Август Данилович";
    $users['log3'] = "Гуляев Вячеслав Пётрович";
    $users['log4'] = "Афанасьев Давид Ефимович";

    if (isset($_POST['myActionName'])) {
        $result = "Вибачте, такого облікового запису не існує.";

        foreach($users as $key => $value) {
            if ($_POST['login'] == $key) {
                $result = "Доброго дня, " . $value . "!";
            }
        }

        echo $result;
    }
