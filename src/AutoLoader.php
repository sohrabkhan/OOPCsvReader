<?php

/**
 * A simple AutoLoader class designed for making OOPHP more elegant.
 *
 * Class AutoLoader
 * @author Sohrab Khan
 * @version 0.1
 */
class AutoLoader
{
    static private $classNames = array();

    /**
     * Register the php files in a directory when given the directory name
     */
    public static function registerDirectory($directory)
    {

        $directoryIterator = new DirectoryIterator($directory); //Get an instance of DirectoryIterator for the directory that is being registered
        foreach ($directoryIterator as $file) { //Loop through all the content of the directory

            // If the content is a dot then skip this
            if($file->isDot()) {
                continue;
            }

            if ($file->isDir()) { //check if the content is a directory
                self::registerDirectory($file->getPathname()); //Register the content of this directory
            } elseif (substr($file->getFilename(), -4) === '.php') {
                $className = substr($file->getFilename(), 0, -4); // Get the classname only removing the extension
                AutoLoader::registerClass($className, $file->getPathname());
            }
        }
    }

    private static function registerClass($className, $fileName)
    {
        AutoLoader::$classNames[$className] = $fileName;
    }

    /**
     * Checks if the class name exists; in which case the class is included otherwise our custom 404 error is thrown
     */
    public static function loadClass($className)
    {
        if (isset(AutoLoader::$classNames[$className])) {
            require_once(AutoLoader::$classNames[$className]);
        }
        else {
            //throw new NotFoundException("The class $className you specified does not exist");
        }
    }
}

spl_autoload_register(array('AutoLoader', 'loadClass'));
