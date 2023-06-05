<?php

namespace Anastasiia\DbQueryBuilder\Builder;

class SqlBuilder implements SqlBuilderInterface
{
    private array|string $columns;
    private array|string $conditions;
    private string $table;
    private int $limit;

    private int $offset;

    private array|string $order;


    public function select($columns): BuilderInterface
    {
        $this->columns = $columns;
        return $this;
    }

    public function where($conditions): BuilderInterface
    {
        $this->conditions = $conditions;
        return $this;
    }

    public function table($table): BuilderInterface
    {
        $this->table = $table;
        return $this;
    }

    public function limit($limit): BuilderInterface
    {
        $this->limit = $limit;
        return $this;
    }

    public function offset($offset): BuilderInterface
    {
        $this->offset = $offset;
        return $this;
    }

    public function order($order): BuilderInterface
    {
        $this->order = $order;
        return $this;
    }

    public function getSql(): string
    {
        $sql = "SELECT " . implode(", ", $this->columns);
        $sql .= " FROM " . $this->table;

        if (!empty($this->conditions)) {
            $sql .= " WHERE " . $this->buildConditions($this->conditions);
        }

        if (!empty($this->orders)) {
            $sql .= " ORDER BY " . $this->buildOrders($this->orders);
        }

        if (isset($this->limit)) {
            $sql .= " LIMIT " . $this->limit;
        }

        if (isset($this->offset)) {
            $sql .= " OFFSET " . $this->offset;
        }

        return $sql;
    }

    private function buildConditions(array $conditions): string
    {
        $parts = [];
        foreach ($conditions as $column => $value) {
            $parts[] = $column . " = " . $this->quoteValue($value);
        }
        return implode(" AND ", $parts);
    }

    private function buildOrders(array $orders): string
    {
        $parts = [];
        foreach ($orders as $column => $direction) {
            $parts[] = $column . " " . $direction;
        }
        return implode(", ", $parts);
    }

    private function quoteValue($value): string
    {
        if (is_string($value)) {
            return "'" . $value . "'";
        } else {
            return $value;
        }
    }
}