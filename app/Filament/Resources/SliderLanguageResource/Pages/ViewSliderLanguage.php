<?php

namespace App\Filament\Resources\SliderLanguageResource\Pages;

use App\Filament\Resources\SliderLanguageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSliderLanguage extends ViewRecord
{
    protected static string $resource = SliderLanguageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
