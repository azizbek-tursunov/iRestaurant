<?php

namespace App\Filament\Widgets;

use App\Models\Reservation;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestResevations extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Reservation::query()
                    ->orderBy('created_at', 'desc')
                    ->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('guests'),
                Tables\Columns\TextColumn::make('date'),
                Tables\Columns\TextColumn::make('time'),
                Tables\Columns\IconColumn::make('isProvided')
                    ->boolean(),
            ]);
    }
}
