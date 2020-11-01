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
    public function test_CalculateMinutesBy5_give12h05_returnY(){
        $test = new BerlinClock();
        $timer = "12:05:00";
        $actual = $test->calculateMinutesBy5($timer);
        $this->assertEquals("Y",$actual);
    }
    public function test_CalculateMinutesBy5_give12h10_returnYY(){
        $test = new BerlinClock();
        $timer = "12:10:00";
        $actual = $test->calculateMinutesBy5($timer);
        $this->assertEquals("YY",$actual);
    }
    public function test_CalculateMinutesBy5_give12h15_returnYYR(){
        $test = new BerlinClock();
        $timer = "12:15:00";
        $actual = $test->calculateMinutesBy5($timer);
        $this->assertEquals("YYR",$actual);
    }
    public function test_CalculateMinutesBy5_give12h20_returnYYRY(){
        $test = new BerlinClock();
        $timer = "12:20:00";
        $actual = $test->calculateMinutesBy5($timer);
        $this->assertEquals("YYRY",$actual);
    }
    public function test_CalculateMinutesBy5_give12h25_returnYYRYY(){
        $test = new BerlinClock();
        $timer = "12:25:00";
        $actual = $test->calculateMinutesBy5($timer);
        $this->assertEquals("YYRYY",$actual);
    }
    public function test_CalculateMinutesBy5_give12h30_returnYYRYYR(){
        $test = new BerlinClock();
        $timer = "12:30:00";
        $actual = $test->calculateMinutesBy5($timer);
        $this->assertEquals("YYRYYR",$actual);
    }
    public function test_CalculateMinutesBy5_give12h35_returnYYRYYRY(){
        $test = new BerlinClock();
        $timer = "12:35:00";
        $actual = $test->calculateMinutesBy5($timer);
        $this->assertEquals("YYRYYRY",$actual);
    }
    public function test_CalculateMinutesBy5_give12h40_returnYYRYYRYY(){
        $test = new BerlinClock();
        $timer = "12:40:00";
        $actual = $test->calculateMinutesBy5($timer);
        $this->assertEquals("YYRYYRYY",$actual);
    }
    public function test_CalculateMinutesBy5_give12h45_returnYYRYYRYYR(){
        $test = new BerlinClock();
        $timer = "12:45:00";
        $actual = $test->calculateMinutesBy5($timer);
        $this->assertEquals("YYRYYRYYR",$actual);
    }





}
