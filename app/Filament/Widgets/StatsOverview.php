<?php

namespace App\Filament\Widgets;

use App\Models\Visit;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Kunjungan Hari Ini', Visit::where('visit_date', today())->distinct('ip_address')->count())
                ->description('Pengunjung unik hari ini')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),

            Stat::make('Kunjungan Minggu Ini', Visit::where('visit_date', '>=', now()->startOfWeek())->distinct('ip_address')->count())
                ->description('Pengunjung unik minggu ini')
                ->descriptionIcon('heroicon-m-calendar-days')
                ->color('primary'),

            Stat::make('Kunjungan Bulan Ini', Visit::where('visit_date', '>=', now()->startOfMonth())->distinct('ip_address')->count())
                ->description('Pengunjung unik bulan ini')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('warning'),

            Stat::make('Total Kunjungan', Visit::distinct('ip_address')->count())
                ->description('Total pengunjung unik')
                ->descriptionIcon('heroicon-m-chart-bar')
                ->color('info'),
        ];
    }
}
