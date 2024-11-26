<?php

namespace App\Filament\Resources\ContactusRequestResource\Pages;

use App\Filament\Resources\ContactusRequestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageContactusRequests extends ManageRecords
{
    protected static string $resource = ContactusRequestResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
