<?php

namespace VendorName\Skeleton\UI\Filament\Resources\ModelNameResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use VendorName\Skeleton\UI\Filament\Resources\ModelNameResource;

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
