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

}
