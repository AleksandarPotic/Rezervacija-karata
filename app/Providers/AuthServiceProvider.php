<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //User policy
        Gate::resource('users','App\Policies\UserPolicy');
        //Role policy
        Gate::define('roles','App\Policies\RolePolicy@role');
        //Permission policy
        Gate::define('permissions','App\Policies\PermissionPolicy@permission');
        //Client policy
        Gate::define('clients','App\Policies\ClientPolicy@client');
        //Tiding policy
        Gate::resource('tidings','App\Policies\TidingPolicy');
        //Message policy
        Gate::define('messages','App\Policies\TidingPolicy@message');
        //Reservation policy
        Gate::resource('reservations','App\Policies\ReservationPolicy');
        //Requirement policy
        Gate::define('requirements','App\Policies\RequirementPolicy@requirement');
        //Match policy
        Gate::resource('matches','App\Policies\MatchPolicy');
        //Sector policy
        Gate::resource('sectors','App\Policies\SectorPolicy');
    }
}
