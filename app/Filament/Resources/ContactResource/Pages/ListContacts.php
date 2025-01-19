<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use App\Models\Contact;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        $contactCount = Contact::query()->count();

        if ($contactCount > 0) {
            return [];
        }

        return [
            Actions\CreateAction::make(),
        ];
    }
}
