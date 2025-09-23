<?php

namespace App\Filament\Resources\EventResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Event;

class EventsWidget extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Events', Event::count())
                ->color('primary')
                ->icon('heroicon-o-calendar'),

            Card::make('Upcoming Events', Event::where('date', '>=', now())->count())
                ->color('success')
                ->icon('heroicon-o-clock'),
        ];
    }
}
