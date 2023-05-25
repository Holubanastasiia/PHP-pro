<?php
namespace Application\Vehicles\Bicycles;

class Bicycle extends \src\Vehicle
{
    protected  static int $counter = 0;
    public function __construct(int $maxSpeed)
    {
        parent::__construct($maxSpeed);
        static::$counter++;
    }
    public static function getCount(): int
    {
        return static::$counter;
    }
}