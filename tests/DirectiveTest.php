<?php

namespace Lloople\LaravelBladeCurrentYear\Tests;

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
}
