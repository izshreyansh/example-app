<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\ImmutableWeekDay;

class ImmutableWeekDayTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_add_days()
    {
        $day1 = new ImmutableWeekDay(ImmutableWeekDay::SUNDAY);

        $day2 = $day1->addDays(1);

        $this->assertEquals(ImmutableWeekDay::MONDAY, $day2->today);
    }
}
