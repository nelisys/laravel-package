<?php

namespace Nelisys\LaravelPackage\Tests;

use Orchestra\Testbench\TestCase;
use Nelisys\LaravelPackage\Item;
use Nelisys\LaravelPackage\ItemServiceProvider;

class ItemTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ItemServiceProvider::class,
        ];
    }

    /** @test */
    public function it_can_say_hello()
    {
        $item = new Item();

        $this->assertSame('hello', $item->hello());
    }

    /** @test */
    public function it_can_say_hello_from_routes_web()
    {
        $this->get('hello')
            ->assertStatus(200)
            ->assertSee('hello');
    }
}
