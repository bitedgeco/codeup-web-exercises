<?php 

function inputHas($key)
{
	return isset($_REQUEST[$key]);
}

function inputGet($key)
{
	if (inputHas($key)){
		return $_REQUEST[$key];
	} else {
		return NULL;
	}
}

function escape($input)
{
	return strip_tags(htmlspecialchars($input));
}

?>