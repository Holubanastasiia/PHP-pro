<?php
namespace Vehicles\Bicycles;

require_once __DIR__ . '/Vehicles.php';
//клас наслідує всі методи та властивості абстрактного класу Vehicles, не додаючи свої реалізіції
class Bicycle extends \Vehicles\Vehicles
{
//    const COUNTRY_ITALY = 'Italy';
//    const COUNTRY_GERMANY = 'Germany';
//    const COUNTRY_AMERICA = 'America';
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