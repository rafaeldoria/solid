<?php

namespace RD\Solid;

class HtmlTest extends \PHPUnit\Framework\TestCase
{
    public function testSimpleTest()
    {
        $html = new Html;
        $img = $html->img('images/default.jpg');

        $this->assertEquals('<img src="images/default.jpg">', $img);
    }
}