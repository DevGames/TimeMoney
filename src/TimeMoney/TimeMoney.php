<?php

namespace TimeMoney;

class TimeMoney extends \pocketmine\plugin\PluginBase{

    public $array = array();

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents(new Event(), $this);
    }
    
}
?>
