<?php

namespace nlog\NLOGDropItem;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDropItemEvent;

class Main extends PluginBase implements Listener{
	
	const TAG = "§b§o[ 서버 ] §7";
	
 	 public function onEnable(){
    	$this->getServer()->getPluginManager()->registerEvents($this, $this);
    	$this->getLogger()->info("아이템 드랍 금지 플러그인");
    	$this->getLogger()->info("Made by NLOG (nlog.kro.kr)");
 	 }
 	 
 	 public function onDropItem (PlayerDropItemEvent $ev) {
 	 	
 	 	$ev->setCancelled(true);
 	 	$ev->getPlayer()->sendMessage(self::TAG."이 서버에서는 아이템을 드랍할 수 없습니다.");
 	 	
 	 }
 	 
  }
?>