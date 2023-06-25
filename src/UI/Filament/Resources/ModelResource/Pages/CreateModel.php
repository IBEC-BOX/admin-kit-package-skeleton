<?php

namespace VendorName\Skeleton\UI\Filament\Resources\ModelNameResource\Pages;

use VendorName\Skeleton\UI\Filament\Resources\ModelNameResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateModelName extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ModelNameResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
