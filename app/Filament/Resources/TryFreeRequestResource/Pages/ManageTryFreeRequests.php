<?php

namespace App\Filament\Resources\TryFreeRequestResource\Pages;

use App\Filament\Resources\TryFreeRequestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTryFreeRequests extends ManageRecords
{
    protected static string $resource = TryFreeRequestResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
