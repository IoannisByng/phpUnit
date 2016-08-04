<?php

use PHPUnit\Framework\TestCase;
use StringFunctions\StringTool;

class StripMarginTest extends TestCase
{
    public function testStripMargin()
    {
        $stringTool = new StringTool();

        $expected = "Foo bar baz
        Foo bar baz";

        $actual = $stringTool->stripMargin("
          |Foo bar baz
          |Foo bar baz
        ");

        $this->assertEquals($expected, $actual);
    }
}
