<?php

namespace anora\lib;

class Pizza
{
    public string $name;
    public string $sauce;
    public array $toppingss;

    public function __construct(string $name, string $sauce, array $toppingss)
    {
        $this->name = $name;
        $this->sauce = $sauce;
        $this->toppingss = $toppingss;
    }
    public function prepare(): void
    {
        echo "Началась готовка пиццы: {$this->name}\n";
        echo "Добавлен соус: {$this->sauce}\n";
        echo "Добавлены топики: " . implode(", ", $this->toppingss) . "\n";
    }
    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали\n";
    }
}
