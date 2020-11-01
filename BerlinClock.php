<?php
namespace BerlinClock;

class BerlinClock{

    public function calculateMinutes($timer){
        $var = explode(":", $timer);
        $minutes = strval($var[1]);
        $mod = $minutes%5;
        $string = "";
        for($i = 0; $i < $mod; $i++){
            $string .= "Y";
        }
        return $string;
    }

    public function calculateMinutesBy5($timer){
        $var = explode(":", $timer);
        $minutes = strval($var[1]);
        $mod = (($minutes/60) * 100) % 12;
        $string = "";
        for($i = 0; $i < $mod; $i++){
            if($mod % 3 == 0){
                $string.= "R";
            }else{
                $string .= "Y";
            }
        }
        return $string;
    }

}