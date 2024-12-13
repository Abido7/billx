<?php

namespace App\Filament\Resources\PlanLanguageResource\Pages;

use App\Filament\Resources\PlanLanguageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePlanLanguages extends ManageRecords
{
    protected static string $resource = PlanLanguageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
