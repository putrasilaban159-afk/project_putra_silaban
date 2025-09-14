<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View; // jangan lupa import
use App\Models\Product; // import model Product

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
        // Supaya index panjang tidak error di MySQL lama
        Schema::defaultStringLength(191);

        // Tambahkan baris ini supaya collation tidak pakai utf8mb4_0900_ai_ci
        DB::statement("SET SESSION collation_connection = 'utf8mb4_unicode_ci'");

        // -----------------------------
        // SHARE DATA PRODUK KE SEMUA VIEW
        // -----------------------------
        if (Schema::hasTable('products')) { // cek kalau tabel ada
            $products = Product::all();
            View::share('products', $products);
        }
    }
}
