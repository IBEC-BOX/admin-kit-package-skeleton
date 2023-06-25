<?php

declare(strict_types=1);

namespace VendorName\Skeleton\Providers;

use VendorName\Skeleton\UI\Filament\Resources\ModelNameResource;
use Filament\PluginServiceProvider;

class FilamentServiceProvider extends PluginServiceProvider
{
    public static string $name = ':package_slug_without_prefix';

    protected array $resources = [
        ModelNameResource::class,
    ];
}
