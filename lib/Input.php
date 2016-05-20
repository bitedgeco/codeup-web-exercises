<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if (self::has($key)){
            return $_REQUEST[$key];
        } else {
            return NULL;
        }
    }

    public static function escape($input)
    {
        return strip_tags(htmlspecialchars($input));
    }

    public static function getString($key)
    {
        if(!is_string(self::get($key))|| is_numeric(self::get($key))){
            throw new Exception('This should be a string');
        } else {
            return self::get($key);
        }
    }

    public static function getNumber($key)
    {
        if(!is_numeric(self::get($key))){
            throw new Exception('This should be a number');
            } else {
                return intval(self::get($key)); 
        }
    }
    
    public static function getDate($key)
    {
        if (!date_create(self::get($key))){
            throw new Exception('This should be a date');
        } else {
            return date_create(self::get($key));
        }
    }

    // public static function getDate($key)
    // {
    //     if (!strtotime(self::get($key))){
    //         throw new Exception('This should be a date');
    //     } else {
    //         return strtotime(self::get($key));
    //     }
    // }


    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
