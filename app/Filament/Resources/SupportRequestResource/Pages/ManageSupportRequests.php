<?php

namespace App\Filament\Resources\SupportRequestResource\Pages;

use App\Filament\Resources\SupportRequestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSupportRequests extends ManageRecords
{
    protected static string $resource = SupportRequestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
