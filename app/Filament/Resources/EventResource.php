<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function getNavigationBadge(): ?string
        {
            return static::getModel()::count(); // returns total number of alumni
        }

     
    public static function form(Form $form): Form
    {
        return $form
        
          ->schema([
    Forms\Components\Section::make('Event Information')
        ->schema([
            TextInput::make('title')->required()->maxLength(255),
            DatePicker::make('date')->required(),
            TextInput::make('location')->maxLength(255),
            TextInput::make('registration_fee')->numeric()->default(0),
            Textarea::make('description')->columnSpanFull(),
            TextInput::make('organised_by')->maxLength(255),
            TextInput::make('sponsored_by')->maxLength(255),
            TextInput::make('conducted_by')->maxLength(255),
            TextInput::make('participants')->numeric(),
            FileUpload::make('photos')
                ->multiple()
                ->image()
                ->directory('events/photos'),
            FileUpload::make('videos')
                ->multiple()
                ->acceptedFileTypes(['video/mp4'])
                ->directory('events/videos'),
        ])
        ->columns(2)
        ->columnSpanFull()
        ->collapsible(false)
        ->compact() // reduces extra spacing
        ->extraAttributes([
            'class' => 'bg-white border rounded-xl shadow-sm p-4'
        ]),
    ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('date')->date()->sortable(),
                TextColumn::make('location')->limit(20),
                TextColumn::make('organised_by')->limit(20),
                TextColumn::make('participants'),
                TextColumn::make('registration_fee'),
                TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit'   => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
