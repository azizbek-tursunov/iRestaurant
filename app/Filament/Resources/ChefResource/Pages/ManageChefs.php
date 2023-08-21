<?php

namespace App\Filament\Resources\ChefResource\Pages;

use App\Filament\Resources\ChefResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageChefs extends ManageRecords
{
    protected static string $resource = ChefResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
