<?php

namespace App\Filament\Resources\GalleryResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Get;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;

class MediaRelationManager extends RelationManager
{
    protected static string $relationship = 'media';

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                // Select media type
                Forms\Components\Select::make('type')
                    ->label('Media Type')
                    ->options([
                        'photo' => 'Photo',
                        'video' => 'Video',
                    ])
                    ->default('photo')
                    ->reactive()
                    ->required(),

                // Multiple photo upload
                Forms\Components\FileUpload::make('file_path')
                    ->label('Photos')
                    ->directory('galleries/photos')
                    ->image()
                    ->nullable()
                    ->multiple() // ✅ allow multiple photos
                    ->visible(fn (Get $get) => $get('type') === 'photo'),

                // Single video URL
                Forms\Components\TextInput::make('video_url')
                    ->label('Video URL')
                    ->url()
                    ->nullable()
                    ->placeholder('https://youtube.com/...')
                    ->visible(fn (Get $get) => $get('type') === 'video'),
            ]);
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')->sortable(),
                Tables\Columns\ImageColumn::make('file_path')->label('Photos'), // can display first photo or thumbnails
                Tables\Columns\TextColumn::make('video_url')->label('Video URL'),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }
}
