<?php

namespace App\Filament\Resources\JokiPriceResource\Pages;

use App\Filament\Resources\JokiPriceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJokiPrice extends EditRecord
{
    protected static string $resource = JokiPriceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
