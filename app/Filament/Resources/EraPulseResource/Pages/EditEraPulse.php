<?php

namespace App\Filament\Resources\EraPulseResource\Pages;

use App\Filament\Resources\EraPulseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEraPulse extends EditRecord
{
    protected static string $resource = EraPulseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
