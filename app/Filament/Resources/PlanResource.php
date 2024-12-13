<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlanResource\Pages;
use App\Filament\Resources\PlanResource\RelationManagers;
use App\Models\Plan;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlanResource extends Resource
{
    protected static ?string $model = Plan::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Pages';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Informations')->schema([

                    TextInput::make('price')
                        ->required()
                        ->label('price'),
                    TextInput::make('link')
                        ->required()
                        ->label('link'),
                    Forms\Components\Checkbox::make('status')
                        ->required()
                        ->label(label: 'Status'),
                ])->collapsible(),


                Section::make('Plan Translations')->schema([
                    Repeater::make('Plan Languages')
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

                                    TextInput::make('type')
                                        ->required()
                                        ->label('type')
                                ])
                        ])
                        ->columnSpan(2)
                        ->label('Plan Translations')
                        ->collapsible(), // Makes the Repeater expandable
                ])->collapsed(),

                Section::make('Options')->schema([
                    Repeater::make('Plan Options')
                        ->relationship('options') // Defines the relationship
                        ->schema([
                            Forms\Components\Grid::make(2)
                                ->schema([
                                    Repeater::make('Plan options')
                                        ->relationship('optionTranslations') // Defines the relationship
                                        // Defines the relationship
                                        ->schema([
                                            Forms\Components\Grid::make(2)
                                                ->schema([
                                                    Forms\Components\Select::make('lang')
                                                        ->options([
                                                            'en' => 'en',
                                                            'ar' => 'عربي',
                                                        ]),
                                                    TextInput::make('title')
                                                        ->required()
                                                        ->label('title'),
                                                ])
                                                ->columns(1)
                                        ])
                                        ->columnSpan(2)
                                        ->label('Plan Options Translation')
                                        ->collapsible(),
                                ])
                        ])
                        ->columnSpan(2)
                        ->label('Options')
                        ->collapsible(), // Makes the Repeater expandable
                ])->collapsed(),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('price')->searchable(),
                Tables\Columns\TextColumn::make('status')->searchable(),
                Tables\Columns\TextColumn::make('link')->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
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
            'index' => Pages\ManagePlans::route('/'),
        ];
    }
}
