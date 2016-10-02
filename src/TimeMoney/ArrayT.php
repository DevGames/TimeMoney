<?php
namespace TimeMoney;
class ArrayT extends Base{
    public function getTime($array,$index){ # not used Now :)
        if(!is_array($array) || $index == false){
            return;
        }
        return $array[$index];
    }
}
?>
