<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function redirect($loc) {
    global $config;
    if (strpos($loc, 'http') > -1) {
        header('Location: ' . $loc);
    } else {
        header('Location: ' . $config['base_url'] . $loc);
    }
    exit();
}

function site_url($path) {
    global $config;
    return $config['base_url'] . $path;
}

function current_url() {
    global $config;
    return $config['base_url'] . $_SERVER['REQUEST_URI'];
}

function cur_uri() {
    return $_SERVER['REQUEST_URI'];
}

function asset_url($path) {
    global $config;
    return $config['asset_url'] . $path;
}
