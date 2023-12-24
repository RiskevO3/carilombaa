<?php

namespace App\Filament\Admin\Resources\PenyelenggaraResource\Pages;

use App\Filament\Admin\Resources\PenyelenggaraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenyelenggaras extends ListRecords
{
    protected static string $resource = PenyelenggaraResource::class;
    protected static ?string $title = 'List Penyelenggara';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Penyelenggara')
            ->color('success'),
        ];
    }
}
