<?php
    // load config
    require_once 'config/config.php';

    // load libraries
    /** auto add libraries to this file without typing manually
     *  all files found in libraries folder are loaded on start
     */
    spl_autoload_register(function ($className){
        require_once 'libraries/' .$className. '.php';
    });