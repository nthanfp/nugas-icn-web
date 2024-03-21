<?php

namespace App\Filament\Resources\JokiCategoryResource\Pages;

use App\Filament\Resources\JokiCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJokiCategories extends ListRecords
{
    protected static string $resource = JokiCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add Joki Category')
                ->icon('heroicon-s-plus'),
        ];
    }
}
