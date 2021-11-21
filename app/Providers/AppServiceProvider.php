<?php

namespace App\Providers;

use App\Models\Ecole;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $ecole=Ecole::first();
        $messages=[
            array(
                "type"=>"request",
                "hour"=>"14:03",
                "message"=>"je suis à la maison"
            )
        ];
        $notifications=array(
            array(
                "name"=>"La joie MASSAMBA",
                "content"=>"a été par un message"
            ),
            array(
                "name"=>"La joie MASSAMBA",
                "content"=>"a été notifiés par un message"
            ),
            array(
                "name"=>"La joie MASSAMBA",
                "content"=>"a été par un message"
            ),
        );
        $notifications=collect($notifications);
        $messages=collect($messages);
        view()->share([
            'ecole'=>$ecole,
            'notifications'=>$notifications,
            'messages'=>$messages
        ]);
    }
}
