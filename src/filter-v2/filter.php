<?php

$link = file_get_contents("../clients.json");
$array = json_decode($link,1);
$filter = array(
    "category" => (!isset($_POST["category"])) ? "" : $_POST["category"],
);
$filter_array = array_filter($array, function ($var) use ($filter) {
    $projectType = !isset($_POST["projectType"]) ? [] : $_POST["projectType"]; // Array with project types
    if($projectType !== []) {
        // Filter with each project type
        foreach($projectType as $type) {
            if (strpos(strtolower($var['branche']),strtolower($filter['category'])) !== false && strpos(strtolower($var['type']),strtolower($type)) !== false){
                return true;
            }
        }
    } else {
        // Only filter on category
        if (strpos(strtolower($var['branche']),strtolower($filter['category'])) !== false ){
            return true;
        }
    }
});

if(!empty($filter_array)) {
    echo json_encode($filter_array);
} else {
    echo json_encode("Helaas geen resultaten");
}