<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DonationResource\Pages;
use App\Models\Donation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DonationResource extends Resource
{
    protected static ?string $model = Donation::class;
    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function getNavigationBadge(): ?string
        {
            return static::getModel()::count(); 
        }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Donor Information')
                ->schema([
                    Forms\Components\TextInput::make('first_name')
                        ->required(),
                    Forms\Components\TextInput::make('last_name')
                        ->required(),
                    Forms\Components\TextInput::make('email')
                        ->email()
                        ->required(),
                    Forms\Components\TextInput::make('phone')
                        ->tel()
                        ->nullable(),
                ])->columns(2),

            Forms\Components\Section::make('Donation Details')
                ->schema([
                    Forms\Components\TextInput::make('donation_amount')
                        ->numeric()
                        ->required()
                        ->prefix('₹'),
                    Forms\Components\Select::make('donation_type')
                        ->options([
                            'One-Time' => 'One-Time',
                            'Monthly' => 'Monthly',
                            'Annual' => 'Annual',
                        ])->required(),
                    Forms\Components\Select::make('payment_method')
                        ->options([
                            'UPI' => 'UPI',
                            'Card' => 'Card',
                            'Bank Transfer' => 'Bank Transfer',
                            'PayPal' => 'PayPal',
                        ])->required(),
                    Forms\Components\Select::make('donation_for')
                        ->options([
                            'Education' => 'Education',
                            'Health' => 'Health',
                            'Environment' => 'Environment',
                            'Others' => 'Others',
                        ])
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(fn ($state, callable $set) =>
                            $set('donation_for_other', $state === 'Others' ? '' : null)
                        ),
                    Forms\Components\TextInput::make('donation_for_other')
                        ->label('If Others, specify')
                        ->visible(fn ($get) => $get('donation_for') === 'Others'),
                    Forms\Components\Textarea::make('message')
                        ->nullable(),
                ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('id')->sortable(),
            Tables\Columns\TextColumn::make('name')
                ->label('Name')
                ->getStateUsing(fn ($record) => $record->first_name . ' ' . $record->last_name)
                ->searchable(query: function ($query, $search) {
                    $query->where('first_name', 'like', "%{$search}%")
                        ->orWhere('last_name', 'like', "%{$search}%");
                }),
            Tables\Columns\TextColumn::make('email'),
            Tables\Columns\TextColumn::make('donation_amount')->money('INR'),
            Tables\Columns\TextColumn::make('donation_for'),
        
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDonations::route('/'),
            'create' => Pages\CreateDonation::route('/create'),
            'edit' => Pages\EditDonation::route('/{record}/edit'),
        ];
    }
}
