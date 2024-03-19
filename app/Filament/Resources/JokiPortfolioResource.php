<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JokiPortfolioResource\Pages;
use App\Filament\Resources\JokiPortfolioResource\RelationManagers;
use App\Models\JokiCategory;
use App\Models\JokiPortfolio;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JokiPortfolioResource extends Resource
{
    protected static ?string $model = JokiPortfolio::class;
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
                Forms\Components\DatePicker::make('task_date'),
                Forms\Components\TextInput::make('file_url')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '3:2',
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('thumbnail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('file_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('task_date')
                    ->label('Task Date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('id_joki_categories')
                    ->label('Joki Category')  // Set column label
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
            'index' => Pages\ListJokiPortfolios::route('/'),
            'create' => Pages\CreateJokiPortfolio::route('/create'),
            'edit' => Pages\EditJokiPortfolio::route('/{record}/edit'),
        ];
    }
}
