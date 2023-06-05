<?php

namespace Anastasiia\DbQueryBuilder\Builder;

interface SqlBuilderInterface extends BuilderInterface
{
    public function getSql(): string;
}