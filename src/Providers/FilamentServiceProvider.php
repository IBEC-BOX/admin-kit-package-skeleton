<?php

declare(strict_types=1);

namespace VendorName\Skeleton\Providers;

use Filament\PluginServiceProvider;
use VendorName\Skeleton\UI\Filament\Resources\ModelNameResource;

class FilamentServiceProvider extends PluginServiceProvider
{
    public static string $name = ':package_slug_without_prefix';

    protected array $resources = [
        ModelNameResource::class,
    ];
}
