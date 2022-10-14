<?php

$link = file_get_contents("../clients.json");
$array = json_decode($link,1);
$filter = array(
    "branche" => (!isset($_POST["branche"])) ? "" : $_POST["branche"],
    "search" => ($_POST["search"] == "") ? "" : $_POST["search"],
);
$filter_array = array_filter($array, function ($var) use ($filter) {
    if (strpos($var['branche'],$filter['branche']) !== false && strpos(strtolower($var['name']),strtolower($filter['search'])) !== false){
        return true;
    }
});

if(!empty($filter_array)) {
    echo json_encode($filter_array);
} else {
    echo json_encode("Helaas geen resultaten");
}