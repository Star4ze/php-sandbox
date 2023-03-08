<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $dir = "./db/";

    if (is_dir($dir)) {
        $files = [];
        if ($dh = opendir($dir)) {
            while (($f = readdir($dh)) !== false) {
                if (substr($f, -3) == 'txt') {
                    array_push($files, $f);
                }
            }
            closedir($dh);
        }

        $respone = [];
        foreach ($files as $f) {
            array_push($respone, json_decode(file_get_contents('./db/' . $f)));
        }
        header('Content-type: application/json');
        echo json_encode($respone);
    }
}

var_dump($_SERVER);
