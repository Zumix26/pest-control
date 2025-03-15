<?php

declare(strict_types=1);

namespace App\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;

final class DomainServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            \App\Domain\Monitoring\Repositories\GatewayRepositoryInterface::class,
            \App\Infrastructure\Persistence\Eloquent\Repositories\EloquentGatewayRepository::class
        );

        $this->app->bind(
            \App\Domain\Monitoring\Repositories\TrapRepositoryInterface::class,
            \App\Infrastructure\Persistence\Eloquent\Repositories\EloquentTrapRepository::class
        );

        $this->app->bind(
            \App\Domain\Monitoring\Repositories\TrapEventRepositoryInterface::class,
            \App\Infrastructure\Persistence\Eloquent\Repositories\EloquentTrapEventRepository::class
        );
    }

    public function boot(): void
    {
        //
    }
}
