<?php

namespace RD\Solid\Tag;

class Ul
{
    public function render($content)
    {
        return '<ul>'. $content .'</ul>';
    }
}