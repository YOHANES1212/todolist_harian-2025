<?php

namespace App\Filament\Admin\Widgets;

use App\Models\TaskHistory;
use Filament\Widgets\ChartWidget;

class TaskHistoryStatusChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $data = TaskHistory::selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Task Histories',
                    'data' => $data->values(),
                    'backgroundColor' => ['#f87171', '#60a5fa', '#34d399'], // opsional, biar warnanya beda
                ],
            ],
            'labels' => $data->keys(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
