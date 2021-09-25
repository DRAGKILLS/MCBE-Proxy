<?php

declare(strict_types=1);

namespace Frago9876543210\Example;


use pocketmine\network\mcpe\protocol\DataPacket;
use pocketmine\network\mcpe\protocol\TextPacket;
use proxy\plugin\Plugin;
use proxy\utils\Log;

class Main extends Plugin{
	/**
	 * Called when the plugin is enabled
	 */
	public function onEnable() : void{
		Log::Warn("I am loaded!");
	}

	/**
	 * @param DataPacket $packet
	 * @return bool
	 */
	public function handleServerDataPacket(DataPacket $packet) : bool{
		return true;
	}

	/**
	 * @param DataPacket $packet
	 * @return bool
	 */
	public function handleClientDataPacket(DataPacket $packet) : bool{
		if($packet instanceof TextPacket){
			$packet->decode();
			//way to create chat commands
                        switch ($packet->message){
				case ".help":
				    $this->proxy->getClient()->sendMessage("help:\nsoon");
				    return false; //to cancel packet you dont need to add break;
			}
		}
		return true;
	}
}
