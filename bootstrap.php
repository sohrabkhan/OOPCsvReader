<?php
/**
 * The bootstrap file for the project. This is the only file that needs to be included in phpunit.xml or the
 * entry script index.php
 */

include_once('src/AutoLoader.php');

// Register all php files in Exception, Model and Controller directories
//AutoLoader::registerDirectory('src');
AutoLoader::registerDirectory('src/Exception');
AutoLoader::registerDirectory('src/Controller');
AutoLoader::registerDirectory('src/Model');
AutoLoader::registerDirectory('src/Service');