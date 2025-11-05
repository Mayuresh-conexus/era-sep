<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;
    protected static ?string $navigationIcon = 'heroicon-o-photo';
  

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count(); 
    }



    public static function form(Forms\Form $form): Forms\Form
    {
        return $form

         ->schema([
                 Forms\Components\Section::make('Gallery Information')
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('year')
                    ->numeric()
                    ->required()
                    ->minValue(1950)
                    ->maxValue(date('Y')),
                Forms\Components\Textarea::make('description')->columnSpanFull(),
            ]),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('year')->sortable(),
                Tables\Columns\TextColumn::make('description')->limit(50),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
        
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\MediaRelationManager::class, // ✅ handles photos + videos
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
