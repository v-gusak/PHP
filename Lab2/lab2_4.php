<?php
    $users['log1'] = "Савельев Юлиан Натанович";
    $users['log2'] = "Иванков Август Данилович";
    $users['log3'] = "Гуляев Вячеслав Пётрович";
    $users['log4'] = "Афанасьев Давид Ефимович";

    $passwords['log1'] = "qwerty";
    $passwords['log2'] = "ytrewq";
    $passwords['log3'] = "12345";
    $passwords['log4'] = "54321";

    if (isset($_POST['myActionName'])) {
        $result = "Вибачте, такого облікового запису не існує.";

        foreach($users as $key => $value) {
            if ($_POST['login'] == $key) {
                if ($_POST['password'] == $passwords[$key]) {
                    $result = "Доброго дня, " . $value . "!";
                } else {
                    $result = "Невірна комбінація логіну та паролю.";
                }
            }
        }

        echo $result;
    }
