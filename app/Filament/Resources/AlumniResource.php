<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlumniResource\Pages;
use App\Models\Alumni;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\CheckboxList;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;

class AlumniResource extends Resource
{
    protected static ?string $model = Alumni::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    // Force wizard and form to full-width
    protected static ?string $formLayout = 'default';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(2) // 2 columns for fields
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
                    ->maxLength(1000),
                   

                Forms\Components\Toggle::make('status')
                    ->label('Active')
                    ->default(true),
                
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->label('Password')
                    ->required(fn($record) => $record === null) // required only when creating
                    ->dehydrateStateUsing(fn($state) => \Illuminate\Support\Facades\Hash::make($state))
                    ->dehydrated(fn($state) => filled($state))
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('profile_photo')->circular(),
                Tables\Columns\TextColumn::make('full_name')
                ->label('Name')
                ->getStateUsing(fn ($record) => $record->first_name . ' ' . $record->last_name)
                ->searchable()
                ->sortable(),
                TextColumn::make('mobile_number'),
                TextColumn::make('passing_year')->sortable(),
                TextColumn::make('company')->searchable(),
                IconColumn::make('status')->boolean(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
