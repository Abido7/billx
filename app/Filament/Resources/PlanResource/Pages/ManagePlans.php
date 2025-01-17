<?php

namespace App\Filament\Resources\PlanResource\Pages;

use App\Filament\Resources\PlanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePlans extends ManageRecords
{
    protected static string $resource = PlanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->slideOver(),
        ];
    }
}
