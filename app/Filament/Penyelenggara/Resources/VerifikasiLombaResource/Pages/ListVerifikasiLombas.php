<?php

namespace App\Filament\Penyelenggara\Resources\VerifikasiLombaResource\Pages;

use App\Filament\Penyelenggara\Resources\VerifikasiLombaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVerifikasiLombas extends ListRecords
{
    protected static string $resource = VerifikasiLombaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
