<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageLanguageResource\Pages;
use App\Filament\Resources\PageLanguageResource\RelationManagers;
use App\Models\PageLanguage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageLanguageResource extends Resource
{
    protected static ?string $model = PageLanguage::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('page_id'),
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
                Tables\Columns\TextColumn::make('page_id'),
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
            'index' => Pages\ListPageLanguages::route('/'),
            'create' => Pages\CreatePageLanguage::route('/create'),
            'view' => Pages\ViewPageLanguage::route('/{record}'),
            'edit' => Pages\EditPageLanguage::route('/{record}/edit'),
        ];
    }    
}
