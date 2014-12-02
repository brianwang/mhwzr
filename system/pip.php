<?php

function pip() {
    global $config;

    // Set our defaults
    $controller = $config['default_controller'];
    $action = 'index';
    $url = '';

    // Get request url and script url
    $request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
    $script_url = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';

    // Get our url path and trim the / of the left and the right
    if ($request_url != $script_url) {
        $url = trim(preg_replace('/' . str_replace('/', '\/', str_replace('index.php', '', $script_url)) . '/', '', $request_url, 1), '/');
    }
    $querystring = parse_url($url, PHP_URL_QUERY);
    $path = parse_url($url, PHP_URL_PATH);
    $segments = explode('/', $path);
    // Do our default checks
    if (isset($segments[0]) && $segments[0] != '')
        $controller = $segments[0];
    if (isset($segments[1]) && $segments[1] != '')
        $action = $segments[1];

    $hookdir = $config['hookpath'];
    $hookclass = $config['hookclass'];
    $hookpath = APP_DIR . $hookdir . '/' . $hookclass . '.php';
    require_once($hookpath);
    // Get our controller file
    $path = APP_DIR . 'controllers/' . $controller . '.php';
    if (file_exists($path)) {
        require_once($path);
    } else {
        die('controller is not exists');
    }

    // Check the action exists
    if (!method_exists($controller, $action)) {
//        $controller = $config['error_controller'];
//        require_once(APP_DIR . 'controllers/' . $controller . '.php');
//        $action = 'index';
        die('controller "' . $controller . '" method "' . $action . '" is not exists');
    }

    $hook = new $hookclass;
    if (method_exists($hookclass, 'before')) {
        call_user_func_array(array($hook, 'before'), array($controller, $action));
    }
    // Create object and call method
    $obj = new $controller;
    call_user_func_array(array($obj, $action), array_slice($segments, 2));
    if (method_exists($hookclass, 'after')) {
        die(call_user_func_array(array($hook, 'before'), array($controller, $action)));
    }
}

?>
