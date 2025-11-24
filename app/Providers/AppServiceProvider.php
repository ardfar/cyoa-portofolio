<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('obfuscateEmail', function ($expression) {
            return "<?php echo \\App\\Support\\Obfuscator::email($expression); ?>";
        });
        Blade::directive('obfuscatePhone', function ($expression) {
            return "<?php echo \\App\\Support\\Obfuscator::phone($expression); ?>";
        });
    }
}
