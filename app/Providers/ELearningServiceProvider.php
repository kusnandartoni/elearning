<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class ELearningServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $halaman='';
        if(Request::segment(1)=='about'):
            $halaman='about';
        endif;
        if(Request::segment(1)=='siswa'):
            $halaman='siswa';
        endif;
        if(Request::segment(1)=='kelas'):
            $halaman='kelas';
        endif;
        if(Request::segment(1)=='hobi'):
            $halaman='hobi';
        endif;
        view()->share('halaman',$halaman);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
