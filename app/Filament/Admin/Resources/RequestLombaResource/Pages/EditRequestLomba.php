<?php

namespace App\Filament\Admin\Resources\RequestLombaResource\Pages;

use App\Filament\Admin\Resources\RequestLombaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRequestLomba extends EditRecord
{
    protected static string $resource = RequestLombaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
