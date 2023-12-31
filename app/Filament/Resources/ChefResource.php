<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChefResource\Pages;
use App\Filament\Resources\ChefResource\RelationManagers;
use App\Models\Chef;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ChefResource extends Resource
{
    protected static ?string $model = Chef::class;

    protected static ?string $label = 'Сотрудники';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Сотрудники';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('name')
                        ->label("Имя")
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('about')
                        ->label("Описание")
                        ->required()
                        ->maxLength(255),
                ])->columnSpan(8),
                Forms\Components\Card::make([
                    Forms\Components\FileUpload::make('image')
                        ->label("Изображение")
                        ->image()
                        ->required(),
                ])->columnSpan(4),
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                ->label("Изображение"),
                Tables\Columns\TextColumn::make('name')
                    ->label("Имя")
                    ->searchable(),
                Tables\Columns\TextColumn::make('about')
                    ->label("Описание")
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label("Дата создания")
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label("Дата обновления")
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageChefs::route('/'),
        ];
    }
}
