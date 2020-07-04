<?php

/**
 * 
 * Copyright 2020 matymare
 * 
 * Do not sell, modify or anything similar to the plugin without any question from the plugin owner!
 * I created the plugin due to a bug on my server.
 * 
 */

namespace matymare\AntiGeneratingWorldScreen;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class AGS extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }
    
    public function onPlayerDeath(PlayerDeathEvent $event) {
$player = $event->getEntity();
$player->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
$player->setHealth($player->getMaxHealth());
}

    public function onDisable(){
    }
}
