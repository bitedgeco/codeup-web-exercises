<?php 

class Log
{
	protected static $filename;

	private static $handle;

	public static function setFileName($filename)
    {
    	settype($filename, 'string');
        self::$filename = $filename;
    }

	public static function openFile($prefix ='log')
    {
        self::setFileName($prefix ."-" . date('Y-m-d').".log");
        if (touch(self::$filename) && is_writable(self::$filename)) {
        	self::$handle = fopen(self::$filename, 'a');
        }
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