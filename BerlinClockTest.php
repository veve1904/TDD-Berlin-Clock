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
    public function test_CalculateMinutesBy5_give12h50_returnYYRYYRYYRY(){
        $test = new BerlinClock();
        $timer = "12:50:00";
        $actual = $test->calculateMinutesBy5($timer);
        $this->assertEquals("YYRYYRYYRY",$actual);
    }
    public function test_CalculateMinutesBy5_give12h55_returnYYRYYRYYRYY(){
        $test = new BerlinClock();
        $timer = "12:55:00";
        $actual = $test->calculateMinutesBy5($timer);
        $this->assertEquals("YYRYYRYYRYY",$actual);
    }
    public function test_CalculateMinutesBy5_give13h00_returnNothing(){
        $test = new BerlinClock();
        $timer = "13:00:00";
        $actual = $test->calculateMinutesBy5($timer);
        $this->assertEquals("",$actual);
    }
    public function test_CalculateHours_give00h00_returnNothing(){
        $test = new BerlinClock();
        $timer = "00:00:00";
        $actual = $test->calculateHours($timer);
        $this->assertEquals("",$actual);
    }
    public function test_CalculateHours_give01h00_returnR(){
        $test = new BerlinClock();
        $timer = "01:00:00";
        $actual = $test->calculateHours($timer);
        $this->assertEquals("R",$actual);
    }
    public function test_CalculateHours_give02h00_returnRR(){
        $test = new BerlinClock();
        $timer = "02:00:00";
        $actual = $test->calculateHours($timer);
        $this->assertEquals("RR",$actual);
    }
    public function test_CalculateHours_give03h00_returnRRR(){
        $test = new BerlinClock();
        $timer = "03:00:00";
        $actual = $test->calculateHours($timer);
        $this->assertEquals("RRR",$actual);
    }
    public function test_CalculateHours_give04h00_returnRRRR(){
        $test = new BerlinClock();
        $timer = "04:00:00";
        $actual = $test->calculateHours($timer);
        $this->assertEquals("RRRR",$actual);
    }
    public function test_CalculateHours_give05h00_returnNothing(){
        $test = new BerlinClock();
        $timer = "05:00:00";
        $actual = $test->calculateHours($timer);
        $this->assertEquals("",$actual);
    }
    public function test_CalculateHoursBy5_give05h00_returnR(){
        $test = new BerlinClock();
        $timer = "05:00:00";
        $actual = $test->calculateHoursBy5($timer);
        $this->assertEquals("R",$actual);
    }
    public function test_CalculateHoursBy5_give10h00_returnRR(){
        $test = new BerlinClock();
        $timer = "10:00:00";
        $actual = $test->calculateHoursBy5($timer);
        $this->assertEquals("RR",$actual);
    }





}
