<?php

namespace App\Filament\Resources\PageLanguageResource\Pages;

use App\Filament\Resources\PageLanguageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageLanguage extends EditRecord
{
    protected static string $resource = PageLanguageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
