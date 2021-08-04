<?php

declare(strict_types=1);

namespace proxy\hosts;


use pocketmine\network\mcpe\protocol\DataPacket;

class Server extends BaseHost{
	/** @var string $data */
	public $data;

	/**
	 * @param DataPacket $packet
	 */
	public function handleDataPacket(DataPacket $packet) : void{
		parent::handleDataPacket($packet); // TODO: Change the autogenerated stub
	}

	/**
	 * Get motd from server
	 * @return null|string
	 */
	public function getName() : ?string{
		return $this->data[0] ?? null;
	}

	/**
	 * Get server protocol
	 * @return string|null
	 */
	public function getProtocol() : ?string{
		return $this->data[1] ?? null;
	}

	/**
	 * Get server version
	 * @return string|null
	 */
	public function getVersion() : ?string{
		return $this->data[2] ?? null;
	}
}
