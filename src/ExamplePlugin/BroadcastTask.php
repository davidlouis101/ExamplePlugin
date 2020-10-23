<?php

declare(strict_types=1);

namespace ExamplePlugin;

use pocketmine\scheduler\Task;
use pocketmine\Server;

class BroadcastTask extends Task{

	/** @var Server */
	private $server;

	public function __construct(Server $server){
		$this->server = $server;
	}

	public function onRun(int $currentTick) : void{
		$this->server->broadcastMessage("§a§lFuture§fCraft§7»»§7 Abonniert uns doch Gerne auf YT§7»»§c Crow§f Balde");
	}
}
