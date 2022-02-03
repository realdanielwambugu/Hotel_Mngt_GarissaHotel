<?php

Namespace App\providers;

use Xcholars\Validation\ValidationServiceProvider as ServiceProvider;


class ValidationServiceProvider extends ServiceProvider
{
   /**
    * The Validation rules mappings for the application.
    *
    * @var array
    */
    protected $mappings = [
        'signup'   => \App\Validation\ForSignup::class,
        'userUpdate' => \App\Validation\ForUserUpdate::class,
        'login'    => \App\Validation\ForLogin::class,
        'room'     => \App\Validation\ForRoom::class,
        'facility' => \App\Validation\ForFacility::class,
        'settings' => \App\Validation\ForSettings::class,
        'booking'  => \App\Validation\ForBooking::class,
    ];
}
