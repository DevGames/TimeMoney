<?php

namespace TimeMoney;

use onebone\economyapi\EconomyAPI;

class Event extends ArrayT implements \pocketmine\event\Listener{
    
    public function onJoin(\pocketmine\event\player\PlayerJoinEvent $ev){
    $this->getVar()->array[$ev->getPlayer()->getName()] = time();  
    }

    public function Packet(\pocketmine\event\server\DataPacketReceiveEvent $ev){
    if($this->getTime($this->getVar()->array, $ev->getPlayer()->getName()) == $this->getVar()->array[$ev->getPlayer()->getName()] + $timeconfig){
    $this->getVar()->array[$ev->getPlayer()->getName()] = time();
    EconomyAPI::getInstance()->addMoney($ev->getPlayer()->getName(),$moneyconfig);
       }
    }
    
}
?>
