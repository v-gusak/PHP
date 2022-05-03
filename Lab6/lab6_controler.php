<?php
    echo "<br><br>
        <div class='container text-center d-flex justify-content-center mt-5'>
            <div class='row'>
                <div class='col-12'>
                    <table class='table table-bordered table-striped'>";

$xmlstr = <<<XML
<movies>
    <movie>
        <title> PHP: Behind the Parser </title>
        <characters>
            <character>
                <name> Ms. Coder </name>
                <actor> Olivia Actora </actor>
            </character>
            <character>
                <name> Mr. Coder </name>
                <actor> El Act&#211;r </actor>
            </character>
        </characters>
        <plot>
            So, this language. It's like, a programming language. Or is it a
            scripting language? All is revealed in this thrilling horror spoof of
            a documentary.
        </plot>
        <rating type="thumbs"> 7 </rating>
        <rating type="stars"> 5 </rating>
    </movie>
</movies>
XML;

                        $movies = new SimpleXMLElement($xmlstr);

                        echo "<tr><th style=\"padding: 10px;\">Value that stored in the node plot:</th></tr>";
                        echo "<tr><td style=\"padding: 10px;\">{$movies->movie[0]->plot}</td></tr>";

                        $movies->movie[0]->characters->character[0]->name = 'Miss Coder';

                        echo "<tr><th style=\"padding: 10px;\">New value of name node: </th></tr>";
                        echo "<tr><td style=\"padding: 10px;\">{$movies->movie[0]->characters->character[0]->name}</td></tr>";

                        echo "<tr><th style=\"padding: 10px;\">All xml-document attributes: </th></tr>";
                        echo "<tr><td style=\"padding: 10px;\">";
                        foreach ($movies->movie[0]->rating as $rating) {
                            echo "type = " . $rating['type'] . "<br>";
                        }
                        echo "</td></tr>";

                        foreach ($movies->movie[0]->rating as $rating) {
                            if($rating == 5) {
                                $rating->addAttribute('new', '777');
                            }
                        }

                        echo "<tr><th style=\"padding: 10px;\">New attribute of 'rating' node with value 5: </th></tr>";
                        echo "<tr><td style=\"padding: 10px;\">";
                        echo "new = " . $movies->movie[0]->rating[1]['new'] . "<br>";
                        echo "</td></tr>";


    echo "          </tr></table><br><br>
                </div>
            </div>
    </div>";
