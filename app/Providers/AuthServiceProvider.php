<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Motive;
use App\Models\InterlacingType;
use App\Models\NationType;
use App\Models\SymbolType;
use App\Models\Type;
use\App\Policies\MotivePolicy;
use\App\Policies\InterlacingTypePolicy;
use\App\Policies\NationTypePolicy;
use\App\Policies\SymbolTypePolicy;
use\App\Policies\TypePolicy;
use\App\Policies\MotiveInterlacingPolicy;
use\App\Policies\MotiveNationPolicy;
use\App\Policies\MotiveSymbolPolicy;
use\App\Policies\MotiveTypePolicy;
use\App\Policies\MotiveInterlacing;
use\App\Policies\MotiveNation;
use\App\Policies\MotiveSymbol;
use\App\Policies\MotiveType;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Motive' => 'App\Policies\MotivePolicy',
        'App\Models\InterlacingType' =>'App\Policies\InterlacingTypePolicy',
        'App\Models\NationType' =>'App\Policies\NationTypePolicy',
        'App\Models\Type' =>'App\Policies\TypePolicy',
        'App\Models\SymbolType' => 'App\Policies\SymbolTypePolicy',
        'App\Models\MotiveSymbol' => 'App\Policies\MotiveSymbolPolicy',
        'App\Models\MotiveNation' => 'App\Policies\MotiveNationPolicy',
        'App\Models\MotiveInterlacing' => 'App\Policies\MotiveInterlacingPolicy',
        'App\Models\MotiveType' => 'App\Policies\MotiveTypePolicy'
        ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
