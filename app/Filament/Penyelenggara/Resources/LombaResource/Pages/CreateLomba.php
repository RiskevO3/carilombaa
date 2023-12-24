<?php

namespace App\Filament\Penyelenggara\Resources\LombaResource\Pages;

use App\Filament\Penyelenggara\Resources\LombaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLomba extends CreateRecord
{
    protected static string $resource = LombaResource::class;
    protected static ?string $title = 'Buat Lomba';
}
