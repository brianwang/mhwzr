<?php

function base_url() {
    global $config;
    return $config['base_url'];
}

function site_url($path) {
    global $config;
    return $config['base_url'] . $path;
}

function genid() {
    //set the random id length 
    $random_id_length = 10;

//generate a random id encrypt it and store it in $rnd_id 
    $rnd_id = crypt(uniqid(rand(), 1));

//to remove any slashes that might have come 
    $rnd_id = strip_tags(stripslashes($rnd_id));

//Removing any . or / and reversing the string 
    $rnd_id = str_replace(".", "", $rnd_id);
    $rnd_id = strrev(str_replace("/", "", $rnd_id));

//finally I take the first 10 characters from the $rnd_id 
    $rnd_id = substr($rnd_id, 0, $random_id_length);
    return hexdec($rnd_id);
}

class Url_helper {

    function segment($seg) {
        if (!is_int($seg))
            return false;

        $parts = explode('/', $_SERVER['REQUEST_URI']);
        return isset($parts[$seg]) ? $parts[$seg] : false;
    }

}

?>