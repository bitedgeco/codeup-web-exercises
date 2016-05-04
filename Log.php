<?php 

class Log
{
	public static $filename;

	public static $handle;

	public static function openFile($prefix ='log')
    {
        self::$filename = $prefix ."-" . date('Y-m-d').".log";
        self::$handle = fopen(self::$filename, 'a');
    }

    public static function logMessage($logLevel, $message)
	{
	 	self::openFile();
	 	$append = date('Y-m-d h:i:s') . $logLevel . $message;
	    fwrite(self::$handle, $append . PHP_EOL);
    	fclose(self::$handle);
	}

	public static function logInfo($string)
	{
		self::logMessage(" INFO ", $string);
	}

	public static function logError($string)
	{
		self::logMessage(" ERROR ", $string);
	}
}