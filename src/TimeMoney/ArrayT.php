<?php

namespace TimeMoney;

class ArrayT extends Base{
    
     public function getTime($array,$index){
      if(!is_array($array) || $index == $this){
          return;
       }
       return $array[$index];
     }

}
?>
