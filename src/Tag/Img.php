<?php

namespace RD\Solid\Tag;

class Img
{
    public function render(string $src = null)
    {
        return '<img src="' . $src . '">';
    }
}