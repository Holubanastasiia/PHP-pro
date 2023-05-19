<?php

interface MovableInterface
{
    public function start();

    public function stop();

    public function up(int $unit);

    public function down(int $unit);
}