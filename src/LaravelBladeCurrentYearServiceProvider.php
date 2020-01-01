<?php

namespace Lloople\LaravelBladeCurrentYear;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelBladeCurrentYearServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('currentYear', function () {
            return "<?php echo date('Y'); ?>";
        });
    }

    public function register()
    {
    }
}
