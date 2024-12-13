<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationParentItem = 'System';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Information')->schema([
                    Forms\Components\TextInput::make('title')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('link')
                        ->maxLength(255),
                    Forms\Components\Toggle::make('status')
                        ->required(),
                    Forms\Components\Toggle::make('in_navbar')
                        ->required(),
                ])->columns(2)->collapsible(),

                Section::make('Media')->schema([
                    SpatieMediaLibraryFileUpload::make('images')
                        ->multiple()
                        ->image(),
                ])->collapsed(),

                Section::make('Page Translations')->schema([
                    Repeater::make('Page Languages')
                        ->relationship('translations') // Defines the relationship
                        ->schema([
                            Forms\Components\Grid::make(2)
                                ->schema([
                                    Forms\Components\Select::make('lang')
                                        ->options([
                                            'en' => 'en',
                                            'ar' => 'عربي',
                                        ])
                                        ->required()
                                        ->label('Language Code'), // e.g., 'en', 'fr', etc.

                                    TextInput::make('title')
                                        ->required()
                                        ->label('title'),

                                    Textarea::make('content')
                                        ->required()
                                        ->label('content')
                                        ->columnSpanFull()
                                ])
                        ])
                        ->columnSpan(2)
                        ->label('Page Translations')
                        ->collapsible(), // Makes the Repeater expandable
                ])->collapsed(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('images'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('link')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('status')
                    ->searchable()
                    ->sortable()
                    ->boolean(),

                Tables\Columns\IconColumn::make('in_navbar')
                    ->searchable()
                    ->sortable()
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->slideOver(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePages::route('/'),
        ];
    }
}
