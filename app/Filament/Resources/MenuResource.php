<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Menu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $label = 'Меню';
    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Кухня';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('name')
                        ->label("Название")
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('about')
                        ->label("Описание")
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('name_ru')
                        ->label("Название (RU)")
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('about_ru')
                        ->label("Описание (RU)")
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('price')
                        ->label("Цена")
                        ->required()
                        ->numeric()
                        ->prefix('$'),
                ])->columnSpan(8),

                Forms\Components\Card::make([
                    Forms\Components\FileUpload::make('image')
                        ->label("Изображение")
                        ->image()
                        ->required(),
                    Forms\Components\Select::make('category')
                        ->label("Категория")
                        ->relationship('category', 'name')
                        ->required(),
                    Forms\Components\Select::make('time')
                        ->label("Время приема")
                        ->relationship('time', 'name'),
                ])->columnSpan(4)

            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                ->label("Изображение"),
                Tables\Columns\TextColumn::make('name')
                    ->label("Название")
                    ->searchable(),
                Tables\Columns\TextColumn::make('about')
                    ->label("Описание")
                    ->wrap()
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->label("Цена")
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('categories.name')
                    ->label("Категория")
                    ->sortable(),
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
            'index' => Pages\ManageMenus::route('/'),
        ];
    }
}
