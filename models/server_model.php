<?php

$script_path = "/var/www/html/minecraft_server/minecraft/resources/minecraft_server_script.sh";

function start_server() {
    global $script_path;
    $output = "";
    $failed = 1;
    exec("sudo sh {$script_path} start", $output, $failed);

    if ($failed) {
        return "Unable to start server." + var_dump($output);
    }
    else {
        return "success";
    }
}

function stop_server() {
    global $script_path;
    $output = "";
    $failed = 1;

    exec("sudo sh {$script_path} stop", $output, $failed);

    if ($failed) {
        return "Unable to stop server." + var_dump($output);
    }
    else {
        return "success";
    }
}
 ?>
