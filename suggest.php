<?php
// People Array
$people[] = "Anna";
$people[] = "Bernhard";
$people[] = "Christian";
$people[] = "Doris";
$people[] = "Emil";
$people[] = "Florian";
$people[] = "Gerhard";
$people[] = "Hermann";
$people[] = "Iris";
$people[] = "Jürgen";
$people[] = "Katharina";
$people[] = "Lena";
$people[] = "Michael";
$people[] = "Norbert";
$people[] = "Otto";
$people[] = "Paul";
$people[] = "Quasar";
$people[] = "Rudolf";
$people[] = "Sabine";
$people[] = "Thomas";
$people[] = "Ursula";
$people[] = "Valerie";
$people[] = "Walter";
$people[] = "Xaver";
$people[] = "Ysa";
$people[] = "Zorro";

// Get Query String
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person) {
        if(stristr($q, substr($person, 0, $len))) {
            if ($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;

?>