<?php

namespace Maxeckel\LaravelEditorjs\Tests;

use Orchestra\Testbench\TestCase;
use Maxeckel\LaravelEditorjs\LaravelEditorjsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelEditorjsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
