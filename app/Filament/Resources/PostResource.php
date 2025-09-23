<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

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
            Tables\Filters\Filter::make('published')
                ->query(fn ($query) => $query->where('published', true)),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

}
