<?php

namespace App\Filament\Resources\GalleryResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;

class MediaRelationManager extends RelationManager
{
    protected static string $relationship = 'media'; // Make sure your Gallery model has `media()` relation

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->options([
                        'photo' => 'Photo',
                        'video' => 'Video',
                    ])
                    ->required(),

                Forms\Components\FileUpload::make('file_path')
                    ->directory('galleries/photos')
                    ->image()
                    ->visible(fn ($get) => $get('type') === 'photo'),

                Forms\Components\TextInput::make('video_url')
                    ->url()
                    ->placeholder('https://youtube.com/...')
                    ->visible(fn ($get) => $get('type') === 'video'),
            ]);
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')->sortable(),
                Tables\Columns\ImageColumn::make('file_path')->label('Photo'),
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
