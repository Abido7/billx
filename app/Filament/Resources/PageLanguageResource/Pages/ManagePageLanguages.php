<?php

namespace App\Filament\Resources\PageLanguageResource\Pages;

use App\Filament\Resources\PageLanguageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePageLanguages extends ManageRecords
{
    protected static string $resource = PageLanguageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
