<?php

namespace App\Filament\Widgets;

use App\Models\Visit;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Date;

class DailyVisits extends ChartWidget
{
    protected static ?string $heading = 'Kunjungan Harian';

    protected static ?string $maxHeight = '300px';

    protected int|string|array $columnSpan = [
        'md' => 1,
        'xl' => 1,
    ];

    protected function getData(): array
    {
        // Cache data for 1 hour to improve performance
        return Cache::remember('daily_visits_chart', 3600, function () {
            $visits = Visit::getDailyVisits(7);

            $labels = [];
            $data = [];

            // Generate labels for the last 7 days
            for ($i = 6; $i >= 0; $i--) {
                $day = now()->subDays($i);
                $labels[] = $day->format('d M');

                // Find visits for this day
                $dayVisits = $visits->where('visit_date', $day->toDateString())->first();
                $data[] = $dayVisits ? $dayVisits->unique_visits : 0;
            }

            return [
                'labels' => $labels,
                'datasets' => [
                    [
                        'label' => 'Kunjungan Unik',
                        'data' => $data,
                        'borderColor' => '#10b981',
                        'backgroundColor' => 'rgba(16,185,129,0.2)',
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
