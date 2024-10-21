<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderLanguageResource\Pages;
use App\Filament\Resources\SliderLanguageResource\RelationManagers;
use App\Models\SliderLanguage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SliderLanguageResource extends Resource
{
    protected static ?string $model = SliderLanguage::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('slider_id'),
                Forms\Components\TextInput::make('lang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\TextInput::make('sub_title')
                    ->maxLength(255),
                Forms\Components\Textarea::make('content'),
                Forms\Components\TextInput::make('address')
                    ->maxLength(255),
                Forms\Components\TextInput::make('meta_title')
                    ->maxLength(255),
                Forms\Components\Textarea::make('meta_description')
                    ->maxLength(65535),
                Forms\Components\Textarea::make('keywords')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slider_id'),
                Tables\Columns\TextColumn::make('lang'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('sub_title'),
                Tables\Columns\TextColumn::make('content'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('meta_title'),
                Tables\Columns\TextColumn::make('meta_description'),
                Tables\Columns\TextColumn::make('keywords'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSliderLanguages::route('/'),
            'create' => Pages\CreateSliderLanguage::route('/create'),
            'view' => Pages\ViewSliderLanguage::route('/{record}'),
            'edit' => Pages\EditSliderLanguage::route('/{record}/edit'),
        ];
    }    
}
