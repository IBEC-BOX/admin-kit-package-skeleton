<?php

namespace VendorName\Skeleton\UI\Filament\Resources\ModelNameResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use VendorName\Skeleton\UI\Filament\Resources\ModelNameResource;

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
