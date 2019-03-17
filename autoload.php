<?php
/**
 * @package Keygen SDK
 * @version 1.0
 * @author  Jon Taylor
 * @example Keygen\Settings::getInstance() = include(__DIR__/src/Settings.php);  Settings::getInstance();
 */
spl_autoload_register(function ($class) {


    // Namespace prefix
    $prefix = 'Keygen';

    // String length for strncmp function
    $length = strlen($prefix);

    // Checking if the prefix exists within the class name.
    if(strncmp($prefix, $class, $length)) {

        // Base directory for Keygen class
        $baseDir = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR;

        // What to search for in the class.
        $find = array('\\', $prefix);

        // What to replace in the what is found.
        $with = array(DIRECTORY_SEPARATOR, $baseDir);

        // Performing replacement.  This is the new path.
        $classPath = str_replace($find, $with, $class . '.php');

        // If the file exists.  Include it.
        if(file_exists($classPath)) {
            include($classPath);
        }
    }

});