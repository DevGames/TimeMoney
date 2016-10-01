<?php
namespace TimeMoney;
class ArrayT extends Base{
    public function getTime($array,$index){
        if(!is_array($array) || $index == false){
            return;
        }
        return $array[$index];
    }
}
?>
