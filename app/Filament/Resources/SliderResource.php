<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Filament\Resources\SliderResource\RelationManagers;
use App\Models\Slider;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Sliders';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Informations')->schema([
                    Forms\Components\TextInput::make('title')
                        ->maxLength(255)
                        ->required(),
                    Forms\Components\TextInput::make('sub_title')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('order')
                        ->required(),
                    Forms\Components\Toggle::make('status')
                        ->required(),
                    Forms\Components\TextInput::make('action_type')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('link')
                        ->maxLength(255),
                ])->collapsed(),
                Section::make('Media')->schema([
                    SpatieMediaLibraryFileUpload::make('images')
                        ->image()
                        ->required()
                ])->collapsed(),

                Section::make('Slider Translations')->schema([
                    Repeater::make('Slider Languages')
                        ->relationship('translations') // Defines the relationship
                        ->schema([
                            Forms\Components\Grid::make(2)
                                ->schema([
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
                                ])
                        ])
                        ->columnSpan(2)
                        ->label('Slider Translations')
                        ->collapsible(), // Makes the Repeater expandable
                ])->collapsed(),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('images'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('sub_title'),
                Tables\Columns\TextColumn::make('order'),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('action_type'),
                Tables\Columns\TextColumn::make('link'),
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
            'index' => Pages\ManageSliders::route('/'),
        ];
    }
}
