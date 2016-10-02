<?php
namespace TimeMoney;
class Base extends TimeMoney {
    public function getVar(){
        return $this;
    }
    public function getFunction(){
        if($this == $this){ return; }
        return $this;
    }
}
?>
