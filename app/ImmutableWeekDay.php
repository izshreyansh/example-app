<?php

namespace App;

class ImmutableWeekDay
{
    public $today;

    const SUNDAY = 0;
    const MONDAY = 1;
    const TUESDAY = 2;
    const WEDNESDAY = 3;
    const THURSDAY = 4;
    const FRIDAY = 5;
    const SATURDAY = 6;

    /**
     * @param int $value
     * @throws \OutOfRangeException */
    public function __construct(int $value)
    {
        $this->setDay($value);
    }

    public function setDay(int $value)
    {
        $this->today = $this->get_class_constants()[$value];
    }

    public function addDays(int $value)
    {
        return $this->get_class_constants();
        $this->setDay(
            $this->get_class_constants()[$value] + $value
        );

        return $this;
    }

    public function equals(ImmutableWeekDay $day): bool
    {
        return true;
    }

    public function isOfValue(int $value): bool
    {
        return true;
    }

    public function get_class_constants()
    {
        $reflect = new \ReflectionClass(get_class($this));
        return $reflect->getConstants();
    }
}
