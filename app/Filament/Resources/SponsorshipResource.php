<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SponsorshipResource\Pages;
use App\Models\Sponsorship;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SponsorshipResource extends Resource
{
    protected static ?string $model = Sponsorship::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    // -----------------------
    // Form Schema
    // -----------------------
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Sponsorship Details')
                    ->schema([
                        Forms\Components\Repeater::make('sponsors')
                            ->relationship('sponsors')
                            ->schema([
                                Forms\Components\TextInput::make('sponsor_name')
                                    ->label('Sponsor Name')
                                    ->required(),
                            ])
                            ->createItemButtonLabel('Add Sponsor')
                            ->columns(1),

                        Forms\Components\TextInput::make('email')
                            ->label('Email Address')
                            ->email()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('contact_no')
                            ->label('Contact No.')
                            ->maxLength(20),

                        Forms\Components\DatePicker::make('date')
                            ->label('Date'),

                        Forms\Components\TextInput::make('sponsorship')
                            ->label('Sponsorship Title')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('no_of_participants')
                            ->label('No. of Participants')
                            ->numeric(),

                        Forms\Components\FileUpload::make('photos_videos')
                            ->label('Photos & Videos')
                            ->multiple()
                            ->directory('sponsorships/media')
                            ->imagePreviewHeight('100')
                            ->enableReordering(),

                        Forms\Components\TextInput::make('cost')
                            ->label('Cost')
                            ->numeric(),
                    ]),
            ]);
    }

    // -----------------------
    // Table Schema
    // -----------------------
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),

                Tables\Columns\TextColumn::make('sponsors.sponsor_name')
                    ->label('Sponsors')
                    ->listWithLineBreaks()
                    ->limit(50),

                Tables\Columns\TextColumn::make('email')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('contact_no')
                    ->label('Contact No.')
                    ->sortable(),

                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('sponsorship')
                    ->label('Sponsorship Title')
                    ->limit(30)
                    ->searchable(),

                Tables\Columns\TextColumn::make('no_of_participants')
                    ->label('Participants'),

                Tables\Columns\TextColumn::make('cost')
                    ->money('USD')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M d, Y')
                    ->label('Created'),
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

    // -----------------------
    // Relations
    // -----------------------
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    // -----------------------
    // Pages
    // -----------------------
    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListSponsorships::route('/'),
            'create' => Pages\CreateSponsorship::route('/create'),
            'edit'   => Pages\EditSponsorship::route('/{record}/edit'),
        ];
    }
}
