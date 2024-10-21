<?php

namespace App\Filament\Resources\SliderLanguageResource\Pages;

use App\Filament\Resources\SliderLanguageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSliderLanguage extends EditRecord
{
    protected static string $resource = SliderLanguageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
