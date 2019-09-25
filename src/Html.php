<?php

namespace RD\Solid;

class Html
{
    public function img(string $src = null)
    {
        return '<img src="'.$src.'">';
    }
}