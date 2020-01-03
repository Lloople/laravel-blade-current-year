<?php

namespace Lloople\LaravelBladeCurrentYear\Tests;

use Illuminate\Support\Facades\View;

class DirectiveTest extends TestCase
{
    /** @test */
    public function directive_returns_current_year()
    {
        $this->assertSame(
            "<?php echo date('Y'); ?>", 
            app('blade.compiler')->compileString('@currentYear')
        );
    }

    /** @test */
    public function it_renders_the_current_year()
    {
        View::addLocation(__DIR__.'/stubs/views');

        $this->assertEquals(date('Y'), view('directive')->render());
    }
}
