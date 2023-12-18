<?php

namespace App\Filament\Resources\PenyelenggaraResource\Pages;

use App\Filament\Resources\PenyelenggaraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenyelenggaras extends ListRecords
{
    protected static string $resource = PenyelenggaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
