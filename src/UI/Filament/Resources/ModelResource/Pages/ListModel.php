<?php

namespace VendorName\Skeleton\UI\Filament\Resources\ModelNameResource\Pages;

use VendorName\Skeleton\UI\Filament\Resources\ModelNameResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListModelName extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ModelNameResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
