<?php

namespace Application\Interfaces;
interface MovableInterface
{
    public function start();

    public function stop();

    public function up(int $unit);

    public function down(int $unit);

    public function move(string $from, string $to);
}