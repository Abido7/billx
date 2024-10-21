<?php

namespace App\Filament\Resources\SliderLanguageResource\Pages;

use App\Filament\Resources\SliderLanguageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSliderLanguages extends ListRecords
{
    protected static string $resource = SliderLanguageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
