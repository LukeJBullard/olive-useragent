<?php
    /**
     * Olive-UserAgent
     * Example Page
     * September 2020
     * 
     * @author Luke Bullard
     */

    //make sure we are included securely
    if (!defined("INPROCESS")) { header("HTTP/1.0 403 Forbidden"); exit(0); }

    $modules = Modules::getInstance();
    $mod_ua = $modules['useragent'];
    $ua = $mod_ua->userAgentData();
    
    $pageVariables = array(
        "ua" => $ua['platform'] . ": " . $ua['browser'] . " (" . $ua['version'] . ")"
    );
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style type="text/css">
            html,body {font-family: sans-serif;}
        </style>
    </head>
    <body>
        <center>
            <?php echo htmlentities($pageVariables['ua']); ?>
        </center>
    </body>
</html>
