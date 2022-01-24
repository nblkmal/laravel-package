<?php

namespace App\Providers;

use Nblkmal\CustomAuth\Classes\CustomRegister;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        CustomRegister::customValidationRules([
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8'
        ]);

        CustomRegister::customRegisterView(function () {
            return view('custom-view');
        });
    }
}