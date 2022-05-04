<?php
    function dateReplace($dateArray) {
        $patterns = array('/(\d{1,2})-(\d{1,2})-(19|20)(\d{2})/', '/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/');
        $replace = array('\2.\1.\3\4', '\3.\4.\1\2');

        foreach ($dateArray as $value) {
            echo preg_replace($patterns, $replace, $value) . "<br>";
        }
    }

    $dateArray = ['2002-06-11', '1998-01-23', '21-12-2014', '05-09-2018'];

    dateReplace($dateArray);
?>
