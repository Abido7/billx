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

    protected static ?string $navigationGroup = 'Sliders';
    protected static ?string $navigationParentItem = 'System';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('slider_id')
                    ->relationship('slider', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('lang')
                    ->options([
                        'en' => 'English',
                        'ar' => 'عربي'
                    ])
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sub_title')
                    ->maxLength(255),
                Forms\Components\Textarea::make('content')->required(),
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSliderLanguages::route('/'),
        ];
    }
}
