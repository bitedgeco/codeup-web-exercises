<?php 

class Insult
{
	public static $first;
	public static $second;
	public static $firstchar;

	public static $firstWords = ['artless', 'bawdy', 'bootless', 'churlish', 'craven', 'dankish', 'fobbing', 'frothy', 'fusty', 'goatish', 'infectious' , 'jarring', 'lumpish', 'mangled', 'mewling', 'misbegotten', 'odiferous', 'paunchy', 'puking', 'rank', 'reeky', 'spleeny', 'spongy', 'tottering', 'unmuzzled', 'warped', 'wart-necked', 'weedy', 'wimpled', 'yeasty'];

	public static $secondWords = ['baggage', 'barnacle', 'bladder', 'boar-pig', 'bum-bailey', 'canker-blossom', 'clack-dish', 'clotpole', 'codpiece', 'flap-dragon', 'flax-wench', 'foot-licker', 'giglet', 'haggard', 'horn-beast', 'lewdster', 'lout', 'maggot-pie', 'malt-work', 'measle', 'minnow', 'miscreant', 'moldwarp', 'nut-hook', 'pignut', 'puttock', 'ratsbane', 'scut', 'varlot', 'vassal', 'whey-face', 'blind-worm', 'jolt-head', 'malcontent', 'devil-monk'];

	public static function randomElement($arrayName)
	{
		return $arrayName[mt_rand(0, count($arrayName) - 1)];
	}

	public static function constructInsult($firstArray, $secondArray)
	{	
		self::$first = self::randomElement($firstArray);
		self::$second = self::randomElement($secondArray);
	}

	public static function vowelDetector($first)
	{
		$firstchar = substr(self::$first, 0, 1);
		if ($firstchar == 'a' || $firstchar == 'e' || $firstchar == 'i' || $firstchar == 'o' || $firstchar == 'u'){
			return true;
		}
	}
	
	public static function outputInsult()
	{	
		self::constructInsult(self::$firstWords, self::$secondWords);
		if (self::vowelDetector(self::$first)){
			return "Thou art an ".self::$first." ".self::$second.".";
		} else {
			return "Thou art a ".self::$first." ".self::$second.".";
		}
	}
}

