<?php

namespace App\Filament\Widgets;

use App\Models\Lomba;
use App\Models\Mahasiswa;
use App\Models\Penyelenggara;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Lomba',Lomba::count())
            ->icon('icon-medal'),
            Stat::make('Total Penyelenggara',Penyelenggara::count())
            ->icon('icon-user-circle')
            ,
            Stat::make('Total Lomba',Mahasiswa::count())
            ->icon('icon-user-active')
            ,
        ];
    }
}
