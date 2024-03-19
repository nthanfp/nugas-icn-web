<?php

namespace App\Filament\Resources\JokiPortfolioResource\Pages;

use App\Filament\Resources\JokiPortfolioResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJokiPortfolio extends EditRecord
{
    protected static string $resource = JokiPortfolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
