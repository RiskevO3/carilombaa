<?php

namespace App\Filament\Resources\RequestLombaResource\Pages;

use App\Filament\Resources\RequestLombaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRequestLombas extends ListRecords
{
    protected static string $resource = RequestLombaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
