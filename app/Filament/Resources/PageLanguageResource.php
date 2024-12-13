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
    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationParentItem = 'System';

    protected static ?string  $modelLabel = 'Page Translation';
    protected static bool $shouldRegisterNavigation = false;

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('page_id')
                    ->relationship('page', 'link')
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
                    ->maxLength(255)
                    ->required(),
                Forms\Components\TextInput::make('sub_title')
                    ->maxLength(255),
                Forms\Components\Textarea::make('content')
                    ->required(),
                Forms\Components\Textarea::make('meta_description')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('address')
                    ->maxLength(255),
                Forms\Components\TextInput::make('meta_title')
                    ->maxLength(255),
                Forms\Components\Textarea::make('keywords')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page.link')->label('Page Link')
                    ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('lang')
                    ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('content')
                    ->searchable()->limit(50)->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->searchable()->sortable()
                    ->dateTime(),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ManagePageLanguages::route('/'),
        ];
    }
}
