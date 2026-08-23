<?php

namespace App\Providers;

use App\Models\Book;
use Illuminate\Support\Facades\View;
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
           // Condividi il conteggio con il tuo file di layout (es. 'components.layout' o 'layouts.app')
    View::composer('layouts.book', function ($view) {
        // Conta i libri direttamente dal database in modo super veloce
        $view->with('totalBooks', Book::count()); 
    });
    }
}
