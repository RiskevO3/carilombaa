<?php

namespace App\Filament\Penyelenggara\Widgets;

use App\Models\Lomba;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Lomba',Lomba::where('penyelenggara_id',auth()->user()->penyelenggara->id)->count())
            ->icon('icon-medal'),
            Stat::make('Total Lomba Aktif',Lomba::where('penyelenggara_id',auth()->user()->penyelenggara->id)->where('is_active',true)->count())
            ->icon('icon-check'),
            Stat::make('Total Peserta',Lomba::where('penyelenggara_id',auth()->user()->penyelenggara->id)->with('pendaftar')->count())
            ->icon('icon-user-circle'),
            // get total peserta aktif 
            Stat::make('Total Peserta Aktif',Lomba::where('penyelenggara_id',auth()->user()->penyelenggara->id)->where('is_active',true)->with('pendaftar')->count())
            ->icon('icon-user-active')
        ];
    }
}
