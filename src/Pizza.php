<?php

namespace Anora\Lib;

abstract class Pizza
{
    protected string $name;
    protected string $dough;
    protected string $sauce;
    protected array $toppings = [];

    public function prepare(): void
    {
        echo "Началась готовка пиццы $this->name\n";
        echo "Добавлен соус: $this->sauce\n";
        echo "Добавлены топпинги: " . implode(', ', $this->toppings) . "\n";
    }

    public function bake(): void
    {
        echo "Готовим при 250°C 12 минут\n";
    }

    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали\n";
    }

    public function box(): void
    {
        echo "Упаковываем в классическую коробку\n";
    }
}
