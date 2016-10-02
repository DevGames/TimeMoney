<?php

namespace TimeMoney;

class Event extends ArrayT implements \pocketmine\event\Listener{
    
    public function onJoin(\pocketmine\event\player\PlayerJoinEvent $ev){
        $this->getVar()->array[$ev->getPlayer()->getName()] = time(); 
    }
    
    public function Packet(\pocketmine\event\server\DataPacketReceiveEvent $ev){
        if($this->getVar()->array[$ev->getPlayer()->getName()] >= time() - $this->getVar()->config->get("Time")){
            $this->getVar()->array[$ev->getPlayer()->getName()] = time();
            \onebone\economyapi\EconomyAPI::getInstance()->addMoney($ev->getPlayer()->getName(),$this->getVar()->config->get("Money"));
        }
    }  
}
?>
