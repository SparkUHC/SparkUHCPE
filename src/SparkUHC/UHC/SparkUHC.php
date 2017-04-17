<?php

namespace SparkUHC\UHC;

use pocketmine\plugin\PluginBase;

class SparkUHC extends PluginBase {
		
	public function onEnable() {
		//create the data folders
		@mkdir($this->getDataFolder());
		@mkdir($this->getDataFolder() . "scenarios");
	}
		
}
