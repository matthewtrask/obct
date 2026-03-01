<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class QuickActions extends Widget
{
    protected static string $view = 'filament.widgets.quick-actions';

    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];
    protected static ?int $sort = 3;
}
