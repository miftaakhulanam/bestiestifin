<?php

namespace App\Filament\Widgets;

use App\Models\Visit;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Date;

class MonthlyVisits extends ChartWidget
{
    protected static ?string $heading = 'Kunjungan Bulanan';

    protected static ?string $maxHeight = '300px';

    protected int|string|array $columnSpan = [
        'md' => 1,
        'xl' => 1,
    ];

    protected function getData(): array
    {
        // Cache data for 1 hour to improve performance
        return Cache::remember('monthly_visits_chart', 3600, function () {
            $visits = Visit::getMonthlyVisits(12);

            $labels = [];
            $data = [];

            // Generate labels for the last 12 months
            for ($i = 11; $i >= 0; $i--) {
                $month = now()->subMonths($i);
                $labels[] = $month->format('M Y');

                // Find visits for this month
                $monthKey = $month->format('Y-m');
                $monthVisits = $visits->where('month', $monthKey)->first();
                $data[] = $monthVisits ? $monthVisits->unique_visits : 0;
            }

            return [
                'labels' => $labels,
                'datasets' => [
                    [
                        'label' => 'Kunjungan Unik',
                        'data' => $data,
                        'borderColor' => '#3b82f6',
                        'backgroundColor' => 'rgba(59,130,246,0.2)',
                        'tension' => 0.35,
                        'fill' => true,
                    ],
                ],
            ];
        });
    }

    protected function getType(): string
    {
        return 'line';
    }
}
