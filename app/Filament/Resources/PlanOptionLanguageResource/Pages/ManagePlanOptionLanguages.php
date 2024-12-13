<?php

namespace App\Filament\Resources\PlanOptionLanguageResource\Pages;

use App\Filament\Resources\PlanOptionLanguageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePlanOptionLanguages extends ManageRecords
{
    protected static string $resource = PlanOptionLanguageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
