<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class ArticleRanks extends ChartWidget
{
    protected static ?string $heading = 'Peringkat Artikel Terbaca';

    protected static ?string $maxHeight = '420px';

    protected int|string|array $columnSpan = 'full';

    protected function getData(): array
    {
        $top = DB::table('articles')
            ->select('title', 'views')
            ->orderByDesc('views')
            ->limit(10)
            ->get();

        return [
            'labels' => $top->pluck('title')->toArray(),
            'datasets' => [
                [
                    'label' => 'Dibaca',
                    'data' => $top->pluck('views')->toArray(),
                    'backgroundColor' => '#fdc20f',
                    'borderColor' => '#e1ab09',
                    'borderWidth' => 1,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
