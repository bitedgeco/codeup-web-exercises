<?php 

class Model
{
	protected $attributes = [];
	protected static $table = 'TableName';

	public function __set($key, $value)
    {
        $this->attributes[$key] = $value;
    }

    public function __get($key)
    {
        if (array_key_exists($key, $this->attributes)) {
            return $this->attributes[$key];
        }
    }

    public static function getTableName()
    {
    	return static::$table;
    }


}