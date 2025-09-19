<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlumniResource\Pages;
use App\Models\Alumni;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class AlumniResource extends Resource
{
    protected static ?string $model = Alumni::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
   
    public static function getNavigationBadge(): ?string
{
    return static::getModel()::count(); // returns total number of alumni
}



    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->required()
                    ->maxLength(100),

                Forms\Components\TextInput::make('last_name')
                    ->required()
                    ->maxLength(100),

                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true),

                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(20),

                Forms\Components\Select::make('gender')
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                        'other' => 'Other',
                    ])
                    ->required(),

                Forms\Components\DatePicker::make('date_of_birth'),

                Forms\Components\TextInput::make('batch_year')
                    ->numeric()
                    ->minValue(1950)
                    ->maxValue(date('Y')),

                Forms\Components\TextInput::make('degree')
                    ->maxLength(100),

                Forms\Components\TextInput::make('department')
                    ->maxLength(150),

                Forms\Components\TextInput::make('passing_year')
                    ->numeric()
                    ->minValue(1950)
                    ->maxValue(date('Y')),

                Forms\Components\Textarea::make('address')
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('city'),
                Forms\Components\TextInput::make('state'),
                Forms\Components\TextInput::make('country'),

                Forms\Components\TextInput::make('current_job_title')
                    ->maxLength(150),

                Forms\Components\TextInput::make('company')
                    ->maxLength(150),

                Forms\Components\TextInput::make('linkedin_url')
                    ->url(),

                Forms\Components\FileUpload::make('profile_photo')
                    ->image()
                    ->directory('alumni/photos'),

                Forms\Components\Textarea::make('bio')
                    ->maxLength(1000)
                    ->columnSpanFull(),

                Forms\Components\Toggle::make('status')
                    ->label('Active')
                    ->default(true),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('profile_photo')
                    ->circular(),

                Tables\Columns\TextColumn::make('first_name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('last_name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('email')
                    ->searchable(),

                Tables\Columns\TextColumn::make('phone'),

                Tables\Columns\TextColumn::make('batch_year')
                    ->sortable(),

                Tables\Columns\TextColumn::make('passing_year')
                    ->sortable(),

                Tables\Columns\TextColumn::make('company')
                    ->searchable(),

                Tables\Columns\TextColumn::make('current_job_title')
                    ->label('Job Title'),

                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
            ])
            ->filters([])
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAlumnis::route('/'),
            'create' => Pages\CreateAlumni::route('/create'),
            'edit' => Pages\EditAlumni::route('/{record}/edit'),
        ];
    }
}
