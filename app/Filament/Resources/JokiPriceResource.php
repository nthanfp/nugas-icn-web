<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JokiPriceResource\Pages;
use App\Filament\Resources\JokiPriceResource\RelationManagers;
use App\Models\JokiCategory;
use App\Models\JokiPrice;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JokiPriceResource extends Resource
{
    protected static ?string $model = JokiPrice::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Joki Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_joki_categories')
                    ->label('Joki Categories')
                    ->options(function () {
                        return \App\Models\JokiCategory::pluck('name', 'id');
                    })
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                Forms\Components\TextInput::make('unit')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('unit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('id_joki_categories')
                    ->label('Joki Category Name')  // Set column label
                    ->getStateUsing(function ($record) {  // Pass $record
                        $jokiCategory = \App\Models\JokiCategory::find($record->id_joki_categories);
                        return $jokiCategory ? $jokiCategory->name : '';
                    })
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJokiPrices::route('/'),
            'create' => Pages\CreateJokiPrice::route('/create'),
            'edit' => Pages\EditJokiPrice::route('/{record}/edit'),
        ];
    }
}
