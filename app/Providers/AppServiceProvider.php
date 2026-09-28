<?php

namespace App\Providers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
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
    View::composer('layouts.default', function ($view) {
        // Conta i libri direttamente dal database in modo super veloce

        $view->with('totalCount',['totalBooks'=> Book::count(), 'totalLoans' => Loan::count(), 'totalUsers' => User::count()]); 
    });
    }
}
