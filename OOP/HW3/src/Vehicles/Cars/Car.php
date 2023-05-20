<?php

namespace Application\Vehicles\Cars;
class Car extends \Application\Vehicle
{
    private const COUNTRY_ITALY = 'Italy';
    private const COUNTRY_GERMANY = 'Germany';
    private const COUNTRY_AMERICA = 'America';
    protected static int $counter = 0;

    public function __construct(int $maxSpeed)
    {
        parent::__construct($maxSpeed);
        static::$counter++;
    }

    public function start(): string
    {
        $this->isStarted = true;
        return $this->sayHelloToOwner() . "You pressed a start button!" . PHP_EOL;
    }

    public function down(int $unit): string
    {
        if (!$this->isStarted) {
            echo "Start your car first" . PHP_EOL;
            exit();
        }

        if ($this->currentSpeed - $unit < 0) {
            echo 'Your car was stopped' . PHP_EOL;
            exit();
        }

        $this->currentSpeed -= $unit;
        return 'Your car\'s speed now decreasing, now it is ' . $this->currentSpeed . ' km/h.' . PHP_EOL;
    }

    protected function sayHelloToOwner(): string
    {
        return "Hello owner. " . PHP_EOL;
    }

    public static function getCount(): int
    {
        return static::$counter;
    }
}
