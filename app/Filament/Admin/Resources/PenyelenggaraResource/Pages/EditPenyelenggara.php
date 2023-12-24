<?php

namespace App\Filament\Admin\Resources\PenyelenggaraResource\Pages;

use App\Filament\Admin\Resources\PenyelenggaraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyelenggara extends EditRecord
{
    protected static string $resource = PenyelenggaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
