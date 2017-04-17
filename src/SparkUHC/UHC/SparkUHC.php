<?php

namespace SparkUHC\UHC;

use pocketmine\plugin\PluginBase;

class SparkUHC extends PluginBase {
		
	public function onEnable() {
		if (!file_exists($this->getDataFolder()) {
			@mkdir($this->getDataFolder());
		}
	}
		
}
