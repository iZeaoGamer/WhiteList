<?php

namespace alvin0319\WhiteList;

use pocketmine\scheduler\Task;

	class WhitelistTask extends Task {
		   private $plugin;
		   public function __construct(WhiteList $plugin) {
		       $this->plugin = $plugin;
		   }
		   public function onRun(int $currentTick) : void {
		       if ($this->plugin->db["test"] === true) {
		           foreach ($this->plugin->getServer()->getOnlinePlayers() as $player) {
		               if (! $player->isOp()) {
		                   $player->kick ($this->plugin->m["msg"]);
		               }
		           }
		       }
		   }
	}
	}