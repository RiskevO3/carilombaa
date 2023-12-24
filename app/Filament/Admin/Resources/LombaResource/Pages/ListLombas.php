<?php

namespace App\Filament\Admin\Resources\LombaResource\Pages;

use App\Filament\Admin\Resources\LombaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLombas extends ListRecords
{
    protected static string $resource = LombaResource::class;
    protected static ?string $title = 'List Lomba';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Lomba')
            ->color('success')
            ,
        ];
    }
}
