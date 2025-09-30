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
                Wizard::make([
                    Wizard\Step::make('Basic Information')
                        ->columns(2)
                        ->columnSpanFull() // full width for the wizard step
                        ->schema([
                            Select::make('association')
                                ->label('Association with Institution')
                                ->options([
                                    'ex-student' => 'Ex-Student',
                                    'former-staff' => 'Former Staff',
                                ])
                                ->required(),

                            Select::make('title')
                                ->options([
                                    'Mr.' => 'Mr.',
                                    'Ms.' => 'Ms.',
                                    'Mrs.' => 'Mrs.',
                                    'Dr.' => 'Dr.',
                                    'Prof.' => 'Prof.',
                                ])
                                ->required(),

                            TextInput::make('first_name')->required()->maxLength(100),
                            TextInput::make('last_name')->required()->maxLength(100),
                            TextInput::make('maiden_name')->maxLength(100),
                            DatePicker::make('date_of_birth')->label('Date of Birth'),
                            Select::make('gender')
                                ->options([
                                    'male' => 'Male',
                                    'female' => 'Female',
                                    'other' => 'Prefer not to say',
                                ])
                                ->required(),
                            TextInput::make('email')->email()->required()->unique(ignoreRecord: true),
                            TextInput::make('mobile_number')->label('Mobile Number'),
                            TextInput::make('whatsapp_number')->label('WhatsApp Number'),
                            TextInput::make('residential_number')->label('Residential Number'),
                            TextInput::make('address')->label('Current Address'),
                            TextInput::make('city'),
                            TextInput::make('country'),
                            TextInput::make('passing_year')->numeric()->minValue(1950)->maxValue(date('Y')),
                        ]),

                    Wizard\Step::make('Interests & Preferences')
                        ->columns(2)
                        ->columnSpanFull()
                        ->schema([
                            CheckboxList::make('interests')
                            ->label("I'm interested in")
                            ->options([
                                'events' => 'Alumni Events & Reunions',
                                'mentoring' => 'Mentoring Current Students',
                                'networking' => 'Career Networking',
                                'guest_lectures' => 'Guest Lectures/Speaking',
                                'recruitment' => 'Recruitment Drives',
                                'volunteering' => 'Volunteering Opportunities',
                                'fundraising' => 'Fundraising Activities',
                                'others' => 'Others',
                            ]),

                        CheckboxList::make('communication_preferences')
                            ->label('How would you like to stay connected?')
                            ->options([
                                'email_newsletter' => 'Email Newsletter',
                                'whatsapp_group' => 'WhatsApp Group',
                                'linkedin_group' => 'LinkedIn Group',
                                'magazine' => 'Rosary Samachar (Magazine)',
                                'event_invitations' => 'Event Invitations',
                                'dont_bother' => "Don't bother me",
                            ]),

                        ]),

                    Wizard\Step::make('Consent & Verification')
                        ->columns(1)
                        ->columnSpanFull()
                            ->schema([
                                Checkbox::make('verify_info')
                                    ->label('I verify that the information provided is accurate')
                                    ->required(),
                                Checkbox::make('agree_terms')
                                    ->label('I agree to the Terms & Conditions and Privacy Policy')
                                    ->required(),
                                Checkbox::make('consent_communications')
                                    ->label('I consent to receive communications from the alumni association')
                                    ->required(),
                            ]),

                    Wizard\Step::make('Professional Information (Optional)')
                        ->columns(2)
                        ->columnSpanFull()
                        ->schema([
                            Select::make('employment_status')
                                ->options([
                                    'employed' => 'Employed',
                                    'self_employed' => 'Self-Employed',
                                    'retired' => 'Retired',
                                    'student' => 'Student',
                                ]),
                            TextInput::make('company'),
                            TextInput::make('job_title'),
                            TextInput::make('industry'),
                            TextInput::make('linkedin_url')->url(),
                            Textarea::make('bio')->maxLength(1000)->columnSpanFull(),
                            FileUpload::make('profile_photo')->image()->directory('alumni/photos')->columnSpanFull(),
                            Toggle::make('status')->label('Active')->default(true),
                        ]),
                ])->columnSpanFull(), // make entire wizard full width
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
