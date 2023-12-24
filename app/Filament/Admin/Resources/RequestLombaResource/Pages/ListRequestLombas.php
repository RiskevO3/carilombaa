<?php

namespace App\Filament\Admin\Resources\RequestLombaResource\Pages;

use App\Filament\Admin\Resources\RequestLombaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRequestLombas extends ListRecords
{
    protected static string $resource = RequestLombaResource::class;
    protected static ?string $title = 'Request Lomba';
    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
