<?php
require "vendor/autoload.php";
require "BerlinClock.php";

use BerlinClock\BerlinClock;
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase {

    public function test_CalculateMinutes_give12h00_returnNothing(){
        $test = new BerlinClock();
        $timer = "12:00:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("",$actual);

    }

    public function test_CalculateMinutes_give12h01_returnOneY(){
        $test = new BerlinClock();
        $timer = "12:01:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("Y",$actual);
    }

    public function test_CalculateMinutes_give12h02_returnTwoY(){
        $test = new BerlinClock();
        $timer = "12:02:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("YY",$actual);
    }

    public function test_CalculateMinutes_give12h03_returnThreeY(){
        $test = new BerlinClock();
        $timer = "12:03:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("YYY",$actual);
    }

    public function test_CalculateMinutes_give12h04_returnFourY(){
        $test = new BerlinClock();
        $timer = "12:04:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("YYYY",$actual);
    }
    public function test_CalculateMinutes_give12h05_returnNothing(){
        $test = new BerlinClock();
        $timer = "12:05:00";
        $actual = $test->calculateMinutes($timer);
        $this->assertEquals("",$actual);
    }

    public function test_CalculateMinutesBy5_give12h00_returnNothing(){
        $test = new BerlinClock();
        $timer = "12:00:00";
        $actual = $test->calculateMinutesBy5($timer);
        $this->assertEquals("",$actual);
    }


}
