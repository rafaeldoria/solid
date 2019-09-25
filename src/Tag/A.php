<?php

namespace RD\Solid\Tag;

class A
{
    public function render(string $href = null, string $ancor = null)
    {
        return '<a href="' . $href . '">' . $ancor . '</a>';
    }
}