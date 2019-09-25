<?php

namespace RD\Solid;

class HtmlTest extends \PHPUnit\Framework\TestCase
{
    public function testRenderizaUmaImagem()
    {
        $html = new Html;
        $img = $html->img('images/default.jpg');

        $this->assertEquals('<img src="images/default.jpg">', $img);
    }

    public function testCriarUmaLista()
    {
        $html = new Html;
        $list = $html->ul('<li>Test</li>');

        $this->assertEquals('<ul><li>Test</li></ul>', $list);
    }

    public function testCriarUmLinkComImagemAncora()
    {
        $html = new Html;
        $img = $html->img('images/default.jpg');
        $link_http = 'https://blog.com.br/perfil';
        $link = $html->a($link_http, $img);

        $this->assertEquals('<a href="'. $link_http .'"><img src="images/default.jpg"></a>', $link);
    }
}