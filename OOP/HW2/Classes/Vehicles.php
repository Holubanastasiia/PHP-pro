<?php
namespace Vehicles;
require_once __DIR__ . '/../Interfaces/MovableInterface.php';
abstract class Vehicles implements \Interfaces\MovableInterface
{
    protected bool $isStarted = false;
    protected int $maxSpeed;
    protected int $currentSpeed = 0;

    public function __construct($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
    public function start(): string
    {
        $this->isStarted = true;
        return 'This Vehicle start his way' . PHP_EOL;
    }

    public function stop(): string
    {
        $this->isStarted = false;
        $this->currentSpeed = 0;
        return 'This Vehicle was stopped' . PHP_EOL;
    }

    public function up(int $unit): string
    {
        if (!$this->isStarted) {
            echo "You need to start the vehicle first" . PHP_EOL;
        }

        if ($this->currentSpeed + $unit > $this->maxSpeed) {
            return 'This is more then you can, your max speed is ' . $this->maxSpeed . ' km/h.' . PHP_EOL;
        }

        $this->currentSpeed += $unit;
        return 'Your speed increasing,  now it is ' . $this->currentSpeed . ' km/h.' . PHP_EOL;
    }

    public function down(int $unit): string
    {
        if (!$this->isStarted) {
            echo "You need to start the vehicle first\n";
            exit();
        }

        if ($this->currentSpeed - $unit < 0) {
            echo $this->stop();
            exit();
        }

        $this->currentSpeed -= $unit;
        return 'Your speed now decreasing, now it is ' . $this->currentSpeed . ' km/h.' . PHP_EOL;
    }

}