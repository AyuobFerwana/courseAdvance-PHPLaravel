<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View as MyView;

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
        Schema::defaultStringlength(191);
        Blade::directive('convUnix' , function(string $unix){
            return "<?php echo date('y_m_d' ,$unix)?>";
        });

        View::composer(['create' , 'show'] , function(MyView $view){
            return $view->with(['ayuob'=>'Message from composer']);
        });
    }
}
    