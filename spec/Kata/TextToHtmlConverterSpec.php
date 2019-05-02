<?php

namespace spec\Kata;

use Kata\TextToHtmlConverter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TextToHtmlConverterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TextToHtmlConverter::class);
    }

    function it_converts_text_to_html_paragraph()
    {
        $this->toHtml('Briedis vijo lapę')
            ->shouldReturn('<p>Briedis vijo lapę</p>')
            ;
    }

    function it_converts_long_text_to_html_paragraph()
    {
        $this->toHtml('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.')
            ->shouldReturn('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>')
            ;
    }
}
