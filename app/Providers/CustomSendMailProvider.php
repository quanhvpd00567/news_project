<?php

namespace App\Providers;

use App\Models\admin\Setting;
use Illuminate\Support\ServiceProvider;

class CustomSendMailProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $setting = \DB::table('settings')->first();

        if (!is_null($setting)){
            $config = array(
                'driver'     => $setting->mail_driver,
                'host'       => $setting->mail_host,
                'port'       => $setting->mail_port,
                'encryption' => $setting->mail_encryption,
                'username'   => $setting->mail_username,
                'password'   => $setting->mail_password,
                'from'      => [
                    'address' => $setting->email,
                    'name' => $setting->name
                ]
//                'pretend'    => false,
            );
            \Config::set('mail', $config);
        }
    }
}
