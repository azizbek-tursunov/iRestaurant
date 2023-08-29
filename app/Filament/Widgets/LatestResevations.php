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
                    ->label('Имя'),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Телефон'),
                Tables\Columns\TextColumn::make('guests')
                    ->label('Количество гостей'),
                Tables\Columns\TextColumn::make('date')
                    ->label('Дата'),
                Tables\Columns\TextColumn::make('time')
                    ->label('Время'),
                Tables\Columns\IconColumn::make('isProvided')
                    ->label('Предоставлен')
                    ->boolean(),
            ]);
    }
}
