<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
