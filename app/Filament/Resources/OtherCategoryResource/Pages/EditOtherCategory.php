<?php

namespace App\Filament\Resources\OtherCategoryResource\Pages;

use App\Filament\Resources\OtherCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOtherCategory extends EditRecord
{
    protected static string $resource = OtherCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
