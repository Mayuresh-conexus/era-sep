<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EraPulseResource\Pages;
use App\Filament\Resources\EraPulseResource\RelationManagers;
use App\Models\EraPulse;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EraPulseResource extends Resource
{
    protected static ?string $model = EraPulse::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

     public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count(); 
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn ($state, callable $set) =>
                    $set('slug', \Illuminate\Support\Str::slug($state))
                ),

            Forms\Components\TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            // 🟢 Two columns: Featured Image + Excerpt
            Forms\Components\Grid::make(2)
                ->schema([
                    Forms\Components\FileUpload::make('featured_image')
                        ->label('Featured Image')
                        ->image()
                        ->directory('posts')
                        ->imagePreviewHeight('150')
                        ->maxSize(2048),

                    Forms\Components\Textarea::make('excerpt')
                        ->label('Excerpt (one line)')
                        ->rows(3)
                        ->maxLength(255),
                ]),

            Forms\Components\RichEditor::make('content')
                ->label('Content')
                ->columnSpanFull(),

            Forms\Components\Toggle::make('published')
                ->label('Published'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('slug')->sortable()->searchable(),
            Tables\Columns\IconColumn::make('published')->boolean(),
            Tables\Columns\TextColumn::make('created_at')->dateTime('d M Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListEraPulses::route('/'),
            'create' => Pages\CreateEraPulse::route('/create'),
            'edit' => Pages\EditEraPulse::route('/{record}/edit'),
        ];
    }
}
