<?php

namespace App\Filament\Resources\PlanOptionResource\Pages;

use App\Filament\Resources\PlanOptionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePlanOptions extends ManageRecords
{
    protected static string $resource = PlanOptionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
