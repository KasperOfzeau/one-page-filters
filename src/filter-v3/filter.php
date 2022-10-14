<?php
    
    $link = file_get_contents("../clients.json");
    $array = json_decode($link,1);
    $filter = array(
        "type" => (!isset($_POST["type"])) ? "" : $_POST["type"],
        "branche" => (!isset($_POST["branche"])) ? "" : $_POST["branche"],
        "size" => (!isset($_POST["size"])) ? "" : $_POST["size"],
    );
    $filter_array = array_filter($array, function ($var) use ($filter) {
        if (strpos($var['type'],$filter['type']) !== false && strpos($var['branche'],$filter['branche']) !== false && strpos($var['size'],$filter['size']) !== false){
            return true;
        }
    });

    if(!empty($filter_array)) {
        echo json_encode($filter_array);
    } else {
        echo json_encode("Helaas geen resultaten");
    }