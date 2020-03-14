<?php

namespace Nelisys\LaravelPackage\Tests;

use Orchestra\Testbench\TestCase;
use Nelisys\LaravelPackage\Item;

class ItemTest extends TestCase
{
    /** @test */
    public function it_can_say_hello()
    {
        $item = new Item();

        $this->assertSame('hello', $item->hello());
    }
}
