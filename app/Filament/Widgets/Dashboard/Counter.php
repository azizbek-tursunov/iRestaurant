<?php

namespace App\Filament\Widgets\Dashboard;

use App\Models\Chef;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\Reservation;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class Counter extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            BaseWidget\Card::make('New Reservations', Reservation::where('isProvided', false)->count())
                ->icon('heroicon-o-document-text')
                ->color('primary')
                ->chart(array_map(function() { return rand(1, 20); }, range(1, 10))),

            BaseWidget\Card::make('New Messages', Contact::count())
                ->icon('heroicon-o-envelope')
                ->chart(array_map(function() { return rand(1, 20); }, range(1, 10)))
                ->color('danger'),

            BaseWidget\Card::make('All menus', Menu::count())
                ->icon('heroicon-o-document-text')
                ->color('success')
                ->chart(array_map(function() { return rand(1, 20); }, range(1, 10))),

            BaseWidget\Card::make('Chefs', Chef::count())->icon('heroicon-o-user-group')
                ->chart(array_map(function() { return rand(1, 20); }, range(1, 10)))
                ->color('warning'),
        ];
    }
}
