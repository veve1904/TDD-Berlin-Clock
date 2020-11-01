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
        $mod = (($minutes/60) * 12) % 12;
        $string = "";
        for($i = 1; $i <= $mod; $i++){
            if($i % 3 == 0){
                $string.= "R";
            }else{
                $string .= "Y";
            }
        }
        return $string;
    }
    public function calculateHours($timer){
        $var = explode(":", $timer);
        $hours = strval($var[0]);
        $mod = $hours%5;
        $string = "";
        for($i = 0; $i < $mod; $i++){
            $string .= "R";
        }
        return $string;
    }

    public function calculateHoursBy5($timer){
        $var = explode(":", $timer);
        $hours = strval($var[0]);
        $mod = (($hours/20) * 4) % 5 ;
        $string = "";
        for($i = 0; $i < $mod; $i++){
            $string .= "R";
        }
        return $string;
    }
    public function calculateSeconds($timer){
        $var = explode(":", $timer);
        $seconds = strval($var[2]);
        $string = "";
        if ($seconds % 2 == 0){
            $string .= "R";
        }
        return $string;
    }

    public function calculateTime($timer){
        $string = $this->calculateSeconds($timer);
        $string .= 'c'. $this->calculateHoursBy5($timer);
        $string .= 'c'. $this->calculateHours($timer);
        $string .= 'c'. $this->calculateMinutesBy5($timer);
        $string .= 'c'. $this->calculateMinutes($timer);

        return $string;

    }
}