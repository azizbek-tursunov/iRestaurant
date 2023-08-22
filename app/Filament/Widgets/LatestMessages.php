<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestMessages extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Contact::query()
                    ->orderBy('created_at', 'desc')
                    ->limit(5),
            )
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('message')
                ->wrap(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
            ]);
    }
}
