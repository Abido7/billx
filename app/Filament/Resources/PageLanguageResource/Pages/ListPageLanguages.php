<?php

namespace App\Filament\Resources\PageLanguageResource\Pages;

use App\Filament\Resources\PageLanguageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageLanguages extends ListRecords
{
    protected static string $resource = PageLanguageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
