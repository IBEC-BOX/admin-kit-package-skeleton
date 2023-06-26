<?php

namespace VendorName\Skeleton\UI\Filament\Resources\ModelNameResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use VendorName\Skeleton\UI\Filament\Resources\ModelNameResource;

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
