<?php
// Copyright (c) 2013-2016 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// Language plugin
class YellowLanguage
{
	const Version = "0.6.2";
	var $yellow;			//access to API
	
	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
	}
}

$yellow->plugins->register("language", "YellowLanguage", YellowLanguage::Version);
?>