<?php
    function extractTags($text) {
        preg_match_all("/(<([\w]+)[^>]*>)(.*?)(<\/\\2>)/", $text, $result, PREG_SET_ORDER);

        echo "Tags found in the entered text:<br>";
        foreach ($result as $value) {
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp" . $value[2];
        }
    }

    $html = "<b>bold text</b><a href=test.html>some anchor</a><p>123</p>";

    extractTags($html);
?>
