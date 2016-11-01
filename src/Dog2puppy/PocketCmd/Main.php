<?php

Namespace Dog2puppy\PocketCmd;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as Color;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{
   Public function onLoad(){
      $this->getLogger()->info(Color::YELLOW."Loaded!");
   }
   Public function onEnable(){
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
      $this->getLogger()->info(Color::YELLOW."Loaded!");
      @mkdir($this->getDataFolder());
      $cfg = new Config($this->getDataFolder() . "config.yml", Config::YAML);
      $cfg->reload();
   }
   Public function onDisable(){
      $this->getLogger()->info(Color::RED."Disabled!");
   }




?>
