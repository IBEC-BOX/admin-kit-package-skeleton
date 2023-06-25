<?php

namespace VendorName\Skeleton\UI\Filament\Resources\ModelNameResource\Pages;

use VendorName\Skeleton\UI\Filament\Resources\ModelNameResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModelName extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ModelNameResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
