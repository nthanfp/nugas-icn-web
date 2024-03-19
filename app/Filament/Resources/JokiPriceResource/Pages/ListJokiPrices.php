<?php

namespace App\Filament\Resources\JokiPriceResource\Pages;

use App\Filament\Resources\JokiPriceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJokiPrices extends ListRecords
{
    protected static string $resource = JokiPriceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
