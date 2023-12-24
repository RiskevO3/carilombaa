<?php

namespace App\Filament\Penyelenggara\Resources\VerifikasiLombaResource\Pages;

use App\Filament\Penyelenggara\Resources\VerifikasiLombaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVerifikasiLomba extends EditRecord
{
    protected static string $resource = VerifikasiLombaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
