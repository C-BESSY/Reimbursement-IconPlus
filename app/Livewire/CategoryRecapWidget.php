<?php

namespace App\Livewire;

use App\Models\ReimbursementForm;
use Filament\Widgets\ChartWidget;

class CategoryRecapWidget extends ChartWidget
{
    protected static ?string $heading = 'Category Recap';

    protected array|string|int $columnSpan = 2;

    protected function getData(): array
    {
        $categories = ReimbursementForm::select('category')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('category')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Categories',
                    'data' => $categories->pluck('count')->toArray(),
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                ],
            ],
            'labels' => $categories->pluck('category')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
