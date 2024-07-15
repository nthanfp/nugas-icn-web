<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JokiCategoryResource\Pages;
use App\Filament\Resources\JokiCategoryResource\RelationManagers;
use App\Models\JokiCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class JokiCategoryResource extends Resource
{
    protected static ?string $model = JokiCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Joki Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->live(debounce: 250)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\Section::make()->schema([
                    Forms\Components\Repeater::make('prices')
                        ->relationship()
                        ->schema([
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
                        ])
                        ->columns(['md' => 3, 'xl' => 3])
                        ->reorderable(true)
                        ->reorderableWithButtons()
                        ->collapsed()
                        ->cloneable()
                        ->orderColumn('id')
                        ->addActionLabel('Add Joki Prices')
                ]),
                Forms\Components\Section::make()->schema([
                    Forms\Components\Repeater::make('portfolios')
                        ->relationship()
                        ->schema([
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
                        ])
                        ->columns(['md' => 3, 'xl' => 3])
                        ->reorderable(true)
                        ->reorderableWithButtons()
                        ->collapsed()
                        ->cloneable()
                        ->orderColumn('id')
                        ->addActionLabel('Add Joki Portofolio')
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListJokiCategories::route('/'),
            'create' => Pages\CreateJokiCategory::route('/create'),
            'edit' => Pages\EditJokiCategory::route('/{record}/edit'),
        ];
    }
}
