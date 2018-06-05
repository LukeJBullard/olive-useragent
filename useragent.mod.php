<?php
    /**
     * User Agent Module for OliveWeb
     * December 2014-June 2018
     * 
     * @author Luke Bullard
     * @version 1.1
     */
    
    //make sure we are included securely
    if (!defined("INPROCESS")) { header("HTTP/1.0 403 Forbidden"); exit(0); }
    
    /**
     * OliveWeb Module class for the User Agent Module
     */
    class MOD_useragent
    {
        //constructor
        public function __construct()
        {
            //require in the user agent library source file
            require_once(dirname(__FILE__) . "/UserAgentParser.php");
        }
        
        //parse user agent function wrapper
        //$a_uagent is an optional user agent string
        /**
         * Parse user agent and return the user agent string.
         * @see parse_user_agent For parameters and return values
         */
        function userAgentData($a_uagent = null)
        {
            return parse_user_agent($a_uagent);
        }
    }
?>