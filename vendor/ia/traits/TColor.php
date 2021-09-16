<?php

namespace ia\traits;

trait TColor
{
    private $color;

    public function getColor(): int
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

}