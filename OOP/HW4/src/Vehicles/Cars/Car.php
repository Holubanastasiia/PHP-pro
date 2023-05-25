<?php
namespace Application\Vehicles\Cars;

use Application\Interfaces\MovableInterface;
use \Application\Vehicle;
use Application\VehiclesParts\Engine;
use Application\VehiclesParts\Wheel;

class Car extends Vehicle implements MovableInterface
{
    public const COUNTRY_ITALY = 'Italy';
    public const COUNTRY_GERMANY = 'Germany';
    public const COUNTRY_AMERICA = 'America';
    protected static int $counter = 0;

    protected $wheels;

    private $engine;

    public string $productionCountry;

    public function __construct(int $maxSpeed, string $productionCountry)
    {
        $this->engine = new Engine();
        $this->productionCountry = $productionCountry;
        $this->wheels = [];
        parent::__construct($maxSpeed);
        static::$counter++;
    }

    public function start(): string
    {
        $this->engine->start();
        return $this->sayHelloToOwner() . "You pressed a start button!" . PHP_EOL;

    }

    public function stop(): string
    {
        $this->isStarted = false;
        $this->currentSpeed = 0;
        $this->engine->stop();
        return 'Stop';
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

    public function getCountry(): string
    {
        return $this->productionCountry;
    }

    public function addWheel(Wheel $wheel)
    {
        $this->wheels[] = $wheel;
    }

    public function printWheelInfo() {
        foreach ($this->wheels as $wheel) {
            echo "Wheel diameter: " . $wheel->getDiameter() . " inches\n";
        }
    }

    public function move(string $from, string $to): string
    {
        return 'Moving from ' . $from . ' to ' . $to;
    }
}