<?php

namespace App\Filament\Penyelenggara\Widgets;

use App\Models\Lomba;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        function getTotalPeserta($active = false){
            $total = 0;
            if($active){
                foreach (Lomba::where('penyelenggara_id',auth()->user()->penyelenggara->id)->where('is_active',true)->with('pendaftar')->get() as $lomba) {
                    $total += $lomba->pendaftar->count();
                }
                return $total;
            }else{
                foreach (Lomba::where('penyelenggara_id',auth()->user()->penyelenggara->id)->with('pendaftar')->get() as $lomba) {
                    $total += $lomba->pendaftar->count();
                }
            }
            return $total;
        }
        return [
            Stat::make('Total Lomba',Lomba::where('penyelenggara_id',auth()->user()->penyelenggara->id)->count())
            ->icon('icon-medal'),
            Stat::make('Total Lomba Aktif',Lomba::where('penyelenggara_id',auth()->user()->penyelenggara->id)->where('is_active',true)->count())
            ->icon('icon-check'),
            Stat::make('Total Peserta',getTotalPeserta())
            ->icon('icon-user-circle'),
            // get total peserta aktif 
            Stat::make('Total Peserta Aktif',getTotalPeserta(true))
            ->icon('icon-user-active')
        ];
    }
}
