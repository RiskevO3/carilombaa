<?php

namespace App\Filament\Penyelenggara\Widgets;

use App\Models\Lomba;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalLomba = 0;
        $totalLombaAktif = 0;
        $totalPendaftar = 0;
        $totalPendaftarAktif = 0;
        $allLomba = Lomba::where('penyelenggara_id',Auth::user()->penyelenggara->id)->with('pendaftar')->get();
        foreach ($allLomba as $lomba) {
            $totalPendaftar += $lomba->pendaftar->count();
            $totalLomba++;
            if ($lomba->is_active) {
                $totalLombaAktif++;
                $totalPendaftarAktif += $lomba->pendaftar->count();
            }
        }
        return [
            Stat::make('Total Lomba',$totalLomba)
            ->icon('icon-medal'),
            Stat::make('Total Lomba Aktif',$totalLombaAktif)
            ->icon('icon-check'),
            Stat::make('Total Peserta',$totalPendaftar)
            ->icon('icon-user-circle'),
            // get total peserta aktif 
            Stat::make('Total Peserta Aktif',$totalPendaftarAktif)
            ->icon('icon-user-active')
        ];
    }
}
