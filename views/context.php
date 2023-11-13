<?php
    define ("APPNAME", "Minervatech");
    define ("DEBUG", true);
    define ("APIURL", "https://api.minervatech.uy/");

    if (DEBUG) {
        error_reporting(-1);
        ini_set('display_errors', 'On');
        set_error_handler("var_dump");
    }
?>